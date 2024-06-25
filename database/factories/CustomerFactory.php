<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    protected $model = Customer::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'number_of_adults' => $this->faker->numberBetween(1, 5),
            'number_of_children' => $this->faker->numberBetween(0, 5),
            'number_of_babies' => $this->faker->numberBetween(0, 3),
            'street_name' => $this->faker->streetName,
            'house_number' => $this->faker->buildingNumber,
            'postal_code' => $this->faker->postcode,
            'city' => $this->faker->city,
        ];
    }
}
