<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChecklistGroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('checklist_groups')->delete();
        
        \DB::table('checklist_groups')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'First checklist group',
                'created_at' => '2022-04-28 13:49:06',
                'updated_at' => '2022-04-29 09:00:06',
                'deleted_at' => '2022-04-29 09:00:06',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '11',
                'created_at' => '2022-04-29 07:20:37',
                'updated_at' => '2022-04-29 08:36:51',
                'deleted_at' => '2022-04-29 08:36:51',
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'Checklist 1',
                'created_at' => '2022-04-29 09:01:52',
                'updated_at' => '2022-04-29 09:11:00',
                'deleted_at' => '2022-04-29 09:11:00',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'Checklist Group #1',
                'created_at' => '2022-04-29 09:11:16',
                'updated_at' => '2022-04-29 09:11:16',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'Checklist Group #2',
                'created_at' => '2022-04-29 10:06:08',
                'updated_at' => '2022-04-29 12:54:05',
                'deleted_at' => '2022-04-29 12:54:05',
            ),
        ));
        
        
    }
}