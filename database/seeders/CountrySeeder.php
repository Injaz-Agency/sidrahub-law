<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            [
                'name_en' => 'Saudi Arabia',
                'name_ar' => 'المملكة العربية السعودية',
                'code' => 'SA',
            ],
            [
                'name_en' => 'United Arab Emirates',
                'name_ar' => 'دولة الإمارات العربية المتحدة',
                'code' => 'AE',
            ],
            [
                'name_en' => 'Kuwait',
                'name_ar' => 'دولة الكويت',
                'code' => 'KW',
            ],
            [
                'name_en' => 'Qatar',
                'name_ar' => 'دولة قطر',
                'code' => 'QA',
            ],
            [
                'name_en' => 'Bahrain',
                'name_ar' => 'مملكة البحرين',
                'code' => 'BH',
            ],
            [
                'name_en' => 'Oman',
                'name_ar' => 'سلطنة عمان',
                'code' => 'OM',
            ],
            [
                'name_en' => 'Jordan',
                'name_ar' => 'المملكة الأردنية الهاشمية',
                'code' => 'JO',
            ],
            [
                'name_en' => 'Lebanon',
                'name_ar' => 'الجمهورية اللبنانية',
                'code' => 'LB',
            ],
            [
                'name_en' => 'Egypt',
                'name_ar' => 'جمهورية مصر العربية',
                'code' => 'EG',
            ],
            [
                'name_en' => 'United States',
                'name_ar' => 'الولايات المتحدة الأمريكية',
                'code' => 'US',
            ],
            [
                'name_en' => 'United Kingdom',
                'name_ar' => 'المملكة المتحدة',
                'code' => 'GB',
            ],
            [
                'name_en' => 'Canada',
                'name_ar' => 'كندا',
                'code' => 'CA',
            ],
        ];

        foreach ($countries as $country) {
            Country::firstOrCreate(
                ['code' => $country['code']],
                $country
            );
        }
    }
}
