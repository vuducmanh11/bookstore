<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function showProfile() {
        return view('admin');
    }
}