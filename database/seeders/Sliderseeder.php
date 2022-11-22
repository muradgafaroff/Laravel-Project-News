<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Sliderseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = ['How to Avoid Distraction and Stay Focused During Video Calls?',
            '17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut',
            '9 Half-up/half-down Hairstyles for Long and Medium Hair',
            'Life Insurance And Pregnancy: A Working Mom’s Guide'

        ];
        $url=['/single/10','/single/10','/single/10','/single/10'];
        $description = ['Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!'];

        $image =['storage/uploads/231667048444.jpg','storage/uploads/231667048444.jpg','storage/uploads/231667048444.jpg','storage/uploads/231667048444.jpg'];

        for ($i = 0; $i < 4; $i++) {

            DB::table('sliders')->insert([

                'image' => $image[$i],
                'description' => $description[$i],
                'title' => $title[$i],
                'url'=>$url[$i]

            ]);
        }
    }
}
