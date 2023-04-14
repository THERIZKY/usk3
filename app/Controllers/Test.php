<?php

namespace App\Controllers;

class Test extends BaseController
{
    public function index()
    {
        return view('test/login', ['title' => 'TESTING']);
    }
}
