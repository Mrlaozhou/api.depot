<?php

namespace App\Http\Controllers;

use App\Events\SOS;
use App\Exceptions\FatalException;
use App\Mail\SOSByMail;
use App\Models\RBAC\Admin;
use App\Models\UserAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Tymon\JWTAuth\Facades\JWTAuth;

class TestController extends Controller
{
    //
    public function index (Request $request)
    {
        dump( Mail::send( new SOSByMail() ) );
    }
}
