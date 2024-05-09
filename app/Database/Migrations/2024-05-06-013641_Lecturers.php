<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Lecturers extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'BIGINT',
                'unsigned' => true,
                'auto_increment' => true 
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['1','0'],
                'default' => 1
            ]
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('lecturers');
    }

    public function down()
    {
        $this->forge->dropTable('lecturers');
    }
}
