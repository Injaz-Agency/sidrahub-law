<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Professional;
use App\Models\Service;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            CountrySeeder::class,
        ]);

        User::factory(85)->create();
        $services = Service::factory(10)->create();
        Company::factory(20)->create();
        Professional::factory(count: 50)->create()->each(function ($professional) use ($services) {
            $randomServices = $services->random(rand(1, 3));
            $professional->services()->attach($randomServices);
        });
    }
}
