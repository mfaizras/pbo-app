<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\SubjectType;
use App\Models\Lecturer;
use App\Models\Subject;
use App\Models\SubjectTypes;
use App\Models\User;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/index');
    }

    public function subject() {
        $db = db_connect();
        $subjectTypeModel = new SubjectTypes();
        $lecturerModel = new Lecturer();

        $data['subjectTypes'] = $subjectTypeModel->asArray()->findAll();
        $data['lecturers'] = $lecturerModel->asArray()->findAll();
        return view('admin/subject',$data);
    }
    
    public function subjectStore() {
        $input = $this->request->getVar();
        $subjectTypeModel = new SubjectTypes();
        $lecturerModel = new Lecturer();
        $subjectModel = new Subject();
        
        $subjectModel->insert($input);
        
        return redirect()->to(url_to('adminSubjectStore'));
    }
    
    public function lecture() {
        return view('admin/lecture');
    }

    public function lectureStore() {
        $input = $this->request->getVar();
        $lecturerModel = new Lecturer();
        
        $lecturerModel->insert($input);
        
        return redirect()->to(url_to('adminLectureStore'));
    }

    public function category() {
        return view('admin/category');
    }

    public function categoryStore() {
        $input = $this->request->getVar();
        $categoryModel = new SubjectTypes();
        
        $categoryModel->insert($input);
        
        return redirect()->to(url_to('adminCategoryStore'));
    }

    public function user() {
        return view('admin/user');
    }

    public function userTable() {
        return view('admin/user/index');
    }

    public function userStore() {
        $input = $this->request->getVar();
        $userModel = new User();

        $input['password'] = password_hash($input['password'],PASSWORD_DEFAULT);
        
        $userModel->insert($input);
        
        return redirect()->to(url_to('adminUserStore'));
    }
    
}
