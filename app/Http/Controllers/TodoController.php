<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Http\Requests\StoreTodoRequest;
use App\Http\Requests\UpdateTodoRequest;
use Illuminate\Support\Str;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("todos", ["todos" => Todo::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTodoRequest $request)
    {


        $request->validate([
            "title" => "required | min:3",
            "description" => "required | min:5",
        ]);

        Todo::create([
            "title" => $request["title"],
            "excerpt" => Str::excerpt($request["description"]),
            "description" => $request["description"],
            "isDone" => boolval($request["isDone"])
        ]);

        return redirect("/todos");
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        return view("todo", ["todo" => $todo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        return view("edit", ["todo" => $todo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTodoRequest $request, Todo $todo)
    {
        $request->validate([
            "title" => "required | min:3",
            "description" => "required | min:5",
        ]);

        $todo = Todo::find($todo->id);

        $todo->update([
            "title" => $request["title"],
            "excerpt" => Str::excerpt($request["description"]),
            "description" => $request["description"],
            "isDone" => boolval($request["isDone"])
        ]);

        return redirect("/todos");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        Todo::find($todo->id)->delete();

        return redirect("/todos");
    }
}
