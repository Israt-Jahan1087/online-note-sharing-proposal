@extends('layouts.dashboard')

@section('content')

<h4 class="mb-4">Admin Dashboard</h4>

<div class="row">

<div class="col-md-4">

<div class="card bg-primary text-white p-4 dashboard-card">

<h6>Total Users</h6>

<h2>{{ $users }}</h2>

</div>

</div>


<div class="col-md-4">

<div class="card bg-success text-white p-4 dashboard-card">

<h6>Total Notes</h6>

<h2>{{ $notes }}</h2>

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

<h5 class="mb-3">Recent Notes</h5>

<div class="table-responsive">

<table class="table table-bordered">

<tr>

<th>Title</th>

<th>User</th>

<th>Date</th>

</tr>

@foreach($recentNotes as $note)

<tr>

<td>{{ $note->title }}</td>

<td>{{ $note->user->name }}</td>

<td>{{ $note->created_at->format('d M Y') }}</td>

</tr>

@endforeach

</table>

</div>

</div>

@endsection