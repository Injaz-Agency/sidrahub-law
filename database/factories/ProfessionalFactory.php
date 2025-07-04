<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Country;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Professional>
 */
class ProfessionalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $freelancer = fake()->boolean();
        return [
            'user_id' => User::whereNull('role_id')->inRandomOrder()->first()->id,
            'type' => fake()->randomElement(['lawyer', 'accountant']),
            'freelancer' => $freelancer,
            'company_id' => $freelancer ? null : Company::inRandomOrder()->first()->id,
            'image' => null, // Will be filled through admin panel
            'name_en' => fake()->name(),
            'name_ar' => fake('ar_SA')->name(),
            'is_active' => fake()->boolean(85), // 85% chance of being active
            'job_title_en' => fake()->jobTitle(),
            'job_title_ar' => fake('ar_SA')->realText(maxNbChars: 30),
            'description_en' => fake()->realText(maxNbChars: 100),
            'description_ar' => fake('ar_SA')->realText(100),
            'years_of_experience' => fake()->numberBetween(1, 10),
            'info_en' => fake()->realText(200),
            'info_ar' => fake('ar_SA')->realText(maxNbChars: 200),
            'country_id' => Country::inRandomOrder()->first()->id,
        ];
    }
}
