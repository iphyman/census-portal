<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('local_governments', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("state_id")->unsigned();
            $table->integer("land_area")->unsigned();
            // $table->integer("postal_code")->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('local_governments');
    }
};