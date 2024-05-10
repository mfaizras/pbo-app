<?php

namespace App\Models;

use CodeIgniter\Model;

class Post extends Model
{
    protected $table            = 'posts';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['title','description','subject_id'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getAllPost(){
        $builder = $this->db->table('posts');
        $builder->select('posts.*, lecturers.name as lecturer_name,subjects.title as subject,subject_types.title as subject_type');
        $builder->join('subjects','subjects.id = posts.subject_id');
        $builder->join('lecturers','subjects.lecture_id = lecturers.id');
        $builder->join('subject_types','subjects.subject_type_id = subject_types.id');
        return $builder->get()->getResult();
    }

    public function getAllPostBySubject($id){
        $builder = $this->db->table('posts');
        $builder->select('posts.*, lecturers.name as lecturer_name,subjects.title as subject,subject_types.title as subject_type');
        $builder->join('subjects','subjects.id = posts.subject_id');
        $builder->join('lecturers','subjects.lecture_id = lecturers.id');
        $builder->join('subject_types','subjects.subject_type_id = subject_types.id');
        $builder->where('subjects.id',$id);
        return $builder->get()->getResultArray();
    }
}
