<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SourcesTableSeeder extends Seeder
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
                'name' => 'Google Ads', 'sort_by' => '10', 'type' => 'seo',
                'accounts' => []
            ],
            [
                'name' => 'Generic', 'sort_by' => '20', 'type' => 'seo',
                'accounts' => []
            ],
            [
                'name' => 'LinkedIn', 'sort_by' => '10', 'type' => 'smm',
                'accounts' => [
                    ['name' => 'Roger Adams'],
                    ['name' => 'Bill Carter'],
                    ['name' => 'Beth Luckner'],
                    ['name' => 'Chris Rogers'],
                    ['name' => 'Josh Hamilton'],
                    ['name' => 'Jim Collins'],
                    ['name' => 'Kevin Peterson'],
                    ['name' => 'Andrew Allison'],
                    ['name' => 'Mike Spencer'],
                    ['name' => 'Elijah Obrien'],
                ],
            ],
            [
                'name' => 'Outlook', 'sort_by' => '10', 'type' => 'em',
                'accounts' => [
                    ['name' => 'crogers@medcaremsoservices.com'],
                    ['name' => 'jhamilton@medcaremsoservices.com'],
                    ['name' => 'kpeterson@medcaremsoservices.com'],
                ],
            ]
        ];

        foreach ($arraies as $array) {
            try {
                $source = \App\Models\Source::create(
                    [
                        'name' => $array['name'],
                        'sort_by' => $array['sort_by'],
                        'type' => $array['type'],
                        'added_by' => 1,
                        'company_id' => 1,
                        'branch_id' => 1,
                        'created_at' => $now,
                        'updated_at' => $now
                    ]
                );
                $source_id = $source->id;
                $type = $array['type'];
                $accounts = $array['accounts'];
                if(count($accounts) > 0 ){
                    foreach ($accounts as $account) {
                        try {
                            \App\Models\Account::create(
                                [
                                    'name' => $account['name'],
                                    'type' => $type,
                                    'source_id' => $source_id,
                                    'added_by' => 1,
                                    'company_id' => 1,
                                    'branch_id' => 1,
                                    'created_at' => $now,
                                    'updated_at' => $now
                                ]
                            );
                        }
                        catch (Exception $e) {
                            Log::error($e->getMessage(),['FILE'=> __FILE__, 'FUNCTION' => __FUNCTION__]);
                        }
                    }
                }
            } catch (Exception $e) {
                Log::error($e->getMessage(), ['FILE' => __FILE__, 'FUNCTION' => __FUNCTION__]);
            }
        }
    }
}
