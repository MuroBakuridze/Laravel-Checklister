<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$iNR508nD8PUp2phcj5/pheJYlS4.aph/lLt1ifnO/q3nZyXYYM8OC',
                'remember_token' => 'rlDL8seBIogTtm1vReEYO3GtYZJfzvRT0tP9J7lubFeKfbSD4RF5CNEFbPmd',
                'created_at' => '2022-04-28 08:51:16',
                'updated_at' => '2022-04-28 08:51:16',
                'is_admin' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'anyuser',
                'email' => 'anyuser@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$VgSLVNxBT2GdYsPt8qemfOLaE4mi5vlu0AAwnnjp8OLDHacUiuwIa',
                'remember_token' => NULL,
                'created_at' => '2022-04-28 08:52:26',
                'updated_at' => '2022-04-28 08:52:26',
                'is_admin' => 0,
            ),
        ));
        
        
    }
}