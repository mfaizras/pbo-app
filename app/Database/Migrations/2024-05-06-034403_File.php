<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class File extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'BIGINT',
                'unsigned' => true,
                'auto_increment' => true 
            ],
            'filename' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'filelink' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'post_id' => [
                'type' => 'BIGINT',
                'unsigned' => true,
            ]

        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('files');
    }

    public function down()
    {
        $this->forge->dropTable('files');
    }
}
