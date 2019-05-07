<?php

namespace App\Http\Controllers\Wiki;

use App\Http\Controllers\Controller;
use App\Models\Wiki\WikiPage;
use Illuminate\Http\Request;

class WikiPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wiki\WikiPage  $wikiPage
     * @return \Illuminate\Http\Response
     */
    public function show(WikiPage $wikiPage)
    {
        return view('wiki.page.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wiki\WikiPage  $wikiPage
     * @return \Illuminate\Http\Response
     */
    public function edit(WikiPage $wikiPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wiki\WikiPage  $wikiPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WikiPage $wikiPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wiki\WikiPage  $wikiPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(WikiPage $wikiPage)
    {
        //
    }
}
