# Company Profile Updates

## Overview
Updated the company profile form to meet specific requirements for legal entity selection, license file upload, and admin review workflow.

## Changes Made

### 1. Legal Entity Field
- **Before**: Text input field
- **After**: Select dropdown with predefined options
- **Options**:
  - "Please select" (empty value)
  - "Individual Lawyer" (individual_lawyer)
  - "Law Firm" (law_firm)
- **Validation**: Only accepts the predefined values

### 2. License Field
- **Before**: Text input field
- **After**: File upload input that accepts PDF files only
- **Features**:
  - File type validation (PDF only)
  - File size limit (2MB max)
  - Shows current license file if exists
  - Stores files in `storage/app/public/licenses/` directory
  - Provides download link for existing licenses

### 3. Status Field
- **Before**: User-editable checkbox in edit form
- **After**: Removed from edit form completely
- **Behavior**: 
  - Status is automatically set to `false` when company profile is updated
  - This triggers admin review workflow
  - Users cannot directly change their company status

### 4. Admin Review Workflow
- **Trigger**: Any company profile update
- **Action**: Company status automatically set to `false`
- **Notification**: Success message informs user that changes are pending admin review
- **Purpose**: Ensures all company changes are reviewed by administrators before activation

## Technical Implementation

### Updated Component (`app/Livewire/CompanyAdmin/CompanyProfile.php`)

#### New Properties
```php
public $newLicense; // For handling license file uploads
```

#### Updated Validation Rules
```php
'legal_entity' => 'nullable|in:individual_lawyer,law_firm',
'newLicense' => 'nullable|file|mimes:pdf|max:2048',
```

#### File Upload Handling
```php
// Handle license file upload
if ($this->newLicense) {
    // Delete old license if exists
    if ($this->company->license) {
        Storage::disk('public')->delete($this->company->license);
    }
    
    $licensePath = $this->newLicense->store('licenses', 'public');
    $this->company->license = $licensePath;
}
```

#### Admin Review Logic
```php
// Update company data - set is_active to false for admin review
$this->company->update([
    // ... other fields ...
    'is_active' => false, // Set to false for admin review
]);
```

### Updated View (`resources/views/livewire/company-admin/company-profile.blade.php`)

#### Legal Entity Select
```html
<select wire:model="legal_entity">
    <option value="">{{ __('Please select') }}</option>
    <option value="individual_lawyer">{{ __('Individual Lawyer') }}</option>
    <option value="law_firm">{{ __('Law Firm') }}</option>
</select>
```

#### License File Upload
```html
<input type="file" wire:model="newLicense" accept=".pdf">
```

#### License Display in View Mode
```html
@if ($license)
    <a href="{{ asset('storage/' . $license) }}" target="_blank">
        {{ __('View License') }}
    </a>
@endif
```

## New Translations Added

### English (`lang/en/main.php`)
- `'Please select' => 'Please select'`
- `'Individual Lawyer' => 'Individual Lawyer'`
- `'Law Firm' => 'Law Firm'`
- `'Current License' => 'Current License'`
- `'View License' => 'View License'`
- `'Company profile updated successfully! Your changes are pending admin review.' => 'Company profile updated successfully! Your changes are pending admin review.'`

### Arabic (`lang/ar/main.php`)
- `'Please select' => 'الرجاء الاختيار'`
- `'Individual Lawyer' => 'محامي فردي'`
- `'Law Firm' => 'مكتب محاماة'`
- `'Current License' => 'الترخيص الحالي'`
- `'View License' => 'عرض الترخيص'`
- `'Company profile updated successfully! Your changes are pending admin review.' => 'تم تحديث ملف الشركة بنجاح! تغييراتك قيد مراجعة الإدارة.'`

## User Experience

### Edit Form
1. **Legal Entity**: Dropdown with clear options
2. **License**: File upload with PDF restriction and current file indicator
3. **No Status Field**: Users cannot change their company status
4. **Clear Feedback**: Success message explains admin review process

### View Mode
1. **Legal Entity**: Shows selected option in readable format
2. **License**: Shows download link if file exists
3. **Status**: Displays current status (Active/Inactive)

## Security & Validation

### File Upload Security
- **Type Validation**: Only PDF files accepted
- **Size Limit**: Maximum 2MB per file
- **Storage**: Files stored in secure public directory
- **Cleanup**: Old files automatically deleted when replaced

### Data Validation
- **Legal Entity**: Only predefined values allowed
- **Required Fields**: Company names and country remain required
- **Optional Fields**: All other fields are optional

## Admin Workflow

### Review Process
1. Company owner updates profile
2. Company status automatically set to `false`
3. Admin receives notification (to be implemented)
4. Admin reviews changes in admin panel
5. Admin approves/rejects changes
6. Company status updated accordingly

### Benefits
- **Quality Control**: All changes reviewed before activation
- **Compliance**: Ensures legal entity and license requirements are met
- **Audit Trail**: Complete history of changes and approvals
- **User Confidence**: Clear feedback about review process

## File Storage

### Directory Structure
```
storage/app/public/
├── companies/     # Company logos
└── licenses/      # License PDF files
```

### File Management
- **Automatic Cleanup**: Old files deleted when replaced
- **Secure Access**: Files accessible via public storage
- **Backup Ready**: Files stored in standard Laravel structure

## Future Enhancements

### Admin Panel Integration
- Notification system for pending reviews
- Bulk approval/rejection functionality
- Change history and audit logs
- Email notifications to company owners

### Enhanced File Management
- File preview in admin panel
- Multiple license file support
- File expiration tracking
- Automatic file validation

### Workflow Improvements
- Status change notifications
- Approval/rejection reasons
- Time-based auto-approval for minor changes
- Escalation for urgent reviews 
