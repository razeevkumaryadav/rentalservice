<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Location::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'building_no'=>$this->faker->buildingNumber(),
            'street_no'=>$this->faker->randomDigit(),
            'street_name'=>$this->faker->streetName(),
            'chowk_name'=>$this->faker->citySuffix(),
            'zipcode'=>$this->faker->postcode(),
            'city'=>$this->faker->city(),
            'state'=>$this->faker->state(),
            'longitude'=>$this->faker->longitude($min=18,$max=180),
            'latitude'=>$this->faker->latitude($min=18,$max=30),
            'country_id'=>$this->faker->randomDigit()
        ];
    }
}
