<?php

namespace App\Http\Controllers;

use App\Models\RBAC\Admin;
use App\Models\UserAuth;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class TestController extends Controller
{
    //
    public function index (Request $request)
    {
        dump( session()->all() );
    }
}
