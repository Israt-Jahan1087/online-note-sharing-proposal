<?php

namespace App\Http\Controllers;
use App\Models\Note;
use Illuminate\Http\Request;

use App\Models\Category;

class NoteController extends Controller
{
public function index()
{
    $notes = Note::latest()->get();
    return view('user.allnotes', compact('notes'));
}
 
public function create()
{

$categories = Category::all();

return view('user.upload',compact('categories'));

}
public function store(Request $request)
{

$file = $request->file('file');

$filename = time().'.'.$file->extension();

$file->move(public_path('notes'),$filename);

Note::create([

'title'=>$request->title,
'description'=>$request->description,
'file'=>$filename,
'user_id'=>auth()->id(),
'category_id'=>$request->category_id

]);

return back()->with('success','Notes uploaded successfully!');

}
public function adminNotes()
{
    $notes = Note::latest()->get();

    return view('admin.notes', compact('notes'));
}
public function download($id)
{
    $note = Note::findOrFail($id);

    $file = public_path('notes/'.$note->file);

    return response()->download($file);
}
public function destroy($id)
{

$note = Note::findOrFail($id);

$file = public_path('notes/'.$note->file);

if(file_exists($file)){
unlink($file);
}

$note->delete();

return back()->with('success','Note deleted successfully');

}
public function approve($id)
{
$note = Note::findOrFail($id);

$note->status = 'approved';
$note->save();

return back()->with('success','Note approved');
}

public function reject($id)
{
$note = Note::findOrFail($id);

$note->status = 'rejected';
$note->save();

return back()->with('success','Note rejected');
}
 public function allNotes()
    {
        $notes = Note::latest()->get();

        return view('user.allnotes', compact('notes'));
    }
}