<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $data['title'] = 'Welcome to Homepage';
        return view('frontend.index', $data);
    }
}
