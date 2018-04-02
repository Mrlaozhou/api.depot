<?php
namespace App\Extentions\Check;

use App\Extentions\Check;
use Illuminate\Http\Request;

class ParamsCheck extends Check
{
    protected function operate(Request $request)
    {
        // TODO: Implement operate() method.

        echo 'params has checked'.PHP_EOL;
    }
}