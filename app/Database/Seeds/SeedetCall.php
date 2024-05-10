<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeedetCall extends Seeder
{
    public function run()
    {
        $this->call('Lectures');
        $this->call('SubjectTypes');
        $this->call('Subject');
    }
}
