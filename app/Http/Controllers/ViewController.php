<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{    
    public function index () {
        return view('welcome');
    }

    public function show_dashboard () {
        return view('dashboard');
    }

    public function show_table () {
        return view('table');
    }

    public function show_posts ($post, $title) {
        return view('posts', compact('post', 'title'));
    }

    public function show_about () {
        return view('about');
    }

    public function show_contact () {
        return view('contact');
    }
}
