<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Post;
use App\Models\Subject;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Database;

class PostController extends BaseController
{
    public function index()
    {
        return view('post/index');
    }

    public function create(){
        $subjectModel = new Subject();

        $data['subjects'] = $subjectModel->findAll();

        return view('post/create',$data);
    }

    public function store() {
        $input = $this->request->getVar();
        $postModel = new Post();
        $db = Database::connect();
        $fileTable = $db->table('files');


        $data = [
            'title' =>  $input['title'],
            'description' => $input['description'],
            'subject_id' => $input['subject_id']
        ];

        $postModel->insert($data);

        if(isset($input['files'])){
            foreach($input['files'] as $file){
                $fileTable->insert([
                    'filename' => $file['filename'],
                    'filelink' => $file['filelink'],
                    'post_id' => $postModel->insertID()
                ]);
            }
        }
    

        return redirect()->to('post');
    }

    public function show($id) {
        $postModel = new Post();
        $db = db_connect();
        $filesBuilder = $db->table('files');

        $data['post'] = $postModel->find($id);
        $data['files'] = $filesBuilder->select('*')->where('post_id',$id)->get()->getResultArray();

        // dd($data);

        return view('post/show',$data);
    }

    public function byCategory($id) {
        $subjectModel = new Subject();
        $db = db_connect();
        $categoryBuilder = $db->table('subject_types');

        $data['categories'] = $categoryBuilder->select('*')->where('id',$id)->get()->getResultArray()[0];
        // $data['posts'] = $subjectModel->where('subject_type_id',$id)->get()->getResultArray();
        $data['posts'] = $subjectModel->getSubjectByCategory($id);
        $data['color'] = ['green','blue','red','orange','blue2','purple','purple2','pink','yellow'];

        return view('post/category',$data);
    }

    public function bySubject($id){
        $postModel = new Post();
        $subjectModel = new Subject();

        $data['posts'] = $postModel->getAllPostBySubject($id);
        $data['subject'] = $subjectModel->find($id);

        // dd($data['posts']);
        return view('post/bySubject',$data);
    }
}
