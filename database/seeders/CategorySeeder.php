<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $is_home=[0,1,1,0,0,1,0];
       $name=['Food','Business','Culture','Tech','Sport','Lifestayle','Design'];
        for ($i=0; $i<7;$i++){
            DB::table('categories')->insert([

                'name'=>$name[$i],
                'is_home'=>$is_home[$i],




            ]);
        }
    }
}
