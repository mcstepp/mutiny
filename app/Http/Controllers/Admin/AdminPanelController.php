<?php

namespace App\Http\Controllers\Admin;

//use Illuminate\Http\Request;

class AdminPanelController extends AdminController
{

    public function index()
    {
        return view('admin.index');
    }

    public function indexForum()
    {
        return view('admin.forum.index');
    }
}
