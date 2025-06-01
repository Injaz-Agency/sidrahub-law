<?php

namespace App\Console\Commands;

use App\Models\Role;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:create {--name=Admin} {--email=admin@example.com} {--password=password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create an admin user for Filament';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->option('name');
        $email = $this->option('email');
        $password = $this->option('password');

        // Get super_admin role
        $superAdminRole = Role::where('name', 'super_admin')->first();

        if (!$superAdminRole) {
            $this->error('Super admin role not found. Please run the seeders first.');
            return 1;
        }

        // Check if user already exists
        if (User::where('email', $email)->exists()) {
            $this->error('User with this email already exists.');
            return 1;
        }

        // Create the admin user
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'role_id' => $superAdminRole->id,
            'email_verified_at' => now(),
        ]);

        $this->info("Admin user created successfully!");
        $this->info("Email: {$email}");
        $this->info("Password: {$password}");
        $this->info("You can now login to the admin panel at /admin");

        return 0;
    }
}
