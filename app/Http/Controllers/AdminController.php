<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/index');
    }

    public function minor()
    {
        return view('admin/minor');
    }
}
