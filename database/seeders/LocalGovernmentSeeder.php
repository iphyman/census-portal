<?php

namespace Database\Seeders;

use App\Models\LocalGovernment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocalGovernmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LocalGovernment::factory()->create();
    }
}