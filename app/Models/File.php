<?php 
namespace App\Models;

use CodeIgniter\Model;

class File extends Model{
    protected $table      = 'files';
    protected $allowedFields = ['filename','filelink','post_id'];
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
}