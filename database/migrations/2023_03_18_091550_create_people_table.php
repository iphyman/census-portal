<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string("first_name");
            $table->string("last_name");
            $table->date("dob");
            $table->integer("state_id")->unsigned();
            $table->integer("local_government_id")->unsigned();
            $table->string("residential_area");
            $table->enum("sex", ["Male", "Female", "Both"]);
            $table->enum("marital_status", ["Single", "Married", "Divorced"]);
            $table->string("occupation");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};