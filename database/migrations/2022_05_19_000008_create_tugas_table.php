<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTugasTable extends Migration
{
    public function up()
    {
        Schema::create('tugas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->time('pukul')->nullable();
            $table->longText('uraian_kegiatan')->nullable();
            $table->longText('hasil_output')->nullable();
            $table->string('vol')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
