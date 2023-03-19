<?php

namespace App\Http\Controllers;

use App\Models\Newarrival;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Freeshipping;
use App\Models\Featuredproduct;
use App\Models\Message;
use App\Models\Blog;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Hash;

class AdminController extends Controller
{
    public function dashboard(){
        return view('home');
    }
    public function adduser(){
        return  view('admin.adduser');
    }
    public function alluser(){
        $user = user::all();

        return view('admin.alluser', ['user' => $user]);
    }
    public function insertuser(Request $request){
        $user = new user;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request['password']);
        $user->usertype = 0;
        $user->save();
        return redirect()->back()->with('message', 'User Added Successfully');

    }
    public function addfreeshipping()
    {
        return view('admin.addfreeshipping');
    }
    public function insertfreeshipping(Request $request){

        $user  = new Freeshipping;
        $user->productname = $request->productname;
        $image = $request->file;
        if($image) {
            $imagename = time() . '.' . $image->getClientoriginalExtension();

            $request->file->move('freeshippingimage', $imagename);
            $user->image = $imagename;
        }

        if(Auth::id())
        {$user->id= Auth::user()->id;

        }
        $user->save();

        return redirect()->back()->with('message', 'Uploaded successfully ');

    }
    public function allfreeshipping(){
        return view('admin.freeshipping');
    }
    public function addproduct(){
        return view('admin.addproduct');
    }
    public function insertproduct(Request $request){
        $user  = new Product;
        $user->productname = $request->productname;
        $user->brandname = $request->brandname;
        $user->amountbought = $request->amountbought;
        $user->amount = $request->amount;

        $image1 = $request->file1;
        if($image1) {
            $imagename = time() . '.' . $image1->getClientoriginalExtension();

            $request->file1->move('freeshippingimage', $imagename);
            $user->image1 = $imagename;
        }

        $image2 = $request->file2;
        if($image2) {
            $imagename = time() . '.' . $image2->getClientoriginalExtension();

            $request->file2->move('freeshippingimage', $imagename);
            $user->image2 = $imagename;
        }

        $image3 = $request->file3;
        if($image3) {
            $imagename = time() . '.' . $image3->getClientoriginalExtension();

            $request->file3->move('freeshippingimage', $imagename);
            $user->image3 = $imagename;
        }

        $image4 = $request->file4;
        if($image4) {
            $imagename = time() . '.' . $image4->getClientoriginalExtension();

            $request->file4->move('freeshippingimage', $imagename);
            $user->image4 = $imagename;
        }

//        if(Auth::id())
//        {$user->id= Auth::user()->id;
//
//        }
        $user->save();

        return redirect()->back()->with('message', 'Uploaded successfully ');
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
    public function insertnewarrival(Request $request){
        $user  = new Newarrival;
        $user->productname = $request->productname;
        $user->brandname = $request->brandname;
        $user->amountbought = $request->amountbought;
        $user->amount = $request->amount;

        $image1 = $request->file1;
        if($image1) {
            $imagename = time() . '.' . $image1->getClientoriginalExtension();

            $request->file1->move('freeshippingimage', $imagename);
            $user->image1 = $imagename;
        }

        $image2 = $request->file2;
        if($image2) {
            $imagename = time() . '.' . $image2->getClientoriginalExtension();

            $request->file2->move('freeshippingimage', $imagename);
            $user->image2 = $imagename;
        }

        $image3 = $request->file3;
        if($image3) {
            $imagename = time() . '.' . $image3->getClientoriginalExtension();

            $request->file3->move('freeshippingimage', $imagename);
            $user->image3 = $imagename;
        }

        $image4 = $request->file4;
        if($image4) {
            $imagename = time() . '.' . $image4->getClientoriginalExtension();

            $request->file4->move('freeshippingimage', $imagename);
            $user->image4 = $imagename;
        }

        if(Auth::id())
        {$user->id= Auth::user()->id;

        }
        $user->save();

        return redirect()->back()->with('message', 'Uploaded successfully ');
    }
    public function ordertable(){
        return view('admin.order');
    }
    public function addfeaturedproduct(){
        return view('admin.addfeaturedproduct ');
    }
    public function insertfeaturedproduct(Request $request){
        $user  = new Featuredproduct;
        $user->productname = $request->productname;
        $user->brandname = $request->brandname;
        $user->amountbought = $request->amountbought;
        $user->amount = $request->amount;

        $image1 = $request->file1;
        if($image1) {
            $imagename = time() . '.' . $image1->getClientoriginalExtension();

            $request->file1->move('freeshippingimage', $imagename);
            $user->image1 = $imagename;
        }

        $image2 = $request->file2;
        if($image2) {
            $imagename = time() . '.' . $image2->getClientoriginalExtension();

            $request->file2->move('freeshippingimage', $imagename);
            $user->image2 = $imagename;
        }

        $image3 = $request->file3;
        if($image3) {
            $imagename = time() . '.' . $image3->getClientoriginalExtension();

            $request->file3->move('freeshippingimage', $imagename);
            $user->image3 = $imagename;
        }

        $image4 = $request->file4;
        if($image4) {
            $imagename = time() . '.' . $image4->getClientoriginalExtension();

            $request->file4->move('freeshippingimage', $imagename);
            $user->image4 = $imagename;
        }

        if(Auth::id())
        {$user->id= Auth::user()->id;

        }
        $user->save();

        return redirect()->back()->with('message', 'Uploaded successfully ');
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
    public function insertblog(Request $request){
        $user  = new Blog;
        $user->topic = $request->topic;
        $user->body = $request->body;

        $image = $request->file;
        if($image) {
            $imagename = time() . '.' . $image->getClientoriginalExtension();

            $request->file->move('freeshippingimage', $imagename);
            $user->image = $imagename;
        }

        if(Auth::id())
        {$user->id= Auth::user()->id;

        }
        $user->save();

        return redirect()->back()->with('message', 'Uploaded successfully ');
    }
    public function allcontact(){
        return view('admin.allcontact');
    }
}
