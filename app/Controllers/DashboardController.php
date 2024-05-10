<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Post;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function __construct()
    {
        if(!session()->logged_in){
            return redirect()->to(url_to('login_page'));
        }
    }

    public function index()
    { 
        $postModel = new Post();

        $data['posts'] = $postModel->getAllPost();
        return view('dashboard/index',$data);
    }

    public function show($page){

    }
}
