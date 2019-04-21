<?php

namespace App\Http\Controllers\Admin;

//use Illuminate\Http\Request;

use App\Models\Forum\Category;

class AdminPanelController extends AdminController
{

    public function index()
    {
        return view('admin.index');
    }

    public function indexForum()
    {

    }
}
