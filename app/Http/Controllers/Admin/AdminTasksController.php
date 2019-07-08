<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreTask;
use App\Models\Checklists\BonusMode;
use App\Models\Checklists\Task;
use App\Models\Checklists\TaskCategory;
use Illuminate\Http\Request;

class AdminTasksController extends AdminController
{
    public function index()
    {

    }

    public function create()
    {
        $taskCategories = TaskCategory::all();
        $bonusModes = BonusMode::all();
        $tasks = Task::all();

        return view('admin.checklists.tasks.index', [
            'taskCategories' => $taskCategories,
            'bonusModes' => $bonusModes,
            'tasks' => $tasks
        ]);
    }

    public function store(StoreTask $request)
    {
        Task::create([
            'task_category_id' => $request->input('task_category'),
            'description' => $request->input('task_description'),
            'points' => $request->input('task_points')
        ]);

        return redirect()->route('admin-create-tasks');
    }
}
