@extends('layouts.dashboard')

@section('content')

<h4 class="mb-4">User Dashboard</h4>

<div class="row">

<div class="col-md-4">
<div class="card bg-primary text-white p-4 dashboard-card">
<h6>My Uploaded Notes</h6>
<h2>{{ $myNotes }}</h2>
</div>
</div>

<div class="col-md-4">
<div class="card bg-success text-white p-4 dashboard-card">
<h6>Total Notes</h6>
<h2>{{ $totalNotes }}</h2>
</div>
</div>

<div class="col-md-4">
<div class="card bg-warning text-white p-4 dashboard-card">
<h6>Total Downloads</h6>
<h2>{{ $downloads }}</h2>
</div>
</div>

</div>

<br>

<div class="card p-4">

<h5>My Notes List</h5>

<div class="table-responsive">

<table class="table table-bordered">

<thead>

<tr>
<th>Title</th>
<th>Description</th>
<th>Date</th>
<th>View</th>
<th>Download</th>
<th>Delete</th>
</tr>

</thead>

<tbody>

@forelse($myUploadedNotes as $note)

<tr>

<td>{{ $note->title }}</td>

<td>{{ $note->description }}</td>

<td>{{ $note->created_at->format('d M Y') }}</td>

<td>
<a href="{{ asset('notes/'.$note->file) }}"
target="_blank"
class="btn btn-info btn-sm">
View
</a>
</td>

<td>
<a href="{{ route('notes.download',$note->id) }}"
class="btn btn-success btn-sm">
Download
</a>
</td>

<td>

<form action="{{ route('notes.destroy',$note->id) }}" method="POST">

@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm">
Delete
</button>

</form>

</td>

</tr>

@empty

<tr>

<td colspan="6" class="text-center text-muted">
No Notes Uploaded
</td>

</tr>

@endforelse

</tbody>

</table>

</div>

</div>

@endsection