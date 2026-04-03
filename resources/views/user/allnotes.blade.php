@extends('layouts.dashboard')

@section('content')

<div class="container-fluid">

<div class="d-flex justify-content-between align-items-center mb-4">
<h4 class="mb-0">All Notes</h4>
</div>

<div class="card shadow-sm">

<div class="card-body">

<div class="table-responsive">

<table class="table table-striped table-hover table-bordered align-middle">

<thead>

<tr>
<th>Title</th>
<th>Description</th>
<th>Date</th>
<th>Status</th>
<th>View</th>
<th>Download</th>
</tr>

</thead>

<tbody>

@foreach($notes as $note)

<tr>

<td>{{ $note->title }}</td>

<td>{{ $note->description }}</td>

<td>{{ $note->created_at->format('d M Y') }}</td>

<td>

@if($note->status == 'approved')
<span class="badge bg-success">Approved</span>

@elseif($note->status == 'rejected')
<span class="badge bg-danger">Rejected</span>

@else
<span class="badge bg-warning">Pending</span>
@endif

</td>

<td>
<a href="{{ asset('notes/'.$note->file) }}" target="_blank" class="btn btn-info btn-sm">
View
</a>
</td>

<td>
<a href="{{ route('user.download',$note->id) }}" class="btn btn-success btn-sm">
Download
</a>
</td>

</tr>

@endforeach

</tbody>

</table>

</div>

@if(method_exists($notes,'links'))

<div class="mt-3 d-flex justify-content-center">

{{ $notes->links() }}

</div>

@endif

</div>

</div>

</div>

@endsection
