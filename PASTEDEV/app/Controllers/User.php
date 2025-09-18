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
    public function list()
    {
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll();
        return view('list_user', $data);
        
    }
    public function delete($id)
    {
        $userModel = new UserModel();
        $userModel->delete($id);
        return redirect()->to('/listuser')->with('success', 'User deleted successfully.');
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

        return redirect()->to('/listuser')-> with('success', 'User created successfully.');
    }
    public function edit($id)
    {
        $userModel = new UserModel();
        $data['user'] = $userModel->find($id);
        return view('edit_user', $data);
    }
    public function update($id)
    {
        $userModel = new UserModel();

        $data = [
            'firstname' => $this->request->getPost('firstname'),
            'middlename' => $this->request->getPost('middlename'),
            'lastname' => $this->request->getPost('lastname'),
        ];

        $userModel->update($id, $data);

        return redirect()->to('/listuser')->with('success', 'User updated successfully.');
    }

}
    