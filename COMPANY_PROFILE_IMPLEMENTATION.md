# Company Profile Implementation

## Overview
This implementation adds a new "Company Profile" tab to the company admin dashboard, allowing company owners to view and edit their company information.

## Features Implemented

### 1. Company Profile Tab
- **Location**: Added to the company admin dashboard at `/locale/dashboard`
- **Navigation**: New tab in the aside menu with company icon
- **Access**: Only available to authenticated users with company ownership

### 2. Company Profile Component
- **File**: `app/Livewire/CompanyAdmin/CompanyProfile.php`
- **View**: `resources/views/livewire/company-admin/company-profile.blade.php`
- **Features**:
  - View mode: Display all company information in a clean, organized layout
  - Edit mode: Comprehensive form for updating company data
  - Image upload: Company logo management with file validation
  - Real-time validation: Form validation with error messages
  - Success notifications: Flash messages for successful updates

### 3. Company Data Fields
Based on the companies table structure, the following fields are managed:

#### Basic Information
- Company Name (English & Arabic) - Required
- Registration Number
- Legal Entity
- License
- Country - Required
- Status (Active/Inactive)

#### Contact Information
- Address (English & Arabic)

#### Company Details
- About (English & Arabic)
- Company Logo

### 4. User Interface
- **Design**: Follows the home page styling with Sidra Hub colors
- **Colors**: Uses the color scheme from `tailwind.config.js`:
  - `main`: #051459 (Primary blue)
  - `second`: #FF8216 (Orange accent)
  - `sh-border`: #C6C6C6 (Border color)
  - `dark-gary`: #777777 (Text color)
  - `sh-background`: #FAFAFC (Background color)
- **Responsive**: Mobile-friendly layout with responsive grids
- **Accessibility**: Proper form labels and error handling

### 5. Security Features
- **Authorization**: Only company owners can access and edit their company data
- **Validation**: Server-side validation for all form fields
- **File Upload**: Secure image upload with type and size validation
- **Data Isolation**: Users can only access their own company data

## Technical Implementation

### Livewire Component Structure
```php
class CompanyProfile extends Component
{
    use WithFileUploads;
    
    // Properties for form fields
    public $company, $isEditing, $name_en, $name_ar, ...
    
    // Validation rules
    protected $rules = [...];
    
    // Methods
    public function mount() { ... }
    public function loadCompanyData() { ... }
    public function startEditing() { ... }
    public function cancelEditing() { ... }
    public function save() { ... }
}
```

### View Structure
- **View Mode**: Clean display of company information with edit button
- **Edit Mode**: Comprehensive form with all company fields
- **Error Handling**: Validation error display for each field
- **Success Messages**: Flash notifications for successful operations

### Database Integration
- **Model**: Uses the existing `Company` model
- **Relationships**: Leverages existing relationships with `Country` model
- **File Storage**: Uses Laravel's file storage system for image uploads

## Usage

### Accessing Company Profile
1. Login as a company admin user
2. Navigate to `/locale/dashboard`
3. Click on the "Company Profile" tab in the aside menu

### Viewing Company Information
- All company data is displayed in an organized, readable format
- Company logo is shown prominently
- Status indicators show active/inactive state
- Information is grouped by category (Company Information, Contact Information, About)

### Editing Company Information
1. Click the "Edit Profile" button
2. Update any desired fields
3. Upload a new company logo if needed
4. Click "Save Changes" to update
5. Click "Cancel" to discard changes

## File Structure
```
app/Livewire/CompanyAdmin/
└── CompanyProfile.php

resources/views/
├── company-admin/
│   └── dashboard.blade.php (updated with new tab)
└── livewire/company-admin/
    └── company-profile.blade.php

lang/
├── en/main.php (updated with translations)
└── ar/main.php (updated with translations)
```

## Dependencies
- Laravel Livewire for reactive components
- Tailwind CSS for styling
- Laravel's built-in file storage system
- Existing Company and Country models

## Future Enhancements
- Company service management
- Company document uploads
- Company analytics and statistics
- Multi-language support for all form fields
- Advanced image editing capabilities 
