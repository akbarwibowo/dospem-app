<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConcentrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('concentrations')->insert([
            [
                'concentration' => 'Software Engineering',
            ],

            [
                'concentration' => 'Computer Networking',
            ],

            [
                'concentration' => 'Multimedia',
            ]
        ]);
    }
}
