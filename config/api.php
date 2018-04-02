<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Api prefix
    |--------------------------------------------------------------------------
    */

    'prefix'        =>  env( 'API_PREFIX', 'api' ),

    /*
    |--------------------------------------------------------------------------
    | Api version
    |--------------------------------------------------------------------------
    */

    'version'       =>  env( 'API_VERSON', 'v1' ),

    /*
    |--------------------------------------------------------------------------
    | Api check except
    |--------------------------------------------------------------------------
    */

    'except'        =>  [],
];