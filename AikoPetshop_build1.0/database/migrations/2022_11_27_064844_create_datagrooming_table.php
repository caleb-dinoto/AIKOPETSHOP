<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataGroomingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datagrooming', function (Blueprint $table) {
            $table->id();
            $table->string('nama_owner');
            $table->string('nomor_hp');
            $table->string('jenis_perawatan');
            $table->string('ukuran_hewan');
            $table->integer('harga');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('datagrooming');
    }
}
