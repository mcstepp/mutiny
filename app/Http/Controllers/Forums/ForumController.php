<?php

namespace App\Http\Controllers\Forums;

use App\Models\Forum\Forum;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class ForumController
 * @package App\Http\Controllers\Forums
 */
class ForumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forums = Forum::latest()->get();
        return view('forum.index', compact('forums'));
    }

    /**
     * Show the form for creating a new forum.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.forum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:6',
            'category' => 'required'
        ]);

        //dd($request);

        Forum::create([
            'name' => $request->input('name'),
            'category_id' => $request->input('category'),
            'description' => $request->input('description'),
            'ic' => $request->has('ic'),
            'private' => $request->has('private')
        ]);

        return redirect('/admin/forum');
    }

    /**
     * Display the specified resource.
     *
     * @param Forum $forum
     * @return \Illuminate\Http\Response
     */
    public function show(Forum $forum)
    {
        return view('thread.index', compact($forum));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Forum $forum
     * @return void
     */
    public function edit(Forum $forum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Forum $forum
     * @return void
     */
    public function update(Request $request, Forum $forum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Forum $forum
     * @return void
     */
    public function destroy(Forum $forum)
    {
        //
    }
}
