@extends('layouts.dashboard')

@section('content')

<h3>Categories</h3>

<!-- Add Category Form -->

<form action="{{ route('categories.store') }}" method="POST">

@csrf

<div class="row mb-3">

<div class="col-md-6">

<input type="text"
name="name"
class="form-control"
placeholder="Enter category name"
required>

</div>

<div class="col-md-2">

<button class="btn btn-primary">
Add
</button>

</div>

</div>

</form>


<!-- Categories Table -->

<table class="table table-bordered">

<thead>

<tr>
<th>ID</th>
<th>Name</th>
<th>Action</th>
</tr>

</thead>

<tbody>

@foreach($categories as $category)

<tr>

<td>{{ $category->id }}</td>

<td>{{ $category->name }}</td>

<td>

<form action="{{ route('categories.destroy',$category->id) }}" method="POST">

@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm"
onclick="return confirm('Are you sure to delete this category?')">
Delete
</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

@endsection