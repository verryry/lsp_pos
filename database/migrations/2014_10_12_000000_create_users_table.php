<?php

use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->number('telp');
            $table->string('role');
            $table->string('image');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            'name' => "Admin",
            'email' => "admin@gmail.com",
            'password' => Hash::make("admin123"),
            'role' => "Admin",
            'telp' => "0813931817414",
            'image' => "default.png"
        ]);

        DB::table('users')->insert([
            'name' => "SuperAdmin",
            'email' => "superadmin@gmail.com",
            'password' => Hash::make("superadmin123"),
            'role' => "SuperAdmin",
            'telp' => "089184614814",
            'image' => "default.png"
        ]);
        DB::table('users')->insert([
            'name' => " Kasir",
            'email' => "kasir@gmail.com",
            'password' => Hash::make("kasir123"),
            'role' => "Kasir",
            'telp' => "09147417419",
            'image' => "default.png"
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
