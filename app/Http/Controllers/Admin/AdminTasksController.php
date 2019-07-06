<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class AdminTasksController extends AdminController
{
    public function index()
    {

    }

    public function create()
    {
        return view('admin.checklists.tasks.create');
    }
}
