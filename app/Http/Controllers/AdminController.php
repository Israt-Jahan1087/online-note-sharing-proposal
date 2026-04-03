<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Note;

class AdminController extends Controller
{

public function dashboard()
{

$users = User::count();

$notes = Note::count();

$downloads = Note::sum('downloads');

$recentNotes = Note::with('user')->latest()->take(5)->get();

return view('admin.dashboard',compact(
'users',
'notes',
'downloads',
'recentNotes'
));

}

public function users()
{
$users = User::all();
return view('admin.users',compact('users'));
}

public function notes()
{
$notes = Note::latest()->get();
return view('admin.notes',compact('notes'));
}
public function deleteUser($id)
{

User::find($id)->delete();

return back()->with('success','User deleted');

}

public function deleteNote($id)
{

Note::find($id)->delete();

return back()->with('success','Note deleted');

}

public function index()
{

$users = User::latest()->get();

return view('admin.users',compact('users'));
}
public function destroy($id)
{
    $user = User::findOrFail($id);
    $user->delete();

    return back()->with('success','User deleted successfully');
}

public function approve($id)
{
    $note = Note::findOrFail($id);

    $note->status = 'approved';
    $note->save();

    return back()->with('success','Note Approved');
}

public function reject($id)
{
    $note = Note::findOrFail($id);

    $note->status = 'rejected';
    $note->save();

    return back()->with('error','Note Rejected');
}
}