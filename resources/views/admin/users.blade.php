@extends('layouts.dashboard')

@section('content')

<h4 class="mb-4">Manage Users</h4>

<div class="card p-4">

<div class="table-responsive">

<table class="table table-bordered table-striped">

<thead>

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Role</th>
<th>Created</th>
<th>Status</th>
<th>Delete</th>
</tr>

</thead>

<tbody>

@forelse($users as $user)

<tr>

<td>{{ $user->id }}</td>

<td>{{ $user->name }}</td>

<td>{{ $user->email }}</td>

<td>{{ ucfirst($user->role) }}</td>

<td>{{ $user->created_at->format('d M Y') }}</td>

<td>

@if($user->status == 1)

<span class="badge bg-success">Active</span>

@else

<span class="badge bg-secondary">Inactive</span>

@endif

</td>

<td>

<form action="{{ route('users.destroy',$user->id) }}" method="POST">

@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm"
onclick="return confirm('Are you sure delete this user?')">

Delete

</button>

</form>

</td>

</tr>

@empty

<tr>

<td colspan="7" class="text-center text-muted">

No Users Found

</td>

</tr>

@endforelse

</tbody>

</table>

</div>

</div>

@endsection