<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan', function (Blueprint $pertanyaan) {
            $pertanyaan->id();
            $pertanyaan->string('judul');
            $pertanyaan->string('isi');
            $pertanyaan->timestamps();
        });

        Schema::create('jawaban', function (Blueprint $jawaban) {
            $jawaban->id();
            $jawaban->string('isi');
            $jawaban->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pertanyaan');
        Schema::dropIfExists('jawaban');
    }
}
