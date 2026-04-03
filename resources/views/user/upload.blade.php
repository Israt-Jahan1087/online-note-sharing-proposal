@extends('layouts.dashboard')

@section('content')

<div class="container">

<div class="row justify-content-center">

<div class="col-md-8">

<div class="card upload-card">

<div class="card-header">
    
<h4><i class="fa fa-upload"></i> Upload Notes</h4>
</div>

<div class="card-body">
@if(session('success'))

<div class="alert alert-success alert-dismissible fade show">

{{ session('success') }}

<button type="button" class="btn-close" data-bs-dismiss="alert"></button>

</div>

@endif
<form action="{{ route('notes.store') }}" method="POST" enctype="multipart/form-data">

@csrf

<!-- Title -->

<div class="mb-3">

<label class="form-label">Title</label>

<input type="text"
name="title"
class="form-control"
placeholder="Enter note title"
required>

</div>

<!-- Description -->

<div class="mb-3">

<label class="form-label">Description</label>

<textarea name="description"
class="form-control"
rows="3"
placeholder="Write short description"></textarea>

</div>

<!-- Category -->

<div class="mb-3">

<label class="form-label">Category</label>

<select name="category_id" class="form-control">

@foreach($categories as $category)

<option value="{{ $category->id }}">
{{ $category->name }}
</option>

@endforeach

</select>

</div>

<!-- File Upload -->

<div class="mb-3">

<label class="form-label">Upload File</label>

<input type="file"
name="file"
class="form-control"
required>

</div>

<!-- Button -->

<button class="btn btn-success">

<i class="fa fa-cloud-upload"></i> Upload Notes

</button>

</form>

</div>

</div>

</div>

</div>

</div>

@endsection