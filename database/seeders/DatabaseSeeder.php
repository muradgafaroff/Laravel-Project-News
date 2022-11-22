<?php

namespace Database\Seeders;





use App\Models\About;
use App\Models\AboutLatest;

use App\Models\Contact;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {



        $this->call([
           CategorySeeder::class,
            AuthorSeeder::class,
            NewsSeeder::class,
             CommentSeeder::class,

            Sliderseeder::class,
        ]);

        About::factory(1)->create();
        Contact::factory(1)->create();
        User::factory(1)->create();
    }
}
