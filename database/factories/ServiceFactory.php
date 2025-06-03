<?php

namespace Database\Factories;

use App\Models\Country;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    protected array $arabicServices = [
        'تسجيل شركة',
        'تسجيل كمستقل',
        'تسجيل علامة تجارية',
        'الباقات السنوية للخدمات القانونية',
        'حجز معاد لعمل توكيل',
        'تعديلات على السجل التجاري',
        'جمعيات عادية و غير عادية',
        'مستخرج من السجل التجاري',
        'صحيفة الاستثمار',
        'فتح ملف تأميني',
        'خدمة حساب الضرائب للمستقل',
        'تجديد البطاقة الضريبية',
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $arabicFaker = FakerFactory::create(locale: 'ar_SA');

        return [
            'title_en' => fake()->sentence(3),
            'title_ar' => $this->faker->randomElement($this->arabicServices),
            'description_en' => fake()->realText(30),
            'description_ar' => $arabicFaker->realText(maxNbChars: 200),
            'country_id' => Country::inRandomOrder()->first()->id,
        ];
    }
}
