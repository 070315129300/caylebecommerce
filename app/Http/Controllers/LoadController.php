<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Freeshipping;
use App\Models\Blog;


class LoadController extends Controller
{
    public function index()
    {
        $user = Freeshipping ::all();
        return view('index', compact('user'));
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
        $user = Blog::all();
        return view('pages.blog', compact('user'));
    }
    public function contact(){
        return view('pages.contact');
    }
    public function viewproduct(){
        return view('pages.viewproduct');
    }
}
