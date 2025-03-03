<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'phone' => $this->faker->phoneNumber,
            'message' => $this->faker->text(50),
            'email' => $this->faker->email(),
            'disc' => $this->faker->sentence,
        ];
    }
}
