<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $suppliers = User::join('role_user', 'users.id', '=', 'role_user.user_id')
            ->where('role_id', '2')
            ->get();

        return view('user.index')->with('suppliers', $suppliers);
    }
}
