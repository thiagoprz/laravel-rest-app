<?php

namespace App\Http\Controllers;

use App\Todo;
use Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    /**
     * List all todos
     * @return Todo[]
     */
    public function index()
    {
        $todos = Todo::where('user_id', '=', Auth::user()->id)->get();
        return $todos;
    }

    /**
     * Saves a new Todo
     * @return Todo
     */
    public function store()
    {
        $todo = new Todo(Request::all());
        $todo->user_id = Auth::user()->id;
        $todo->save();
        return $todo;
    }
}
