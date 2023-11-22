<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('subjects')->insert([
            [
                // 'id' => 'A1',
                'semester' => '4',
                'subject' => 'Sistem Pendukung Keputusan',
                'concentration_id' => 1,
            ],

            [
                // 'id' => 'A2',
                'semester' => '4',
                'subject' => 'Mobile and Cloud Computing Architectures',
                'concentration_id' => 2,
            ],

            [
                // 'id' => 'A3',
                'semester' => '4',
                'subject' => 'Desain Komunikasi Visual',
                'concentration_id' => 3,
            ],

            [
                // 'id' => 'A4',
                'semester' => '4',
                'subject' => 'Praktik Sistem Pendukung Keputusan',
                'concentration_id' => 1,
            ],

            [
                // 'id' => 'A5',
                'semester' => '4',
                'subject' => 'Praktik Mobile and Cloud Computing Architectures',
                'concentration_id' => 2,
            ],

            [
                // 'id' => 'A6',
                'semester' => '4',
                'subject' => 'Praktik Desain Komunikasi Visual',
                'concentration_id' => 3,
            ],

            [
                // 'id' => 'B1',
                'semester' => '5',
                'subject' => 'Pengembangan Aplikasi Mobile',
                'concentration_id' => 1,
            ],
            
            [
                // 'id' => 'B2',
                'semester' => '5',
                'subject' => 'Komunikasi Nirkabel',
                'concentration_id' => 2,
            ],

            [
                // 'id' => 'B3',
                'semester' => '5',
                'subject' => 'Pengelolaan Citra Digital',
                'concentration_id' => 3,
            ],

            [
                // 'id' => 'B4',
                'semester' => '5',
                'subject' => 'Praktik Pengembangan Aplikasi Mobile',
                'concentration_id' => 1,
            ],

            [
                // 'id' => 'B5',
                'semester' => '5',
                'subject' => 'Praktik Komunikasi Nirkabel',
                'concentration_id' => 2,
            ],

            [
                // 'id' => 'B6',
                'semester' => '5',
                'subject' => 'Praktik Pengelolaan Citra Digital',
                'concentration_id' => 3,
            ],

            [
                // 'id' => 'B7',
                'semester' => '5',
                'subject' => 'Manajemen Sistem Informasi',
                'concentration_id' => 1,
            ],

            [
                // 'id' => 'B8',
                'semester' => '5',
                'subject' => 'Praktik Manajemen Sistem Informasi',
                'concentration_id' => 1,
            ],

            [
                // 'id' => 'B9',
                'semester' => '5',
                'subject' => 'Administrasi Jaringan',
                'concentration_id' => 2,
            ],

            [
                // 'id' => 'B10',
                'semester' => '5',
                'subject' => 'Praktik Administrasi Jaringan',
                'concentration_id' => 2,
            ],

            [
                // 'id' => 'B11',
                'semester' => '5',
                'subject' => 'Multimedia Interaktif',
                'concentration_id' => 3,
            ],

            [
                // 'id' => 'B12',
                'semester' => '5',
                'subject' => 'Praktik Multimedia Interaktif',
                'concentration_id' => 3,
            ],

            [
                // 'id' => 'B13',
                'semester' => '5',
                'subject' => 'Praktik Scripting Language',
                'concentration_id' => 1,
            ],

            [
                // 'id' => 'B14',
                'semester' => '5',
                'subject' => 'Voice and Video Network',
                'concentration_id' => 2,
            ],

            [
                // 'id' => 'B15',
                'semester' => '5',
                'subject' => 'Praktik Voice and Video Network',
                'concentration_id' => 2,
            ],

            [
                // 'id' => 'B16',
                'semester' => '5',
                'subject' => 'Desain Web',
                'concentration_id' => 3,
            ],

            [
                // 'id' => 'B17',
                'semester' => '5',
                'subject' => 'Praktik Desain Web',
                'concentration_id' => 3,
            ],

            [
                // 'id' => 'B18',
                'semester' => '5',
                'subject' => 'Scripting Language',
                'concentration_id' => 1,
            ],

            [
                // 'id' => 'B19',
                'semester' => '5',
                'subject' => 'Pengelolaan Citra Digital',
                'concentration_id' => 3,
            ],

            [
                // 'id' => 'C1',
                'semester' => '6',
                'subject' => 'Game Edukasi',
                'concentration_id' => 3,
            ],

            [
                // 'id' => 'C2',
                'semester' => '6',
                'subject' => 'Praktik Game Edukasi',
                'concentration_id' => 3,
            ],

            [
                // 'id' => 'C3',
                'semester' => '6',
                'subject' => 'Pengembangan Sistem Berorientasi Objek',
                'concentration_id' => 1,
            ],

            [
                // 'id' => 'C4',
                'semester' => '6',
                'subject' => 'Praktik Pengembangan Sistem Berorientasi Objek',
                'concentration_id' => 1,
            ],

            [
                // 'id' => 'C5',
                'semster' => '6',
                'subject' => 'Jaringan Terdistribusi',
                'concentration_id' => 2,
            ],

            [
                // 'id' => 'C6',
                'semester' => '6',
                'subject' => 'Praktik Jaringan Terdistribusi',
                'concentration_id' => 2,
            ],

            [
                // 'id' => 'C7',
                'semester' => '6',
                'subject' => 'Artificial Inteligence',
                'concentration_id' => 1,
            ],

            [
                // 'id' => 'C8',
                'semester' => '6',
                'subject' => 'Praktik Artificial Ineligence',
                'concentration_id' => 1,
            ],

            [
                // 'id' => 'C9',
                'semester' => '6',
                'subject' => 'Internet of Things',
                'concentration_id' => 2,
            ],

            [
                // 'id' => 'C10',
                'semester' => '6',
                'subject' => 'Praktik Internet of Things',
                'concentration_id' => 2,
            ],

            [
                // 'id' => 'C11',
                'semester' => '6',
                'subject' => 'Broadcasting',
                'concentration_id' => 3,
            ],

            [
                // 'id' => 'C12',
                'semester' => '6',
                'subject' => 'Praktik Broadcasting',
                'concentration_id' => 3,
            ],
        ]);
    }
}
