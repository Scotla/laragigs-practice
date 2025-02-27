<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Record>
 */
class RecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title'=> $this->faker->sentence(),
            'tags'=> 'Laravel, api, backend',
            'company' => $this->faker->company(),
            'email' => $this->faker->email(),
            'website'=> $this->faker->url(),
            'location'=>$this->faker->city(),
            'description'=>$this->faker->paragraph()
        ];
    }
}
