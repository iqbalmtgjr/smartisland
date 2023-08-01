<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Testing\Fakes\Fake;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // protected $model = Location::class;
    public function definition(): array
    {
        return [
            'nama_lokasi' => fake()->name(),
            'geojson' => fake()->paragraph(),
            'deskripsi' => fake()->paragraph(),
        ];
    }
}
