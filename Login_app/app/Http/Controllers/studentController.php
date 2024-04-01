<?php

namespace App\Http\Controllers;

use App\Models\stu;
use Illuminate\Http\Request;

class studentController extends Controller
{
    protected $task;

    public function __construct()
    {
        $this->task = new stu ();
    }
    public function student()
    {
        $response['tasks'] =$this->task->all();

        return view('pages\student\student')->with($response);
    }

public function store(Request $request)
{
    $this->task->create($request->all());

    return redirect()->route('student');
}

// public function delete($task_id)
//     {
//         $task = $this->task->find($task_id);
//         $task->delete();

//         return redirect()->route('student');

//     }

public function delete($task_id)
{
    $task = $this->task->find($task_id);

    if (!$task) {
        return redirect()->route('student')->with('error', 'Task not found.');
    }

    $task->delete();

    return redirect()->route('student')->with('success', 'Task deleted successfully.');
}
}
