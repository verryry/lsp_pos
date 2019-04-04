<?php

use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->bigInteger('harga_jual');
            $table->bigInteger('harga_beli');
            $table->bigInteger('disc');
            $table->string('status');
            $table->string('stok');
            $table->text('keterangan');
            $table->integer('id_unit')->nullable()->default(null)->unsigned();
            $table->integer('id_curr')->nullable()->default(null)->unsigned();
            $table->integer('id_kategori')->nullable()->default(null)->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
