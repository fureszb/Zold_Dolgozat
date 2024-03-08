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
        Schema::create('bejegyzesek', function (Blueprint $table) {
            $table->id();
            $table->foreignId('osztaly_id')->references('osztaly_id')->on('osztaly');
            $table->foreignId('tevekenyseg_id')->references('tevekenyseg_id')->on('tevekenyseg');
            $table->boolean('allapot')->default(0);
            $table->timestamps();
        });
        DB::table('bejegyzesek')->insert([
            'tevekenyseg_id' => '1',
            'osztaly_id' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('bejegyzesek')->insert([
            'tevekenyseg_id' => '2',
            'osztaly_id' => '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('bejegyzesek')->insert([
            'tevekenyseg_id' => '3',
            'osztaly_id' => '3',
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
