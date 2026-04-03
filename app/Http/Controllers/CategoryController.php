<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

public function index()
{
$categories = Category::all();
return view('admin.categories',compact('categories'));
}

public function store(Request $request)
{
Category::create([
'name'=>$request->name
]);

return back()->with('success','Category added');
}

public function destroy($id)
{
Category::find($id)->delete();

return back()->with('success','Category deleted');
}

}