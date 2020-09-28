<?php

namespace App\Http\Controllers;
use App\Course;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
        // The library view will return all the courses inside of the course model 
        return view('library', ['courses' => Course::all()]);
    }
}
