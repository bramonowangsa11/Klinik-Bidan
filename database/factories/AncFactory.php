<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Anc>
 */
class AncFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tgl_pemeriksaan' => $this->faker->date,
            'REG' => $this->faker->word,
            'nama_ibu' => $this->faker->name,
            'nama_suami' => $this->faker->name,
            'nik_ibu' => $this->faker->randomNumber(9),
            'nik_suami' => $this->faker->randomNumber(9),
            'tgl_lahir_ibu' => $this->faker->date,
            'tgl_lahir_suami' => $this->faker->date,
            'pekerjaan_suami' => 'petani',
            'pekerjaan_ibu' => 'irt',
            'buku_kia' => $this->faker->boolean,
            'no_kk'=> $this->faker->randomNumber(9),
            'pddk_ibu' => $this->faker->randomElement(['SD', 'SMP', 'SMA', 'Diploma', 'Sarjana', 'Magister', 'Doktor']),
            'pddk_suami' => $this->faker->randomElement(['SD', 'SMP', 'SMA', 'Diploma', 'Sarjana', 'Magister', 'Doktor']),
            'alamat' => $this->faker->address,
            'no_hp' => $this->faker->phoneNumber,
            'paritas' => $this->faker->randomDigit,
            'parsing' => $this->faker->word,
            'p4k' => $this->faker->boolean,
            'HPPT' => $this->faker->date,
            'HPL' => $this->faker->date,
            'umur_kehamilan' => $this->faker->randomNumber,
            'anamnesa' => $this->faker->sentence,
            'TB' => $this->faker->randomNumber,
            'LILA' => $this->faker->randomNumber,
            'BB' => $this->faker->randomNumber,
            'TFU' => $this->faker->randomNumber,
            'tensi' => $this->faker->word,
            'status_TT1_K1' => $this->faker->word,
            'TM' => $this->faker->word,
            'FE' => $this->faker->word,
            'BAT_LAIN' => $this->faker->word,
            'PRESENTASI' => $this->faker->word,
            'DJJ' => $this->faker->word,
            'KEPALA_THD_PAP' => $this->faker->word,
            'TBJ' => $this->faker->word,
            'HB' => $this->faker->word,
            'Protein_urine' => $this->faker->word,
            'GOLDAR' => $this->faker->randomElement(['A', 'B', 'AB', 'O']),
            'HBSAG' => $this->faker->word,
            'IMS' => $this->faker->word,
            'HIV' => $this->faker->word,
            'HDK' => $this->faker->boolean,
            'ABORTUS' => $this->faker->boolean,
            'PERDARAHAN'=> $this->faker->boolean,
            'INFEKSI'=> $this->faker->boolean,
            'KPD'=> $this->faker->boolean,
            'LAIN_LAIN'=> $this->faker->word,
            'RUJUK'=>$this->faker->word,
            'trisemester1' => $this->faker->randomNumber,
            'trisemester2' => $this->faker->randomNumber,
            'trisemester3' => $this->faker->randomNumber,
            'FR'=> $this->faker->word,
            'keterangan' => $this->faker->sentence,
        ];
    }
}
