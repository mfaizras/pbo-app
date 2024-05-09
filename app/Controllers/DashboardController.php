<?php

namespace App\Controllers;

use App\Controllers\BaseController;
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
        echo "Dashboard PAge";
    }
}
