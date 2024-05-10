<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SubjectTypes extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title' => 'Kuliah',
            ],
            [
                'title' => 'Praktikum'
            ]
        ];

        $this->db->table('subject_types')->insertBatch($data);
    }
}
