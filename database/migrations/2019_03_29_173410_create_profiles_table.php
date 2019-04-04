<?php

use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_koperasi');
            $table->string('alamat_koperasi');
            $table->text('keterangan');
            $table->string('telepon');
            $table->text('image');
            $table->string('kode_pos');
            $table->timestamps();
        });

        DB::table('profiles')->insert([
            'nama_koperasi' => "SMKN 10 jakarta",
            'alamat_koperasi' => "jln smea 6",
            'keterangan' => "ga ada",
            'image' => "default.png",
            'kode_pos' => "139390",
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
