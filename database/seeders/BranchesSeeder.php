<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BranchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Branch::create(
            [
                'name' => 'Medcare MSO FSD',
                'company_email' => 'info@medcaremso.com',
                'hr_email' => 'hr@medcaremso.com',
                'other_email' => 'atifmit@gmail.com',
                'dial_code' => '92',
                'iso' => 'pk',
                'mobile' => '300-775 8880',
                'phone' => '(041) 539-0001',
                'fax' => '',
                'web' => 'https://medcaremso.com',
                'address' => 'P-8, Palm Breez Tower, Kohinoor Town, FSD',
                'status' => '1',
                'type' => 'o',
                'company_id' => 1,
                'country_id' => 166,
                'state_id' => 2728,
                'city_id' => 31360,
                'added_by' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
    }
}
