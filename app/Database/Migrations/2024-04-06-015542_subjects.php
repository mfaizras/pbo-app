<?php 
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Subjects extends Migration{
    public function up(){

        // Uncomment below if want config
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
                'lecture_id' => [
                    'type' => 'BIGINT'
                ],
                'academic_year' => [
                    'type' => 'VARCHAR',
                    'constraint' => 255
                    
                ]
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('subjects');
    }

    public function down(){
        $this->forge->dropTable('subjects');
    }
}