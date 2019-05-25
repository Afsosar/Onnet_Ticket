<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;

class Inicio extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function index()
    {
        return View('index')
    }
}
