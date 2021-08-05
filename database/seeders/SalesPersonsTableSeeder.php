<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SalesPersonsTableSeeder extends Seeder
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
                'first_name' => 'Sales',
                'last_name' => 'Person 1',
                'email' => 'sales.person1@gmail.com',
                'gender' => 'm',
                'status' => '1',
                'company_id' => 1,
                'branch_id' => 1,
            ],
            [
                'first_name' => 'Sales',
                'last_name' => 'Person 2',
                'email' => 'sales.person2@gmail.com',
                'gender' => 'f',
                'status' => '1',
                'company_id' => 1,
                'branch_id' => 1,
            ],

        ];

        foreach ($arraies as $array) {
            try {
                \App\Models\SalesPerson::create(
                    [
                        'first_name' => $array['first_name'],
                        'last_name' => $array['last_name'],
                        'email' => $array['email'],
                        'gender' => $array['gender'],
                        'status' => $array['status'],
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
