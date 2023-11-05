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
                'major' => 'Teknologi Informasi',
                'concentration' => 'Software Engineering',
            ],

            [
                // 'id' => 'A2',
                'semester' => '4',
                'subject' => 'Mobile and Cloud Computing Architectures',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Computer Networking',
            ],

            [
                // 'id' => 'A3',
                'semester' => '4',
                'subject' => 'Desain Komunikasi Visual',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Multimedia',
            ],

            [
                // 'id' => 'A4',
                'semester' => '4',
                'subject' => 'Praktik Sistem Pendukung Keputusan',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Software Engineering',
            ],

            [
                // 'id' => 'A5',
                'semester' => '4',
                'subject' => 'Praktik Mobile and Cloud Computing Architectures',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Computer Networking',
            ],

            [
                // 'id' => 'A6',
                'semester' => '4',
                'subject' => 'Praktik Desain Komunikasi Visual',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Multimedia',
            ],

            [
                // 'id' => 'B1',
                'semester' => '5',
                'subject' => 'Pengembangan Aplikasi Mobile',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Software Engineering',
            ],
            
            [
                // 'id' => 'B2',
                'semester' => '5',
                'subject' => 'Komunikasi Nirkabel',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Computer Networking',
            ],

            [
                // 'id' => 'B3',
                'semester' => '5',
                'subject' => 'Pengelolaan Citra Digital',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Multimedia',
            ],

            [
                // 'id' => 'B4',
                'semester' => '5',
                'subject' => 'Praktik Pengembangan Aplikasi Mobile',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Software Engineering',
            ],

            [
                // 'id' => 'B5',
                'semester' => '5',
                'subject' => 'Praktik Komunikasi Nirkabel',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Computer Networking',
            ],

            [
                // 'id' => 'B6',
                'semester' => '5',
                'subject' => 'Praktik Pengelolaan Citra Digital',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Multimedia',
            ],

            [
                // 'id' => 'B7',
                'semester' => '5',
                'subject' => 'Manajemen Sistem Informasi',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Software Engineering',
            ],

            [
                // 'id' => 'B8',
                'semester' => '5',
                'subject' => 'Praktik Manajemen Sistem Informasi',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Software Engineering',
            ],

            [
                // 'id' => 'B9',
                'semester' => '5',
                'subject' => 'Administrasi Jaringan',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Computer Networking',
            ],

            [
                // 'id' => 'B10',
                'semester' => '5',
                'subject' => 'Praktik Administrasi Jaringan',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Computer Networking',
            ],

            [
                // 'id' => 'B11',
                'semester' => '5',
                'subject' => 'Multimedia Interaktif',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Multimedia',
            ],

            [
                // 'id' => 'B12',
                'semester' => '5',
                'subject' => 'Praktik Multimedia Interaktif',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Multimedia',
            ],

            [
                // 'id' => 'B13',
                'semester' => '5',
                'subject' => 'Praktik Scripting Language',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Software Engineering',
            ],

            [
                // 'id' => 'B14',
                'semester' => '5',
                'subject' => 'Voice and Video Network',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Computer Networking',
            ],

            [
                // 'id' => 'B15',
                'semester' => '5',
                'subject' => 'Praktik Voice and Video Network',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Computer Networking',
            ],

            [
                // 'id' => 'B16',
                'semester' => '5',
                'subject' => 'Desain Web',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Multimedia',
            ],

            [
                // 'id' => 'B17',
                'semester' => '5',
                'subject' => 'Praktik Desain Web',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Multimedia',
            ],

            [
                // 'id' => 'B18',
                'semester' => '5',
                'subject' => 'Scripting Language',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Software Engineering',
            ],

            [
                // 'id' => 'B19',
                'semester' => '5',
                'subject' => 'Pengelolaan Citra Digital',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Multimedia',
            ],

            [
                // 'id' => 'C1',
                'semester' => '6',
                'subject' => 'Game Edukasi',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Multimedia',
            ],

            [
                // 'id' => 'C2',
                'semester' => '6',
                'subject' => 'Praktik Game Edukasi',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Multimedia',
            ],

            [
                // 'id' => 'C3',
                'semester' => '6',
                'subject' => 'Pengembangan Sistem Berorientasi Objek',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Software Engineering',
            ],

            [
                // 'id' => 'C4',
                'semester' => '6',
                'subject' => 'Praktik Pengembangan Sistem Berorientasi Objek',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Software Engineering',
            ],

            [
                // 'id' => 'C5',
                'semster' => '6',
                'subject' => 'Jaringan Terdistribusi',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Computer Networking',
            ],

            [
                // 'id' => 'C6',
                'semester' => '6',
                'subject' => 'Praktik Jaringan Terdistribusi',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Computer Networking',
            ],

            [
                // 'id' => 'C7',
                'semester' => '6',
                'subject' => 'Artificial Inteligence',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Software Engineering',
            ],

            [
                // 'id' => 'C8',
                'semester' => '6',
                'subject' => 'Praktik Artificial Ineligence',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Software Engineering',
            ],

            [
                // 'id' => 'C9',
                'semester' => '6',
                'subject' => 'Internet of Things',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Computer Networking',
            ],

            [
                // 'id' => 'C10',
                'semester' => '6',
                'subject' => 'Praktik Internet of Things',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Computer Networking',
            ],

            [
                // 'id' => 'C11',
                'semester' => '6',
                'subject' => 'Broadcasting',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Multimedia',
            ],

            [
                // 'id' => 'C12',
                'semester' => '6',
                'subject' => 'Praktik Broadcasting',
                'major' => 'Teknologi Informasi',
                'concentration' => 'Multimedia',
            ],
        ]);
    }
}
