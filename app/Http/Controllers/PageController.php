<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function about() {
        return view('pages.about');
    }

    public function users($id) {

        $name = "Anthony - ".$id;
        return view('pages.users', compact('name'));
    }
}
