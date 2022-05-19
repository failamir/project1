<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePangkatsTable extends Migration
{
    public function up()
    {
        Schema::create('pangkats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pangkat')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
