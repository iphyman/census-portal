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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("description");
            /**
             * access_level
             * 0 -> Read/Write People data
             * 1 -> Read/Write State and LGA data
             * 2 -> Read/Write Staff/Department data
             * 3 -> Read/Write all data
             */
            $table->tinyInteger("access_level");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
