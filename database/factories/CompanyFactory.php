<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $imageUrl = "https://placehold.co/{$width}x{$height}/{$bgColor}/{$textColor}.png?text={$text}";

        return [
            'user_id' => User::whereNull('role_id')->inRandomOrder()->first()->id,
            'name_en' => fake()->company(),
            'name_ar' => fake('ar_SA')->company(),
            'registration_number' => fake()->unique()->randomNumber(9),
            'legal_entity' => fake()->randomElement(['LLC', 'Corporation', 'Partnership', 'Sole Proprietorship']),
            'license' => null, // Will be handled separately for file uploads
            'is_active' => fake()->boolean(80), // 80% chance of being active
            'about_ar' => fake('ar_SA')->realText(maxNbChars: 200),
            'about_en' => fake()->realText(maxNbChars: 200),
            'address_en' => fake()->address(),
            'address_ar' => fake('ar_SA')->address(),
            'image' => fake()->imageUrl(),
            'country_id' => Country::inRandomOrder()->first()->id,
        ];
    }
}
