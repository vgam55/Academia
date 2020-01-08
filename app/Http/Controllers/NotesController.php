<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
class NotesController extends Controller
{
    public function destroy($id)
{
   Note::findOrFail($id)->delete();

    return redirect()->back();
}

public function all()
{
	$notes=Note::all();
	return view('notes.index');
}
}
