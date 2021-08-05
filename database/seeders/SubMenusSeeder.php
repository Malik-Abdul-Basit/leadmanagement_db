<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubMenusSeeder extends Seeder
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
                'name' => 'Company', 'sort_by' => '10', 'status' => '1', 'main_menu_id' => '1',
                'child_menus' => [
                    ['sort_by' => '10', 'status' => '1', 'menu_link' => '1', 'display_name' => 'Add', 'file_name' => 'company', 'user_right_title' => '', 'action' => ''],
                    ['sort_by' => '20', 'status' => '1', 'menu_link' => '1', 'display_name' => 'List', 'file_name' => 'company_list', 'user_right_title' => '', 'action' => ''],
                ],
            ],
            [
                'name' => 'Branch', 'sort_by' => '20', 'status' => '1', 'main_menu_id' => '1',
                'child_menus' => [
                    ['sort_by' => '10', 'status' => '1', 'menu_link' => '1', 'display_name' => 'Add', 'file_name' => 'branch', 'user_right_title' => 'branch', 'action' => '{"add":"Add"}'],
                    ['sort_by' => '20', 'status' => '1', 'menu_link' => '1', 'display_name' => 'List', 'file_name' => 'branch_list', 'user_right_title' => 'branch', 'action' => '{"edit":"Edit","delete":"Delete","view":"View"}'],
                ],
            ],
            [
                'name' => 'User', 'sort_by' => '30', 'status' => '1', 'main_menu_id' => '1',
                'child_menus' => [
                    ['sort_by' => '10', 'status' => '1', 'menu_link' => '1', 'display_name' => 'Add', 'file_name' => 'user', 'user_right_title' => 'user', 'action' => '{"add":"Add"}'],
                    ['sort_by' => '20', 'status' => '1', 'menu_link' => '1', 'display_name' => 'List', 'file_name' => 'user_list', 'user_right_title' => 'user', 'action' => '{"edit":"Edit","delete":"Delete","view":"View"}'],
                    ['sort_by' => '30', 'status' => '1', 'menu_link' => '1', 'display_name' => 'Rights', 'file_name' => 'user_rights', 'user_right_title' => 'user', 'action' => '{"assign_rights":"Assign Rights"}'],
                    ['sort_by' => '40', 'status' => '1', 'menu_link' => '1', 'display_name' => 'Upload Image', 'file_name' => 'user_image', 'user_right_title' => 'user_image', 'action' => '{"add":"Add","edit":"Edit","delete":"Delete","view":"View"}'],
                ],
            ],
            [
                'name' => 'Sales Person', 'sort_by' => '40', 'status' => '1', 'main_menu_id' => '1',
                'child_menus' => [
                    ['sort_by' => '10', 'status' => '1', 'menu_link' => '1', 'display_name' => 'Add', 'file_name' => 'sales_person', 'user_right_title' => 'sales_person', 'action' => '{"add":"Add"}'],
                    ['sort_by' => '20', 'status' => '1', 'menu_link' => '1', 'display_name' => 'List', 'file_name' => 'sales_person_list', 'user_right_title' => 'sales_person', 'action' => '{"edit":"Edit","delete":"Delete","view":"View"}'],
                ],
            ],

            [
                'name' => 'Source', 'sort_by' => '10', 'status' => '1', 'main_menu_id' => '2',
                'child_menus' => [
                    ['sort_by' => '10', 'status' => '1', 'menu_link' => '1', 'display_name' => 'Add', 'file_name' => 'seo_source', 'user_right_title' => 'seo_source', 'action' => '{"add":"Add"}'],
                    ['sort_by' => '20', 'status' => '1', 'menu_link' => '1', 'display_name' => 'List', 'file_name' => 'seo_source_list', 'user_right_title' => 'seo_source', 'action' => '{"edit":"Edit","delete":"Delete","view":"View"}'],
                ],
            ],
            [
                'name' => 'Campaign', 'sort_by' => '20', 'status' => '1', 'main_menu_id' => '2',
                'child_menus' => [
                    ['sort_by' => '10', 'status' => '1', 'menu_link' => '1', 'display_name' => 'Add', 'file_name' => 'seo_campaign', 'user_right_title' => 'seo_campaign', 'action' => '{"add":"Add"}'],
                    ['sort_by' => '20', 'status' => '1', 'menu_link' => '1', 'display_name' => 'List', 'file_name' => 'seo_campaign_list', 'user_right_title' => 'seo_campaign', 'action' => '{"edit":"Edit","delete":"Delete","view":"View"}'],
                ],
            ],
            [
                'name' => 'Lead', 'sort_by' => '30', 'status' => '1', 'main_menu_id' => '2',
                'child_menus' => [
                    ['sort_by' => '10', 'status' => '1', 'menu_link' => '1', 'display_name' => 'Add', 'file_name' => 'seo_lead', 'user_right_title' => 'seo_lead', 'action' => '{"add":"Add"}'],
                    ['sort_by' => '20', 'status' => '1', 'menu_link' => '1', 'display_name' => 'List', 'file_name' => 'seo_lead_list', 'user_right_title' => 'seo_lead', 'action' => '{"edit":"Edit","delete":"Delete","view":"View"}'],
                ],
            ],


            [
                'name' => 'Source', 'sort_by' => '10', 'status' => '1', 'main_menu_id' => '3',
                'child_menus' => [
                    ['sort_by' => '10', 'status' => '1', 'menu_link' => '1', 'display_name' => 'Add', 'file_name' => 'smm_source', 'user_right_title' => 'smm_source', 'action' => '{"add":"Add"}'],
                    ['sort_by' => '20', 'status' => '1', 'menu_link' => '1', 'display_name' => 'List', 'file_name' => 'smm_source_list', 'user_right_title' => 'smm_source', 'action' => '{"edit":"Edit","delete":"Delete","view":"View"}'],
                ],
            ],
            [
                'name' => 'Account', 'sort_by' => '20', 'status' => '1', 'main_menu_id' => '3',
                'child_menus' => [
                    ['sort_by' => '10', 'status' => '1', 'menu_link' => '1', 'display_name' => 'Add', 'file_name' => 'smm_account', 'user_right_title' => 'smm_account', 'action' => '{"add":"Add"}'],
                    ['sort_by' => '20', 'status' => '1', 'menu_link' => '1', 'display_name' => 'List', 'file_name' => 'smm_account_list', 'user_right_title' => 'smm_account', 'action' => '{"edit":"Edit","delete":"Delete","view":"View"}'],
                ],
            ],
            [
                'name' => 'Campaign Type', 'sort_by' => '30', 'status' => '1', 'main_menu_id' => '3',
                'child_menus' => [
                    ['sort_by' => '10', 'status' => '1', 'menu_link' => '1', 'display_name' => 'Add', 'file_name' => 'smm_campaign_type', 'user_right_title' => 'smm_campaign_type', 'action' => '{"add":"Add"}'],
                    ['sort_by' => '20', 'status' => '1', 'menu_link' => '1', 'display_name' => 'List', 'file_name' => 'smm_campaign_type_list', 'user_right_title' => 'smm_campaign_type', 'action' => '{"edit":"Edit","delete":"Delete","view":"View"}'],
                ],
            ],
            [
                'name' => 'Campaign', 'sort_by' => '40', 'status' => '1', 'main_menu_id' => '3',
                'child_menus' => [
                    ['sort_by' => '10', 'status' => '1', 'menu_link' => '1', 'display_name' => 'Add', 'file_name' => 'smm_campaign', 'user_right_title' => 'smm_campaign', 'action' => '{"add":"Add"}'],
                    ['sort_by' => '20', 'status' => '1', 'menu_link' => '1', 'display_name' => 'List', 'file_name' => 'smm_campaign_list', 'user_right_title' => 'smm_campaign', 'action' => '{"edit":"Edit","delete":"Delete","view":"View"}'],
                ],
            ],
            [
                'name' => 'Lead', 'sort_by' => '50', 'status' => '1', 'main_menu_id' => '3',
                'child_menus' => [
                    ['sort_by' => '10', 'status' => '1', 'menu_link' => '1', 'display_name' => 'Add', 'file_name' => 'smm_lead', 'user_right_title' => 'smm_lead', 'action' => '{"add":"Add"}'],
                    ['sort_by' => '20', 'status' => '1', 'menu_link' => '1', 'display_name' => 'List', 'file_name' => 'smm_lead_list', 'user_right_title' => 'smm_lead', 'action' => '{"edit":"Edit","delete":"Delete","view":"View"}'],
                ],
            ],


            [
                'name' => 'Source', 'sort_by' => '10', 'status' => '1', 'main_menu_id' => '4',
                'child_menus' => [
                    ['sort_by' => '10', 'status' => '1', 'menu_link' => '1', 'display_name' => 'Add', 'file_name' => 'em_source', 'user_right_title' => 'em_source', 'action' => '{"add":"Add"}'],
                    ['sort_by' => '20', 'status' => '1', 'menu_link' => '1', 'display_name' => 'List', 'file_name' => 'em_source_list', 'user_right_title' => 'em_source', 'action' => '{"edit":"Edit","delete":"Delete","view":"View"}'],
                ],
            ],
            [
                'name' => 'Account', 'sort_by' => '20', 'status' => '1', 'main_menu_id' => '4',
                'child_menus' => [
                    ['sort_by' => '10', 'status' => '1', 'menu_link' => '1', 'display_name' => 'Add', 'file_name' => 'em_account', 'user_right_title' => 'em_account', 'action' => '{"add":"Add"}'],
                    ['sort_by' => '20', 'status' => '1', 'menu_link' => '1', 'display_name' => 'List', 'file_name' => 'em_account_list', 'user_right_title' => 'em_account', 'action' => '{"edit":"Edit","delete":"Delete","view":"View"}'],
                ],
            ],
            [
                'name' => 'Campaign Type', 'sort_by' => '30', 'status' => '1', 'main_menu_id' => '4',
                'child_menus' => [
                    ['sort_by' => '10', 'status' => '1', 'menu_link' => '1', 'display_name' => 'Add', 'file_name' => 'em_campaign_type', 'user_right_title' => 'em_campaign_type', 'action' => '{"add":"Add"}'],
                    ['sort_by' => '20', 'status' => '1', 'menu_link' => '1', 'display_name' => 'List', 'file_name' => 'em_campaign_type_list', 'user_right_title' => 'em_campaign_type', 'action' => '{"edit":"Edit","delete":"Delete","view":"View"}'],
                ],
            ],
            [
                'name' => 'Campaign', 'sort_by' => '40', 'status' => '1', 'main_menu_id' => '4',
                'child_menus' => [
                    ['sort_by' => '10', 'status' => '1', 'menu_link' => '1', 'display_name' => 'Add', 'file_name' => 'em_campaign', 'user_right_title' => 'em_campaign', 'action' => '{"add":"Add"}'],
                    ['sort_by' => '20', 'status' => '1', 'menu_link' => '1', 'display_name' => 'List', 'file_name' => 'em_campaign_list', 'user_right_title' => 'em_campaign', 'action' => '{"edit":"Edit","delete":"Delete","view":"View"}'],
                ],
            ],
            [
                'name' => 'Lead', 'sort_by' => '50', 'status' => '1', 'main_menu_id' => '4',
                'child_menus' => [
                    ['sort_by' => '10', 'status' => '1', 'menu_link' => '1', 'display_name' => 'Add', 'file_name' => 'em_lead', 'user_right_title' => 'em_lead', 'action' => '{"add":"Add"}'],
                    ['sort_by' => '20', 'status' => '1', 'menu_link' => '1', 'display_name' => 'List', 'file_name' => 'em_lead_list', 'user_right_title' => 'em_lead', 'action' => '{"edit":"Edit","delete":"Delete","view":"View"}'],
                ],
            ],


            [
                'name' => 'Daily Progress', 'sort_by' => '10', 'status' => '1', 'main_menu_id' => '5',
                'child_menus' => [
                    ['sort_by' => '10', 'status' => '1', 'menu_link' => '1', 'display_name' => 'Add', 'file_name' => 'daily_progress', 'user_right_title' => 'tele_marketing_progress', 'action' => '{"add":"Add"}'],
                    ['sort_by' => '20', 'status' => '1', 'menu_link' => '1', 'display_name' => 'List', 'file_name' => 'daily_progress_list', 'user_right_title' => 'tele_marketing_progress', 'action' => '{"edit":"Edit","delete":"Delete","view":"View"}'],
                    ['sort_by' => '30', 'status' => '1', 'menu_link' => '1', 'display_name' => 'Report', 'file_name' => 'tele_marketing_report', 'user_right_title' => 'tele_marketing_progress', 'action' => '{"report":"Get Report"}'],
                ],
            ],
            [
                'name' => 'Lead', 'sort_by' => '20', 'status' => '1', 'main_menu_id' => '5',
                'child_menus' => [
                    ['sort_by' => '10', 'status' => '1', 'menu_link' => '1', 'display_name' => 'Add', 'file_name' => 'tele_marketing_lead', 'user_right_title' => 'tele_marketing_lead', 'action' => '{"add":"Add"}'],
                    ['sort_by' => '20', 'status' => '1', 'menu_link' => '1', 'display_name' => 'List', 'file_name' => 'tele_marketing_lead_list', 'user_right_title' => 'tele_marketing_lead', 'action' => '{"edit":"Edit","delete":"Delete","view":"View"}'],
                ],
            ],

        ];

        foreach ($arraies as $array) {
            try {
                $SubMenu = \App\SubMenu::create(
                    [
                        'name' => $array['name'],
                        'sort_by' => $array['sort_by'],
                        'status' => $array['status'],
                        'main_menu_id' => $array['main_menu_id'],
                        'added_by' => 1,
                        'created_at' => $now,
                        'updated_at' => $now
                    ]
                );
                $sub_menu_id = $SubMenu->id;
                $child_menus = $array['child_menus'];
                foreach ($child_menus as $child_menu) {
                    try {
                        \App\ChildMenu::create(
                            [
                                'display_name' => $child_menu['display_name'],
                                'file_name' => $child_menu['file_name'],
                                'user_right_title' => $child_menu['user_right_title'],
                                'action' => $child_menu['action'],
                                'sort_by' => $child_menu['sort_by'],
                                'status' => $child_menu['status'],
                                'menu_link' => $child_menu['menu_link'],
                                'main_menu_id' => $array['main_menu_id'],
                                'sub_menu_id' => $sub_menu_id,
                                'added_by' => 1,
                                'created_at' => $now,
                                'updated_at' => $now
                            ]
                        );
                    }
                    catch (Exception $e) {
                        Log::error($e->getMessage(),['FILE'=> __FILE__, 'FUNCTION' => __FUNCTION__]);
                    }
                }
            } catch (Exception $e) {
                Log::error($e->getMessage(), ['FILE' => __FILE__, 'FUNCTION' => __FUNCTION__]);
            }
        }
    }
}
