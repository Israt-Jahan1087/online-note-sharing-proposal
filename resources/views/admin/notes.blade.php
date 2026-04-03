@extends('layouts.dashboard')

@section('content')

<h4 class="mb-4">Manage Notes</h4>

<div class="card p-4">

<div class="table-responsive">

<table class="table table-bordered table-striped">

<tr>
<th>ID</th>
<th>Title</th>
<th>Description</th>
<th>File</th>
<th>User</th>
<th>Status</th>
<th>Date</th>
<th>Action</th>
<th>Delete</th>
</tr>

@forelse($notes as $note)

<tr>

<td>{{ $note->id }}</td>

<td>{{ $note->title }}</td>

<td>{{ $note->description }}</td>

<td>

<a href="{{ asset('notes/'.$note->file) }}" target="_blank" class="btn btn-info btn-sm">
View
</a>

</td>

<td>{{ $note->user_id }}</td>

<td>

@if($note->status == 'approved')

<span class="badge bg-success">Approved</span>

@elseif($note->status == 'rejected')

<span class="badge bg-danger">Rejected</span>

@else

<span class="badge bg-warning">Pending</span>

@endif

</td>

<td>{{ $note->created_at->format('d M Y') }}</td>

<td>

<a href="{{ route('admin.approve',$note->id) }}"
class="btn btn-success btn-sm">
Approve
</a>

<a href="{{ route('admin.reject',$note->id) }}"
class="btn btn-warning btn-sm">
Reject
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
<td colspan="9" class="text-center">No Notes Found</td>
</tr>

@endforelse

</table>

</div>

</div>

@endsection