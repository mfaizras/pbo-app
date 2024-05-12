<?php

namespace App\Controllers;

use App\Models\Lecturer;
use App\Models\SubjectTypes;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminLecturer extends BaseController
{
    public function index() {
        $lecturerModel = new Lecturer();

        $data['lecturers'] = $lecturerModel->findAll();

        return view('admin/lecturer/index',$data);
    }

    public function create() {
        return view('admin/lecture');
    }

    public function store() {
        $input = $this->request->getVar();
        $lecturerModel = new Lecturer();
        
        $lecturerModel->insert($input);
        
        return redirect()->to(url_to('adminLecture'));
    }
    
    public function delete($id) {
        $input = $this->request->getVar();
        $lecturerModel = new Lecturer();
        
        $lecturerModel->delete($id);
        
        return redirect()->to(url_to('adminLecture'));
    }
    
    public function edit($id) {
        $lecturerModel = new Lecturer();

        $data['lecture'] = $lecturerModel->find($id);
        $data['id'] = $id;
        return view('admin/lecturer/edit',$data);
    }

    public function update($id) {
        $input = $this->request->getVar();
        $lecturerModel = new Lecturer();
    
        $lecturerModel->save($input);
        
        return redirect()->to(url_to('adminLecture'));
    }
}
