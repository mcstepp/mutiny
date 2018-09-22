<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function __construct()
    {
        // TODO: create middleware for admin, staff levels, etc (permissions/roles)
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function indexForum()
    {
        return view('admin.forum.index');
    }
}
