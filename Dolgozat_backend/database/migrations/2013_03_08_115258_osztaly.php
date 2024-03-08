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
        Schema::create('osztaly', function (Blueprint $table) {
            $table->id('osztaly_id');
            $table->string('Elnevezes');
            $table->timestamps();
        });

        DB::table('osztaly')->insert([
            'Elnevezes' => 'nSZF1B',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('osztaly')->insert([
            'Elnevezes' => 'nSZF1A',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('osztaly')->insert([
            'Elnevezes' => 'nSZF2B',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('osztaly')->insert([
            'Elnevezes' => 'nSZF2A',
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
