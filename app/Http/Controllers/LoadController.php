<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoadController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function malecloth(){
        return view('pages.malecloth');
    }
    public function femalecloth(){
        return view('pages.femalecloth');
    }
    public function unisexcloth(){
        return view('pages.unisexcloth');
    }
    public function about(){
        return view('pages.about');
    }
    public function blog(){
        return view('pages.blog');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function viewproduct(){
        return view('pages.viewproduct');
    }
}
