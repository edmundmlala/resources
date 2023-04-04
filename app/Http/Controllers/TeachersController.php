<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function homework()
    {
        return view('teachers.homework');
    }

    public function outline()
    {
        return view('teachers.outline');
    }

    public function handouts()
    {
        return view('teachers.handouts');
    }

    public function syllabus()
    {
        return view('teachers.syllabus');
    }

    public function profile()
    {
        return view('teachers.profile');
    }

    public function recommendations()
    {
        return view('teachers.recommendations');
    }

    public function books()
    {
        return view('teachers.books');
    }
}
