<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Utilisation de la librairie faker pour remplir la base de données avec des données autogénérées
        return [
            'title'=>$this->faker->sentence,
            'content'=>$this->faker->paragraph,
            'created_at'=>now()
        ];
    }
}
