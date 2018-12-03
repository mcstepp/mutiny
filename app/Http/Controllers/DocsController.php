<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class DocsController extends Controller
{
    public function index()
    {
        //
    }

    public function terms()
    {
        return view('docs.terms');
    }

    public function rules()
    {
        // return view('docs.rules');
    }

    public function privacy()
    {
        return view('docs.privacy');
    }
}
