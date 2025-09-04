<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\User as UserModel;

class User extends BaseController
{
    public function create()
    {
        return view('createuser');
    }
    public function store()
    {
        $userModel = new UserModel();

        $data = [
            'firstname'  => $this->request->getPost('firstname'),
            'middlename' => $this->request->getPost('middlename'),
            'lastname'   => $this->request->getPost('lastname'),
        ];

        $userModel->insert($data);

        return redirect()->to('/')-> with('success', 'User created successfully.');
    }
}
