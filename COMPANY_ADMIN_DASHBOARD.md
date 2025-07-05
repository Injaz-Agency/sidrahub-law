# Company Admin Dashboard Implementation

## Overview
This implementation provides a comprehensive dashboard for company administrators to manage their company information and professionals.

## Features Implemented

### 1. Updated Login Page
- **File**: `resources/views/livewire/auth/login.blade.php`
- **Changes**: Updated to use the header and footer layouts from the home page
- **Styling**: Follows the home page design with Sidra Hub colors and branding

### 2. Company Admin Dashboard
- **File**: `resources/views/company-admin/dashboard.blade.php`
- **Features**:
  - Responsive layout with header and footer
  - Aside menu with tabs (Dashboard, Professionals)
  - Tab switching functionality with JavaScript
  - Consistent styling with home page colors

### 3. Dashboard Overview Component
- **File**: `app/Livewire/CompanyAdmin/DashboardOverview.php`
- **View**: `resources/views/livewire/company-admin/dashboard-overview.blade.php`
- **Features**:
  - Company status widget showing active/inactive status
  - Statistics cards (Total, Active, Inactive professionals)
  - Company information display
  - Responsive grid layout

### 4. Professionals Management Component
- **File**: `app/Livewire/CompanyAdmin/ProfessionalsManagement.php`
- **View**: `resources/views/livewire/company-admin/professionals-management.blade.php`
- **Features**:
  - CRUD operations for professionals
  - Search functionality
  - Status filtering
  - Pagination
  - Modal forms for create/edit/view
  - Image upload handling
  - Real-time status toggling

## Technical Implementation

### Livewire Components
- **DashboardOverview**: Displays company statistics and status
- **ProfessionalsManagement**: Handles all professional-related operations

### Styling
- Uses Tailwind CSS classes defined in `tailwind.config.js`
- Follows the home page color scheme:
  - `main`: #051459 (Primary blue)
  - `second`: #FF8216 (Orange accent)
  - `sh-border`: #C6C6C6 (Border color)
  - `dark-gary`: #777777 (Text color)
  - `sh-background`: #FAFAFC (Background color)

### File Structure
```
resources/views/
├── company-admin/
│   └── dashboard.blade.php
└── livewire/company-admin/
    ├── dashboard-overview.blade.php
    └── professionals-management.blade.php

app/Livewire/CompanyAdmin/
├── DashboardOverview.php
└── ProfessionalsManagement.php
```

## Usage

### Accessing the Dashboard
1. Login as a company admin user
2. Navigate to `/dashboard` (will automatically redirect to company admin dashboard)
3. Use the aside menu to switch between Dashboard and Professionals tabs

### Managing Professionals
1. Click on the "Professionals" tab
2. Use the search bar to find specific professionals
3. Use the status filter to show active/inactive professionals
4. Click "Add Professional" to create new entries
5. Use the action buttons (view, edit, delete) for each professional

## Security Features
- Role-based access control (only company_admin users can access)
- Company-specific data isolation (users only see their company's professionals)
- Input validation and sanitization
- File upload security (image validation and storage)

## Responsive Design
- Mobile-friendly layout
- Responsive tables with horizontal scrolling
- Adaptive grid layouts
- Touch-friendly interface elements

## Dependencies
- Laravel Livewire for reactive components
- Tailwind CSS for styling
- Laravel's built-in authentication and authorization
- File storage for image uploads 
