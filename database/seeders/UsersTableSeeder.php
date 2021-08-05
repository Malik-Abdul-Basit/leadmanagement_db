<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        $arraies = [
            [
                'employee_code' => '1001',
                'title' => 'mr',
                'first_name' => 'Salman Ali',
                'last_name' => 'Maqsood',
                'pseudo_name' => '',
                'gender' => 'm',
                'email' => 'alism@medcaremso.com',
                'password' => md5('1001@medcare'),
                'status' => '1',
                'type' => '5',
                'country_id' => 166,
                'state_id' => 2728,
                'city_id' => 31360,
                'company_id' => 1,
                'branch_id' => 1,
            ],
            [
                'employee_code' => '1162',
                'title' => 'mr',
                'first_name' => 'Arsalan',
                'last_name' => 'Afzal',
                'pseudo_name' => '',
                'gender' => 'm',
                'email' => 'design@medcaremso.com',
                'password' => md5('1162@medcare'),
                'status' => '1',
                'type' => '2',
                'country_id' => 166,
                'state_id' => 2728,
                'city_id' => 31360,
                'company_id' => 1,
                'branch_id' => 1,
            ],
            [
                'employee_code' => '1417',
                'title' => 'mr',
                'first_name' => 'Imran ',
                'last_name' => 'Khan',
                'pseudo_name' => '',
                'gender' => 'm',
                'email' => 'ikhan@medcaremso.com',
                'password' => md5('1417@medcare'),
                'status' => '1',
                'type' => '3',
                'country_id' => 166,
                'state_id' => 2728,
                'city_id' => 31360,
                'company_id' => 1,
                'branch_id' => 1,
            ],
            [
                'employee_code' => '1447',
                'title' => 'mr',
                'first_name' => 'Muhammad',
                'last_name' => 'Immad Ud Dean',
                'pseudo_name' => 'Kevin Peterson',
                'gender' => 'm',
                'email' => 'kpeterson@medcaremso.com',
                'password' => md5('1447@medcare'),
                'status' => '1',
                'type' => '3',
                'country_id' => 166,
                'state_id' => 2728,
                'city_id' => 31360,
                'company_id' => 1,
                'branch_id' => 1,
            ],
            [
                'employee_code' => '1682',
                'title' => 'mr',
                'first_name' => 'Basit',
                'last_name' => 'Khaliq',
                'pseudo_name' => 'bkhaliq',
                'gender' => 'm',
                'email' => 'bkhaliq@medcaremso.com',
                'password' => md5('admin@123'),
                'status' => '1',
                'type' => '1',
                'country_id' => 166,
                'state_id' => 2728,
                'city_id' => 31360,
                'company_id' => 1,
                'branch_id' => 1,
            ],
            [
                'employee_code' => '1876',
                'title' => 'mr',
                'first_name' => 'Muhammad Ijlal',
                'last_name' => 'Butt',
                'pseudo_name' => 'Eric Baker',
                'gender' => 'm',
                'email' => 'ebaker@medcaremso.com',
                'password' => md5('1876@medcare'),
                'status' => '1',
                'type' => '5',
                'country_id' => 166,
                'state_id' => 2728,
                'city_id' => 31360,
                'company_id' => 1,
                'branch_id' => 1,
            ],
            [
                'employee_code' => '1877',
                'title' => 'mr',
                'first_name' => 'Ammar Asif',
                'last_name' => 'Ali Chaudhry',
                'pseudo_name' => 'Luke Maxwell',
                'gender' => 'm',
                'email' => 'lmaxwell@medcaremso.com',
                'password' => md5('1877@medcare'),
                'status' => '1',
                'type' => '5',
                'country_id' => 166,
                'state_id' => 2728,
                'city_id' => 31360,
                'company_id' => 1,
                'branch_id' => 1,
            ],
            [
                'employee_code' => '1878',
                'title' => 'mr',
                'first_name' => 'Ahmad',
                'last_name' => 'Hassan',
                'pseudo_name' => 'Andrew Allison',
                'gender' => 'm',
                'email' => 'aallison@medcaremso.com',
                'password' => md5('1878@medcare'),
                'status' => '1',
                'type' => '5',
                'country_id' => 166,
                'state_id' => 2728,
                'city_id' => 31360,
                'company_id' => 1,
                'branch_id' => 1,
            ],
        ];

        foreach ($arraies as $array) {
            try {
                \App\Models\User::create(
                    [
                        'employee_code' => $array['employee_code'],
                        'title' => $array['title'],
                        'first_name' => $array['first_name'],
                        'last_name' => $array['last_name'],
                        'pseudo_name' => $array['pseudo_name'],
                        'gender' => $array['gender'],
                        'email' => $array['email'],
                        'password' => $array['password'],
                        'email_verified_at' => $now,
                        'status' => $array['status'],
                        'type' => $array['type'],
                        'country_id' => $array['country_id'],
                        'state_id' => $array['state_id'],
                        'city_id' => $array['city_id'],
                        'company_id' => $array['company_id'],
                        'branch_id' => $array['branch_id'],
                        'added_by' => 1,
                        'created_at' => $now,
                        'updated_at' =>$now
                    ]
                );
            }
            catch (Exception $e) {
                Log::error($e->getMessage(),['FILE'=> __FILE__, 'FUNCTION' => __FUNCTION__]);
            }
        }
    }
}
