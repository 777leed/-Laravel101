<?php

namespace App\Http\Controllers;
use App\Models\courses;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('welcome',['title'=>'Welcome']);
    }
    public function home() {
        return view('home',['title'=>'Home']);
    }
    public function showLibrary() {
        $courses = courses::all();
        return view('library_page',['courses'=>$courses,'title'=>'Library']);
    }
}
