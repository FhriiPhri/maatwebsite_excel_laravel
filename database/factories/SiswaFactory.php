<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name,
            'nis' => $this->faker->unique()->numerify('2023####'),
            'tanggal_lahir' => $this->faker->dateTimeBetween('2008-01-01', '2009-12-31')->format('d-m-Y'),
            'kelas' => $this->faker->randomElement(['X', 'XI', 'XII']),
            'jurusan' => $this->faker->randomElement(['PPLG', 'Animasi', 'BRF', 'TJKT', 'TE']),
            'kota_asal' => $this->faker->randomElement(['Depok', 'Jakarta', 'Bogor', 'Tangerang', 'Bekasi', 'Bandung', 'Padang']),
            'alamat' => $this->faker->address,
            'no_hp' => '+62 ' . $this->faker->numerify('8##-####-####')
        ];
    }
}