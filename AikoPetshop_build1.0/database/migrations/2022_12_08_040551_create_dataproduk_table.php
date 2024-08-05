<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataprodukTable extends Migration
{
    public function up()
    {
        Schema::create('dataproduk', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('link');
            $table->string('photo')->nullable();
            $table->integer('harga');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dataproduk');
    }
}
