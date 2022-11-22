<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model=Contact::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address'=>'Az.Baku',
            'phone'=>'+994553292029',
            'email'=>'murad.qafarov94@mail.ru',
            'facebook'=>'fb.com',
            'instagram'=>'instagram.com',
            'twitter'=>'twitter.com',
            'linkedin'=>'linkedin.com',
            'skype'=>'skype.com',
        ];
    }
}
