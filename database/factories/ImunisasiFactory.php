<?php

namespace Database\Factories;

use App\Models\Imunisasi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Imunisasi>
 */
class ImunisasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
        protected $model = Imunisasi::class;
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tanggal' => $this->faker->date(),
            'nama_anak' => $this->faker->name,
            'nik_anak' => $this->faker->randomNumber(9),
            'nama_orangtua' => $this->faker->name,
            'tgl_lahir' => $this->faker->date(),
            'alamat' => $this->faker->address,
            'berat_badan' => $this->faker->randomFloat(2, 2, 30),
            'panjang_badan' => $this->faker->randomFloat(2, 30, 80),
            'HBO' => $this->faker->boolean,
            'BCG' => $this->faker->boolean,
            'PENTA' => $this->faker->randomElement(['0', '1', '2', '3']),
            'IPV' => $this->faker->randomElement(['0', '1', '2', '3']),
            'PCV' => $this->faker->randomElement(['0', '1', '2', '3']),
            'ROTA_VIRUS' => $this->faker->randomElement(['0', '1', '2', '3']),
            'MK' => $this->faker->boolean,
            'booster' => $this->faker->randomElement(['PENTA', 'MK']),
        ];
    }
}
