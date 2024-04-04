<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('note.index', compact('notes'));
    }
    public function getOne($id)
    {
        return view('note.oneNote', compact('id'));
    }
    public function create()
    {
    }
}
