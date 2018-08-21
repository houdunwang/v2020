<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users()
    {
        return $this->response->array(User::get());
    }
}
