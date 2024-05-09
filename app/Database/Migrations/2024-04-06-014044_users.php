<?php 
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration{
    public function up(){
        $this->forge->addField([
            'id' => [
                'type' => 'BIGINT',
                'unsigned' => true,
                'auto_increment' => true 
            ],
            'username' => [
                'type' => 'VARCHAR',
                'unique' => true,
                'constraint' => 255
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'password' => [
                'type'=> 'VARCHAR',
                'constraint' => 255
            ]
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('users');
        $seeder = \Config\Database::seeder();
        $seeder->call('UserSeeder');
    }

    public function down(){
        $this->forge->dropTable('users');
    }
}