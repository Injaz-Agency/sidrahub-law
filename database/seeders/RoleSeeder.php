<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'super_admin',
                'display_name_en' => 'Super Administrator',
                'display_name_ar' => 'مدير عام',
            ],
            [
                'name' => 'admin',
                'display_name_en' => 'Administrator',
                'display_name_ar' => 'مدير',
            ],
            [
                'name' => 'moderator',
                'display_name_en' => 'Moderator',
                'display_name_ar' => 'مشرف',
            ],
            [
                'name' => 'company_admin',
                'display_name_en' => 'Company Administrator',
                'display_name_ar' => 'مدير شركة',
            ],
            [
                'name' => 'professional',
                'display_name_en' => 'Professional',
                'display_name_ar' => 'محترف',
            ],
        ];

        foreach ($roles as $role) {
            Role::firstOrCreate(
                ['name' => $role['name']],
                $role
            );
        }

        $super_admin_user = User::updateOrCreate([
            'email' => 'super_admin@admin.com',
        ], [
            'name' => 'Super Admin',
            'role_id' => Role::where('name', 'super_admin')->first()->id,
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);

        $admin_user = User::updateOrCreate([
            'email' => 'admin@admin.com',
        ], [
            'name' => 'Admin',
            'role_id' => Role::where('name', 'admin')->first()->id,
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);

        $moderator_user = User::updateOrCreate([
            'email' => 'moderator@admin.com',
        ], [
            'name' => 'Moderator',
            'role_id' => Role::where('name', 'moderator')->first()->id,
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);

    }
}
