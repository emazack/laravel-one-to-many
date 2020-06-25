<?php

namespace App\Http\Controllers;
use App\Task;
use App\Employee;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {

      $tasks = Task::all();
      return view('index', compact('tasks'));
    }

    public function edit($id) {
      $task = Task::findOrFail($id);
      $employees = Employee::all();

      return view('edit', compact('task', 'id', 'employees'));
    }
}
