<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
        return view('pages.home', ['title' => 'home']);
    }
}
