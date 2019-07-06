<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreTaskCategory;
use App\Models\Checklists\Task;
use App\Models\Checklists\TaskCategory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdminTaskCategoryController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return TaskCategory[]|Collection
     */
    public function index()
    {
        $taskCategories = TaskCategory::all();

        return $taskCategories;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $taskCategories = TaskCategory::all();

        return view('admin.checklists.tasks.index', [
            'taskCategories' => $taskCategories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(StoreTaskCategory $request)
    {
        TaskCategory::create([
            'name' => $request->input('task_category_name'),
            'description' => $request->input('task_category_description'),
        ]);

        return redirect()->route('admin-create-task-category');
    }

    /**
     * Display the specified resource.
     *
     * @param Task $task
     * @return Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Task $task
     * @return Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Task $task
     * @return Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Task $task
     * @return Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
