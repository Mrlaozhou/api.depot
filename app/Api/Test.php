<?php
namespace App\Api;
use Illuminate\Http\Request;
use App\Api\Base;
class Test extends Base
{
    public function index( Request $request )
    {
        // TODO
        return [ 'name'=>'luke', 'time'=>microtime() ];
    }

    public function create (Request $request)
    {
        // TODO

    }

    public function delete (Request $request)
    {
        // TODO

    }

    public function update (Request $request)
    {
        // TODO

    }
}