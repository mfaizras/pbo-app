<?php 
namespace App\Controllers;

use App\Models\User;
use CodeIgniter\Controller;

class Auth extends Controller{

    public function login(){
        if(session()->get('logged_in')){
            return redirect()->to(url_to('dashboard'));
        }
        return view('auth/login');
    }

    public function doLogin(){
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $session = session();

        $model = new User();
        $data = $model->where('username',$username)->first();

        if($data){
            if(password_verify($password,$data['password'])){
                $arrSess = [
                    'id' => $data['id'],
                    'username' => $data['username'],
                    'name' => $data['name'],
                    'role' => $data['role'],
                    'logged_in' => TRUE
                ];
                $session->set($arrSess);

                return redirect()->to(url_to('dashboard'));
            } 
        }

        return redirect()->to(url_to('loginPage'));
    }

    public function logout()  {
        session()->destroy();
        return redirect()->to(url_to('loginPage'));
    }
}