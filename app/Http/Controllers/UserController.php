<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Note;

class UserController extends Controller
{

public function dashboard()
{

$myNotes = Note::where('user_id',Auth::id())->count();

$totalNotes = Note::count();

$downloads = Note::sum('downloads');

$myUploadedNotes = Note::where('user_id',Auth::id())
                        ->latest()
                        ->get();

return view('user.dashboard', compact(
    'myNotes',
    'totalNotes',
    'downloads',
    'myUploadedNotes'
));
}
public function allNotes()
{
    $notes = Note::latest()->paginate(10);

    return view('user.allnotes',compact('notes'));
}
}