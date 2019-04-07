<?php

namespace App\Http\Controllers\Character;

use App\Http\Controllers\Controller;
use App\Models\Character\IndustryJob;
use Illuminate\Http\Request;

class IndustryJobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $industry = $request->query('industry');
        $jobs = $industry ? IndustryJob::whereIndustry($industry)->get() : IndustryJob::all();

        if ($request->wantsJson()) {
            return response()->json($jobs, 200);
        }

        else {
            dd($jobs);
        }
    }
}
