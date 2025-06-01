# SidraHub Law - Legal Services Management System

A comprehensive Laravel-based legal services management system with Filament admin panel, supporting multilingual content (English/Arabic) and role-based access control.

## Features

### Core Functionality
- **Multi-language Support**: Full English and Arabic language support
- **Role-based Access Control**: Super Admin, Admin, Moderator, Company Admin, and Professional roles
- **User Management**: Complete user registration and management system
- **Company Management**: Company registration with multilingual details
- **Professional Management**: Lawyer and accountant profiles with specializations
- **Service Management**: Legal and accounting services catalog
- **Location Management**: Country-based organization

### Professional Types
- **Lawyers**: Job titles, specializations, years of experience
- **Accountants**: Service descriptions, expertise areas
- **Freelancers**: Independent professionals
- **Company Employees**: Professionals associated with law firms

### Admin Panel Features
- **Filament Admin Panel**: Modern, responsive admin interface
- **CRUD Operations**: Full create, read, update, delete functionality
- **Soft Deletes**: Safe deletion with restore capabilities
- **Advanced Filtering**: Filter by country, type, status, etc.
- **Search Functionality**: Global search across all entities
- **Relationship Management**: Manage professional-service associations
- **File Uploads**: Company logos and document management

## Installation

### Prerequisites
- PHP 8.2 or higher
- Composer
- Node.js and NPM
- MySQL/PostgreSQL database

### Setup Instructions

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd sidrahub-law
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment Configuration**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database Configuration**
   Update your `.env` file with database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=sidrahub_law
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

6. **Run Migrations and Seeders**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

7. **Create Admin User**
   ```bash
   php artisan admin:create --name="Admin" --email="admin@example.com" --password="password"
   ```

8. **Build Assets**
   ```bash
   npm run build
   ```

9. **Start Development Server**
   ```bash
   php artisan serve
   ```

## Database Schema

### Core Tables

#### Users
- `id`, `name`, `email`, `password`
- `role_id` (foreign key to roles)
- `email_verified_at`, `created_at`, `updated_at`

#### Roles
- `id`, `name`, `display_name_en`, `display_name_ar`
- `created_at`, `updated_at`, `deleted_at`

#### Countries
- `id`, `name_en`, `name_ar`, `code`
- `created_at`, `updated_at`, `deleted_at`

#### Companies
- `id`, `user_id`, `name_en`, `name_ar`
- `registration_number`, `address_en`, `address_ar`
- `image`, `country_id`
- `created_at`, `updated_at`, `deleted_at`

#### Professionals
- `id`, `user_id`, `type` (lawyer/accountant)
- `freelancer` (boolean), `company_id`
- `name_en`, `name_ar`
- `job_title_en`, `job_title_ar` (for lawyers)
- `description_en`, `description_ar` (for accountants)
- `years_of_experience`, `info_en`, `info_ar`
- `country_id`
- `created_at`, `updated_at`, `deleted_at`

#### Services
- `id`, `title_en`, `title_ar`
- `description_en`, `description_ar`
- `country_id`
- `created_at`, `updated_at`, `deleted_at`

#### Service Providers (Pivot Table)
- `id`, `service_id`, `professional_id`
- `created_at`, `updated_at`

## Admin Panel Access

1. **URL**: `http://your-domain.com/admin`
2. **Default Credentials**: Use the admin user created during setup
3. **Navigation Groups**:
   - **User Management**: Users, Roles
   - **Location Management**: Countries
   - **Business Management**: Companies, Professionals
   - **Service Management**: Services

## API Endpoints (Future Development)

The system is designed to support API development for:
- Mobile applications
- Third-party integrations
- Public service directory
- Professional search functionality

## Role Permissions

### Super Admin
- Full system access
- User and role management
- System configuration

### Admin
- Manage companies and professionals
- Moderate content
- View reports

### Moderator
- Review and approve content
- Manage service listings

### Company Admin
- Manage company profile
- Add/remove company professionals
- Manage company services

### Professional
- Manage personal profile
- Update service offerings
- View client inquiries

## Multilingual Support

The system supports both English and Arabic languages:
- All content fields have `_en` and `_ar` variants
- Admin panel displays both language versions
- Future frontend can switch between languages
- RTL support ready for Arabic content

## File Storage

- Company logos stored in `storage/app/public/companies/`
- Configurable storage drivers (local, S3, etc.)
- Image optimization and validation

## Security Features

- Role-based access control
- Password hashing
- CSRF protection
- SQL injection prevention
- XSS protection
- Soft deletes for data recovery

## Development

### Adding New Features
1. Create models with relationships
2. Generate Filament resources
3. Update navigation groups
4. Add appropriate permissions

### Code Structure
- **Models**: `app/Models/`
- **Migrations**: `database/migrations/`
- **Seeders**: `database/seeders/`
- **Filament Resources**: `app/Filament/Resources/`
- **Commands**: `app/Console/Commands/`

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Add tests if applicable
5. Submit a pull request

## License

This project is licensed under the MIT License.

## Support

For support and questions, please contact the development team or create an issue in the repository. 
