<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class IndexController extends Controller
{
    public function index() {
        return view('layout.login');
    }

    public function showMain() {
        $input = json_encode(Input::all());
        return view('layout.main')->with('input', $input);
    }
}
