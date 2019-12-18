<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

use App;

class TasksController extends Controller
{
  /**
   * Показать все таски.
   *
   * @return Response
   */

  public function index() 
  {
    //$tasks = DB::table('tasks')->get();
    //$tasks = App\Task::show_all();
    $tasks = App\Task::all();
    return view('page.task.index', compact('tasks'));
  }

  public function detail($id) 
  {
    $task = App\Task::find($id);
    if (is_null($task)) { abort(404); }
    else return view('page.task.detail', compact('task'));
  }

}