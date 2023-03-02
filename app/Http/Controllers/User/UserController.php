<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('users.home.dashboard');
    }
    public function about()
    {
        return view('users.about.about');
    }
    public function blog()
    {
        return view('users.blog.blog');
    }
    public function productDisplay()
    {
        return view('users.product.index');
    }
    public function productSingle()
    {
        return view('users.product.product');
    }
    public function blog_detail()
    {
        return view('users.blog.blog_detail');
    }
    public function contact()
    {
        return view('users.contact.contact');
    }

}
