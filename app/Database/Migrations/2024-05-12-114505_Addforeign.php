<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Addforeign extends Migration
{
    public function up()
    {
        $this->forge->addKey('subject_id')->addForeignKey('subject_id', 'subjects', 'id', 'CASCADE', 'CASCADE', 'subject_id_fk')->processIndexes('posts');
        $this->forge->addKey('subject_type_id')->addForeignKey('subject_type_id', 'subject_types', 'id', 'CASCADE', 'CASCADE', 'subject_type_id_fk')->processIndexes('subjects');
        $this->forge->addKey('lecture_id')->addForeignKey('lecture_id', 'lecturers', 'id', 'CASCADE', 'CASCADE', 'lecture_id_fk')->processIndexes('subjects');
        $this->forge->addKey('post_id')->addForeignKey('post_id', 'posts', 'id', 'CASCADE', 'CASCADE', 'post_id_fk')->processIndexes('files');
        // $this->forge->addForeignKey('subject_id', 'subjects', 'id', '', '', 'subject_id_fk');
        // $this->forge->addForeignKey('subject_type_id', 'subject_types', 'id', '', '', 'subject_type_id_fk');
        // $this->forge->addForeignKey('lecture_id', 'lecturers', 'id', '', '', 'lecture_id_fk');
        // $this->forge->addForeignKey('post_id', 'posts', 'id', '', '', 'post_id_fk');
    }

    public function down()
    {
        //
    }
}
