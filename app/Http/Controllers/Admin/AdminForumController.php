<?php

namespace App\Http\Controllers\Admin;

use App\Models\Forum\Category;
use App\Models\Forum\Forum;
use Illuminate\Http\Request;

class AdminForumController extends AdminController
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('forums')->get();

        return view('admin.forum.index', compact('categories'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Forum $forum
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit()
    {
        $categories = Category::all();
        $forums = Forum::all();

        return view('admin.forum.edit', compact(['forums','categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'forum' => 'required|exists:forums,id',
            'category' => 'required|exists:categories,id',
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:6'
        ]);

        $forum = Forum::find($request->input('forum'));

        $forum->update([
            'name' => $request->input('name'),
            'category_id' => $request->input('category'),
            'description' => $request->input('description'),
            'private' => $request->has('private'),
            'ic' => $request->has('ic')
        ]);

        //TODO: flash success message

        return redirect()->route('admin-forums');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
