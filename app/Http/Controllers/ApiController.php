<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class ApiController extends Controller
{
    public function find(Request $request)
    {
        $user = new User();

        $user->email = $request->input('email');
        $user->password = $request->input('password');

    }
}
