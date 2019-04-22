<?php

namespace App\Http\Controllers\Forums;

use App\Models\Forum\Category;
use App\Models\Forum\Forum;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('super');
    }

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
     * Show the form for creating a new forum.
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

        $this->validate($request, [
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:6',
        ]);

        Category::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'ic' => $request->has('ic'),
            'private' => $request->has('private')
        ]);

        return redirect()->route('admin-forums');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Forum\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Forum $forum
     * @return void
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Forum $forum
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'category' => 'required|exists:categories,id',
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:6'
        ]);

        $category = Category::find($request->input('category'));

        $category->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'private' => $request->has('private')
        ]);

        //TODO: flash success message

        return redirect()->route('admin-forums');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Forum $forum
     * @return void
     */
    public function destroy(Category $category)
    {
        //
    }
}
