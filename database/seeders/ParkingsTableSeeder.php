<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ParkingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('parkings')->delete();
        
        
        
    }
}