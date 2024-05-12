<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Subject;
use App\Models\Lecturer;
use App\Models\SubjectTypes;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminSubject extends BaseController
{
    public function index() {
        $subjectModel = new Subject();

        $data['subjects'] = $subjectModel->getSubject();

        return view('admin/subject/index',$data);
    }

    public function create() {
        $db = db_connect();
        $subjectTypeModel = new SubjectTypes();
        $lecturerModel = new Lecturer();

        $data['subjectTypes'] = $subjectTypeModel->asArray()->findAll();
        $data['lecturers'] = $lecturerModel->asArray()->findAll();
        return view('admin/subject',$data);
    }

    public function store() {
        $input = $this->request->getVar();
        $subjectTypeModel = new SubjectTypes();
        $lecturerModel = new Lecturer();
        $subjectModel = new Subject();
        
        $subjectModel->insert($input);
        
        return redirect()->to(url_to('adminSubject'));
    }
    
    public function delete($id) {
        $input = $this->request->getVar();
        $subjectModel = new Subject();
        
        $subjectModel->delete($id);
        
        return redirect()->to(url_to('adminSubject'));
    }
    
    public function edit($id) {
        $subjectModel = new Subject();
        $subjectTypeModel = new SubjectTypes();
        $lecturerModel = new Lecturer();

        $data['subjectTypes'] = $subjectTypeModel->asArray()->findAll();
        $data['lecturers'] = $lecturerModel->asArray()->findAll();

        $data['subject'] = $subjectModel->find($id);
        $data['id'] = $id;
        return view('admin/subject/edit',$data);
    }

    public function update($id) {
        $input = $this->request->getVar();
        $subjectModel = new Subject();
    
        $subjectModel->save($input);
        
        return redirect()->to(url_to('adminSubject'));
    }
}
