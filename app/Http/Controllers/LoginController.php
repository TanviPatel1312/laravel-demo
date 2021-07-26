<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getData(Request $request)
    {
        return $request->input();
    }

}
