<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('imunisasis', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal')->default(now());;
            $table->string('nama_anak');
            $table->string('nik_anak');
            $table->string('nama_orangtua');
            $table->date('tgl_lahir');
            $table->string('alamat');
            $table->double('berat_badan');
            $table->double('panjang_badan');
            $table->boolean('HBO');
            $table->boolean('BCG');
            $table->enum('PENTA',['0','1','2','3']);
            $table->enum('IPV',['0','1','2','3']);
            $table->enum('PCV',['0','1','2','3']);
            $table->enum('ROTA_VIRUS',['0','1','2','3']);
            $table->boolean('MK');
            $table->enum('booster',['PENTA','MK']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imunisasis');
    }
};
