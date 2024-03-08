<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tevekenyseg', function (Blueprint $table) {
            $table->id('tevekenyseg_id');
            $table->string('tevekenyseg_nev');
            $table->integer('pontszam');
            $table->timestamps();
        });
        DB::table('tevekenyseg')->insert([
            'tevekenyseg_nev' => 'kerékpárral jöttem iskolába',
            'Pontszam' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tevekenyseg')->insert([
            'tevekenyseg_nev' => 'rollerrel jöttem iskolába',
            'Pontszam' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tevekenyseg')->insert([
            'tevekenyseg_nev' => '10 km-t gyalogoltam buszozás helyett',
            'Pontszam' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tevekenyseg')->insert([
            'tevekenyseg_nev' => 'ültettem fát',
            'Pontszam' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
