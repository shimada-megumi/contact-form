<?php

namespace Database\Factories;

use App\Models\Contact;

use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

use Carbon\Carbon;

class ContactFactory extends Factory
{

    protected $model = Contact::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $now = Carbon::now();
        return [
            'last_name' => $this->faker->lastName(),
            'first_name' => $this->faker->firstName(),
            'gender' => $this->faker->randomElement($array=['男性','女性']),
            'email' => $this->faker->unique()->safeEmail,
            'postcode' => $this->faker->regexify('[1-9]{3}-[0-9]{4}'),
            'address' => $this->faker->address(),
            'opinion' => $this->faker->realText(35),
            'created_at' => $now,
            'updated_at' => $now,
        ];
    }
}
