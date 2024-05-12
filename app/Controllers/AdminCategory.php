<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SubjectTypes;
use CodeIgniter\HTTP\ResponseInterface;

class AdminCategory extends BaseController
{
    public function index() {
        $subjectTypesModel = new SubjectTypes();

        $data['subject_types'] = $subjectTypesModel->findAll();

        return view('admin/subjectTypes/index',$data);
    }

    public function create() {
        return view('admin/category');
    }

    public function store() {
        $input = $this->request->getVar();
        $categoryModel = new SubjectTypes();
        
        $categoryModel->insert($input);
        
        return redirect()->to(url_to('adminCategory'));
    }
    
    public function delete($id) {
        $input = $this->request->getVar();
        $subjectTypesModel = new SubjectTypes();
        
        $subjectTypesModel->delete($id);
        
        return redirect()->to(url_to('adminCategory'));
    }
    
    public function edit($id) {
        $subjectTypesModel = new SubjectTypes();

        $data['subject_type'] = $subjectTypesModel->find($id);
        $data['id'] = $id;
        return view('admin/subjectTypes/edit',$data);
    }

    public function update($id) {
        $input = $this->request->getVar();
        $subjectTypesModel = new SubjectTypes();
    
        $subjectTypesModel->save($input);
        
        return redirect()->to(url_to('adminCategory'));
    }
}
