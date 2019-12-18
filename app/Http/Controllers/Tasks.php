<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

use App;

class Tasks extends Controller
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
    return view('task-index', compact('tasks'));
  }

  public function detail($id) 
  {
    $task = App\Task::find($id);
    return view('task-detail', compact('task'));
  }

}