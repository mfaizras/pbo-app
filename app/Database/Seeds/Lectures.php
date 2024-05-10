<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Lectures extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'ACHMAD FAHRUROZI',
            ],
            [
                'name' => 'DEWI ANDRYANI'
            ],
            [
                'name' => 'ARDIPRAWIRO'
            ],
            [
                'name' => 'DEWI LUQI PUSPITASARI'
            ],
            [
                'name' => 'YENI SETIANI'
            ],
            [
                'name' => 'ISKANDAR ZAMZANI'
            ],
            [
                'name' => 'DWI WIDIASTUTI'
            ],
            [
                'name' => 'LELY PRANANINGRUM'
            ],
            [
                'name' => 'RISNAWATI'
            ],
            [
                'name' => 'M Qurtubi'
            ],
            [
                'name' => 'Izzah'
            ]
        ];

        $this->db->table('lecturers')->insertBatch($data);
    }
}
