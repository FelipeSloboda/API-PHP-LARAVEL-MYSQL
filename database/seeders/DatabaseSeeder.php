<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Cliente;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Cliente::factory()->count(100)->create();
    }
}
