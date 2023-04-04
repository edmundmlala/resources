<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contactus()
    {
        return view('contactus');
    }
    public function grade($id)
    {
        return view('grade')->with([
            "id"=> $id
        ]);
    }

    public function homework($id)
    {
        return view('homework')->with([
            "id"=> $id
        ]);
    }

    public function outline($id)
    {
        return view('outline')->with([
            "id"=> $id
        ]);
    }

    public function syllabus($id)
    {
        return view('syllabus')->with([
            "id"=> $id
        ]);
    }

    public function books($id)
    {
        return view('books')->with([
            "id"=> $id
        ]);
    }

    public function subjects($id)
    {
        return view('subjects')->with([
            "id"=> $id
        ]);
    }
}
