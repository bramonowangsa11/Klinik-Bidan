<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Reservasi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservasi>
 */
class ReservasiFactory extends Factory
{
    protected $model = Reservasi::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user_id = User::inRandomOrder()->first()->id;
        $tgl_reservasi = $this->faker->dateTimeBetween('-1 month', '+1 month')->format('Y-m-d');

        
        $now = Carbon::now('Asia/Jakarta');
        $sesi = $this->getUniqueSesi($now);
        return [
            'tgl_reservasi' => $now,
            'sesi' => $sesi,
            'layanan' => $this->faker->randomElement(['Bumil', 'KB', 'Imunisasi']),
            'keterangan' => $this->faker->sentence,
            'user_id' => $user_id,
        ];
    }
    private function getUniqueSesi($tgl_reservasi)
    {
        $existingSessions = Reservasi::where('tgl_reservasi', $tgl_reservasi)->pluck('sesi')->toArray();
        $allSessions = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14'];

        $availableSessions = array_diff($allSessions, $existingSessions);

        if (empty($availableSessions)) {
            throw new \Exception("No available sessions for the date: $tgl_reservasi");
        }
        else{
            return $this->faker->randomElement($availableSessions);
        }
        
    }
}
