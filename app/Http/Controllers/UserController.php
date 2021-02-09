<?php

namespace App\Http\Controllers;

use App\Requests;
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


    public function sendSupplierRequest()
    {
        return view('supplier.supplier-request');
    }

    public function saveSupplierRequest(Request $request, $id)
    {

        $sRequest = new Requests ;
        $sRequest->name = $request->input('name');
        $sRequest->email = $request->input('email');
        $sRequest->industry = $request->input('industry');
        $sRequest ->message = $request->input('message');
        $sRequest->user_id = $id;

        $sRequest->save();

        return redirect()->back();
    }
}
