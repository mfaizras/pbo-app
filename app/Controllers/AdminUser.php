<?php 
namespace App\Controllers;

use App\Models\User;
use CodeIgniter\Controller;

class AdminUser extends Controller{
    
    public function index() {
        $userModel = new User();

        $data['users'] = $userModel->findAll();

        return view('admin/user/index',$data);
    }

    public function create() {
        return view('admin/user');
    }

    public function store() {
        $input = $this->request->getVar();
        $userModel = new User();

        $input['password'] = password_hash($input['password'],PASSWORD_DEFAULT);
        
        $userModel->insert($input);
        
        return redirect()->to(url_to('adminUser'));
    }
    
    public function delete($id) {
        $input = $this->request->getVar();
        $userModel = new User();
        
        $userModel->delete($id);
        
        return redirect()->to(url_to('adminUser'));
    }
    
    public function edit($id) {
        $userModel = new User();

        $data['user'] = $userModel->find($id);
        $data['id'] = $id;
        return view('admin/userEdit',$data);
    }

    public function update($id) {
        $input = $this->request->getVar();
        $userModel = new User();
    
        $userModel->save($input);
        
        return redirect()->to(url_to('adminUser'));
    }
}