<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SubjectType extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'BIGINT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'title' => [
                'type'           => 'VARCHAR',
                'constraint' => 255
            ],

        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('subject_types');

        
    }

    public function down()
    {
        $this->forge->dropTable('subject_types');
    }
}
