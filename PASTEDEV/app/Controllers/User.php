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
}
