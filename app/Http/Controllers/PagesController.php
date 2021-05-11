<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }

    public function menu() {
        return view('menu');
    }

    public function promotions() {
        return view('promotions');
    }

    public function create() {
        return view('create');
    }

    public function basket() {
        return view('basket');
    }
}
