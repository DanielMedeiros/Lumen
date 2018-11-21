<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //

    public function teste()
    {

        $json = ['nome' => 'Daniel'];

        return response($json, 201)->header('Content-type', 'application/json');
    }

    
}
