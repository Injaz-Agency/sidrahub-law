# Laravel Policies Documentation

This document explains the authorization policies implemented for the SidraHub Law application.

## Overview

Laravel policies have been created for all major models to control access and authorization throughout the application. The policies follow Laravel best practices and implement role-based access control.

## Role Hierarchy

The system assumes the following role hierarchy (based on the `role.name` field):

1. **super_admin** / **superadmin** - Full system access
2. **admin** / **administrator** - High-level administrative access
3. **manager** - Mid-level management access
4. **Regular Users** - Standard user access

## Policies Created

### 1. UserPolicy (`app/Policies/UserPolicy.php`)

**Permissions:**
- `viewAny`: Admins and managers can view all users
- `view`: Users can view their own profile, admins/managers can view all
- `create`: Only admins and managers can create users
- `update`: Users can update their own profile, admins can update all, managers can update non-admin users
- `delete`: Only admins can delete users (except other admins), users cannot delete themselves
- `assignRole`: Only admins can assign roles to non-admin users

### 2. RolePolicy (`app/Policies/RolePolicy.php`)

**Permissions:**
- `viewAny`: Only admins and super admins
- `view`: Only admins and super admins
- `create`: Only super admins
- `update`: Only super admins
- `delete`: Only super admins (and only if role has no assigned users)

### 3. CountryPolicy (`app/Policies/CountryPolicy.php`)

**Permissions:**
- `viewAny`: All authenticated users (for dropdowns)
- `view`: All authenticated users
- `create`: Only admins and super admins
- `update`: Only admins and super admins
- `delete`: Only super admins (and only if no related records exist)

### 4. CompanyPolicy (`app/Policies/CompanyPolicy.php`)

**Permissions:**
- `viewAny`: All authenticated users
- `view`: Company owners, employees, admins, and managers
- `create`: All authenticated users
- `update`: Company owners and admins/managers
- `delete`: Company owners and admins (only if no employees)
- `manageEmployees`: Company owners and admins/managers
- `addEmployee`: Company owners and admins/managers
- `removeEmployee`: Company owners and admins/managers

### 5. ProfessionalPolicy (`app/Policies/ProfessionalPolicy.php`)

**Permissions:**
- `viewAny`: All authenticated users
- `view`: Own profile, company owners can view employees, fellow employees, admins/managers
- `create`: All authenticated users
- `update`: Own profile, company owners can update employees, admins/managers
- `delete`: Own profile, company owners can delete employees, admins can delete others
- `assignServices`: Own profile, company owners for employees, admins/managers
- `changeCompany`: Only admins/managers
- `manageAsEmployee`: Company owners and admins/managers

### 6. ServicePolicy (`app/Policies/ServicePolicy.php`)

**Permissions:**
- `viewAny`: All authenticated users
- `view`: All authenticated users
- `create`: Admins/managers and company owners
- `update`: Admins/managers, company owners (if they have assigned professionals)
- `delete`: Only admins (and only if no assigned professionals)
- `assignProfessionals`: Admins/managers, company owners, freelance professionals (themselves)
- `detachProfessionals`: Admins/managers, company owners (their employees), professionals (themselves)
- `manageInCountry`: Admins/managers, users with professionals in the same country

## Usage in Controllers

```php
// In your controllers, use the authorize method:

public function index()
{
    $this->authorize('viewAny', User::class);
    // Your logic here
}

public function show(User $user)
{
    $this->authorize('view', $user);
    // Your logic here
}

public function update(Request $request, User $user)
{
    $this->authorize('update', $user);
    // Your logic here
}
```

## Usage in Blade Templates

```blade
@can('create', App\Models\User::class)
    <a href="{{ route('users.create') }}">Create User</a>
@endcan

@can('update', $user)
    <a href="{{ route('users.edit', $user) }}">Edit</a>
@endcan

@can('delete', $user)
    <form method="POST" action="{{ route('users.destroy', $user) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endcan
```

## Usage in Filament Resources

```php
// In your Filament resource classes:

public static function canViewAny(): bool
{
    return auth()->user()->can('viewAny', static::getModel());
}

public static function canCreate(): bool
{
    return auth()->user()->can('create', static::getModel());
}

public static function canView(Model $record): bool
{
    return auth()->user()->can('view', $record);
}

public static function canEdit(Model $record): bool
{
    return auth()->user()->can('update', $record);
}

public static function canDelete(Model $record): bool
{
    return auth()->user()->can('delete', $record);
}
```

## Special Business Logic

### Company Employee Management
- Company owners can manage their employees
- Employees can view their company information
- Fellow employees can see each other's basic information

### Service Assignment
- Professionals can assign themselves to services
- Company owners can assign their employees to services
- Admins can manage all assignments

### Hierarchical Permissions
- Super admins have the highest level of access
- Admins cannot delete or modify other admins
- Managers have limited administrative access
- Regular users have standard access with ownership-based permissions

## Security Considerations

1. **Ownership Checks**: Many policies check ownership (user_id relationships)
2. **Hierarchical Protection**: Admins cannot modify other admins
3. **Relationship Integrity**: Cannot delete records with dependent relationships
4. **Role-Based Access**: Different levels of access based on user roles
5. **Context-Aware**: Permissions vary based on the specific context (e.g., company ownership)

## Testing Policies

```php
// In your tests:

$this->actingAs($user)
     ->get('/users')
     ->assertStatus(200); // If user can view

$this->actingAs($unauthorizedUser)
     ->get('/users')
     ->assertStatus(403); // If user cannot view
```

## Maintenance

When adding new roles or modifying business logic:

1. Update the role checking methods in policies
2. Test all affected permissions
3. Update documentation
4. Consider backwards compatibility
5. Test with different user roles and scenarios

The policies are designed to be maintainable and extensible while providing comprehensive security for the application. 
