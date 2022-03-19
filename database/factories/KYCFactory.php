<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KYCFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $fakerFileNameIdentification = $this->faker->image(
            storage_path('app/public/identifications'),
            800,
            600
        );
        $fakerFileNamePhotos = $this->faker->image(
            storage_path('app/public/identifications'),
            800,
            600
        );

        return [
            'fullname' => $this->faker->name(),
            'date_of_birth' => $this->faker->date(
                $format = 'Y-m-d',
                $max = 'now'
            ),
            'identification' => $fakerFileNameIdentification,
            'photo' => $fakerFileNamePhotos,

            'type' => 'National ID',
            'status' => 'succeed',
            'ssn' => '123456789',
        ];
    }
}
