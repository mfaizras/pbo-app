<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Post extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'BIGINT',
                'unsigned' => true,
                'auto_increment' => true 
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'description' => [
                'type' => 'TEXT',
            ],
            'subject_id' => [
                'type' => 'BIGINT'
            ]

        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('posts');
    }

    public function down()
    {
        $this->forge->dropTable('posts');
    }
}
