<?php
namespace App\Extentions\Check;

use App\Exceptions\FrontCheckException;
use App\Extentions\Check;
use Illuminate\Http\Request;

class RequestCheck extends Check
{
    protected function operate(Request $request)
    {
        // TODO: 验证请求类型

        if (!$request->isXmlHttpRequest())
            throw new FrontCheckException( 'The request type is not allowed.' );
    }
}