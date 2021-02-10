<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SupplierResource;
use App\Supplier;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return SupplierResource::collection(Supplier::paginate(5));
    }
}
