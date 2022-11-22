<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $username=['Murad Gafaroff','Albert Ensteyn'];
        $userphoto=['person-1.jpg','person-4.jpg'];
        $description=['Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto laborum in corrupti dolorum, quas delectus nobis porro accusantium molestias sequi.',
            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto laborum in corrupti dolorum, quas delectus nobis porro accusantium molestias sequi.'];

$email=['murad.qafarov94@mail.ru','murad.qafarov94@mail.ru'];
$news_ids=[1,2];
        foreach ($news_ids as $news_id) {
for ($i=0;$i<2;$i++){
    DB::table('comments')->insert([
        'username'=>$username[$i],
        'userphoto'=>$userphoto[$i],
        'description'=>$description[$i],
        'date'=>Carbon::now(),
        'news_id'=>$news_id,
        'email'=>$email[$i],


    ]);
}}


    }
}
