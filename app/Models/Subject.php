<?php 
namespace App\Models;

use CodeIgniter\Model;

class Subject extends Model{
    protected $table      = 'subjects';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';

    public function getSubject(){
        $builder = $this->db->table($this->table);
        $builder->select($this->table.'.*, lecturers.name as lecturer_name');
        $builder->join('lecturers','subjects.lecture_id = lecturers.id');
        return $builder->get()->getResultArray();
    }

    public function getSubjectByCategory(?int $typeId){
        $builder = $this->db->table($this->table);
        $builder->select($this->table.'.*, lecturers.name as lecturer_name');
        $builder->join('lecturers','subjects.lecture_id = lecturers.id');
        $builder->where($this->table.'.subject_type_id',$typeId);
        return $builder->get()->getResultArray();
    }
}