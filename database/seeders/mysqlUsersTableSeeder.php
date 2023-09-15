<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class mysqlUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        
        
    }
}