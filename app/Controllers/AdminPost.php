<?php 
namespace App\Controllers;

use App\Models\File;
use App\Models\Post;
use Config\Database;
use App\Models\Subject;
use CodeIgniter\Controller;

class AdminPost extends Controller{
    
    public function index() {
        $postModel = new Post();

        $data['posts'] = $postModel->getAllPost();

        return view('admin/post/index',$data);
    }

    public function create() {
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
    

        return redirect()->to(url_to('adminPost'));
    }
    
    public function delete($id) {
        $input = $this->request->getVar();
        $postModel = new Post();
        
        $postModel->delete($id);
        
        return redirect()->to(url_to('adminPost'));
    }
    
    public function edit($id) {
        $postModel = new Post();
        $subjectModel = new Subject();
        $fileModel = new File();

        $data['subjects'] = $subjectModel->findAll();
        $data['post'] = $postModel->find($id);
        $data['files'] = $fileModel->where('post_id',$id)->asArray()->findAll();
        $data['id'] = $id;

        // dd($data);
        return view('admin/post/edit',$data);
    }

    public function update($id) {

        $input = $this->request->getVar();
        $postModel = new Post();
        $db = Database::connect();
        $fileTable = new File();


        $data = [
            'id' => $input['id'],
            'title' =>  $input['title'],
            'description' => $input['description'],
            'subject_id' => $input['subject_id']
        ];

        $postModel->save($data);

        if(isset($input['files'])){
            foreach($input['files'] as $file){
                $fileTable->save([
                    'id' => !empty($file['id'])?$file['id']:'',
                    'filename' => $file['filename'],
                    'filelink' => $file['filelink'],
                    'post_id' => $input['id']
                ]);
            }
        }
    

        return redirect()->to(url_to('adminPost'));
        $input = $this->request->getVar();
        $postModel = new Post();
    
        $postModel->save($input);
        
        return redirect()->to(url_to('adminPost'));
    }

    function deleteFile() {
        $id = $this->request->getVar('id');
        $fileModel = new File();

        $fileModel->delete($id);
    }
}