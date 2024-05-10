<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Subject extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title' => 'Matematika Informatika 4',
                'lecture_id' => 1,
                'subject_type_id' => 1,
                'academic_year' => "2023/2024"
            ],
            [
                'title' => 'Pemrograman Berbasis Objek **',
                'lecture_id' => 2,
                'subject_type_id' => 1,
                'academic_year' => "2023/2024"
            ],
            [
                'title' => 'Riset Operasional',
                'lecture_id' => 3,
                'subject_type_id' => 1,
                'academic_year' => "2023/2024"
            ],
            [
                'title' => 'Sistem Operasi */**',
                'lecture_id' => 4,
                'subject_type_id' => 1,
                'academic_year' => "2023/2024"
            ],
            [
                'title' => 'Sistem Berkas *',
                'lecture_id' => 5,
                'subject_type_id' => 1,
                'academic_year' => "2023/2024"
            ],
            [
                'title' => 'Matematika Lanjut 2',
                'lecture_id' => 6,
                'subject_type_id' => 1,
                'academic_year' => "2023/2024"
            ],
            [
                'title' => 'Arsitektur Komputer *',
                'lecture_id' => 7,
                'subject_type_id' => 1,
                'academic_year' => "2023/2024"
            ],
            [
                'title' => 'Bisnis Informatika',
                'lecture_id' => 8,
                'subject_type_id' => 1,
                'academic_year' => "2023/2024"
            ],
            [
                'title' => 'Statistika 2 **',
                'lecture_id' => 9,
                'subject_type_id' => 1,
                'academic_year' => "2023/2024"
            ],

        ];

        $this->db->table('subjects')->insertBatch($data);
    }
}
