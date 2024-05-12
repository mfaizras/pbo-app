<?php 
namespace App\Models;

use CodeIgniter\Model;

class Subject extends Model{
    protected $table      = 'subjects';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields    = ['title','lecture_id','subject_type_id','academic_year'];


    public function getSubject(){
        $builder = $this->db->table($this->table);
        $builder->select($this->table.'.*, lecturers.name as lecturer_name,subject_types.title as subject_type');
        $builder->join('lecturers','subjects.lecture_id = lecturers.id');
        $builder->join('subject_types','subjects.subject_type_id = subject_types.id');
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