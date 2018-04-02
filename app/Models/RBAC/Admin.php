<?php

namespace App\Models\RBAC;

use Illuminate\Database\Eloquent\Model;

class Admin extends Base
{
    //
    protected $table            =   'admin';

    protected $hidden           =   [
        'password','salt','issalt'
    ];


}
