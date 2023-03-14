<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('home');
    }
    public function adduser(){
        return  view('admin.adduser');
    }
    public function alluser(){
        return view('admin.alluser');
    }
    public function addfreeshipping(){
        return view('admin.addfreeshipping');
    }
    public function allfreeshipping(){
        return view('admin.freeshipping');
    }
    public function addproduct(){
        return view('admin.addproduct');
    }
    public function allproduct(){
        return view('admin.allproduct');
    }
    public function newarrival(){
        return view('admin.allnewarrival');
    }
    public function addnewarrival(){
        return view('admin.addnewarrival');
    }
    public function ordertable(){
        return view('admin.order');
    }
    public function addfeaturedproduct(){
        return view('admin.addfeaturedproduct');
    }
    public function featuredproduct(){
        return view('admin.allfeaturedproduct');
    }
    public function blogtable(){
        return view('admin.allblog');
    }
    public function addblog(){
        return view('admin.addblog');
    }
    public function allcontact(){
        return view('admin.allcontact');
    }
}
