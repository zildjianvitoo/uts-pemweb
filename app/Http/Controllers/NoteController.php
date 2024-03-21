<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Http\Requests\StoreNoteRequest;
use App\Http\Requests\UpdateNoteRequest;
use Illuminate\Support\Str;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("notes.index", ["notes" => Note::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("notes.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNoteRequest $request)
    {
        $validated = $request->validate([
            "title" => "required|min:3",
            "description" => "required|min:5",
        ]);

        Note::create([
            "title" => $validated["title"],
            "excerpt" => Str::excerpt($validated["description"]),
            "content" => $validated["description"]
        ]);

        return redirect("/notes");
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        return view("notes.note", ["note" => $note]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        return view("notes.edit", ["note" => $note]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNoteRequest $request, Note $note)
    {
        $validated = $request->validate([
            "title" => "required|min:3",
            "description" => "required|min:5",
        ]);

        $note = Note::find($note->id);

        $note->update([
            "title" => $validated["title"],
            "excerpt" => Str::excerpt($validated["description"]),
            "content" => $validated["description"]
        ]);

        return redirect("/notes");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        Note::find($note->id)->delete();

        return redirect("/notes");
    }
}
