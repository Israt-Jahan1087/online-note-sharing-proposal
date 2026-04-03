<!DOCTYPE html>
<html>
<head>

<title>Notes System</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<style>

body{
background:#f4f6f9;
margin:0;
font-family:sans-serif;
}

/* Sidebar */

.sidebar{
width:240px;
height:100vh;
background:#1f2937;
position:fixed;
top:0;
left:0;
padding-top:20px;
transition:0.3s;
}

.sidebar h4{
color:white;
}

.sidebar a{
display:block;
color:#cbd5e1;
padding:12px 20px;
text-decoration:none;
transition:0.3s;
}

.sidebar a:hover{
background:#2563eb;
color:white;
padding-left:28px;
}

.active{
background:#2563eb;
color:white;
}

/* Topbar */

.topbar{
height:60px;
background:white;
box-shadow:0 2px 5px rgba(0,0,0,0.1);
padding:15px 20px;
margin-left:240px;
display:flex;
justify-content:space-between;
align-items:center;
}

/* Content */

.content{
margin-left:240px;
padding:30px;
}

/* Mobile Responsive */

.menu-btn{
display:none;
font-size:20px;
cursor:pointer;
}

@media(max-width:768px){

.sidebar{
left:-240px;
}

.sidebar.show{
left:0;
}

.topbar{
margin-left:0;
}

.content{
margin-left:0;
}

.menu-btn{
display:block;
}
}

.dashboard-card{
border-radius:10px;
transition:0.3s;
cursor:pointer;
}

.dashboard-card:hover{
transform:translateY(-6px);
box-shadow:0 10px 20px rgba(0,0,0,0.2);
}
.upload-card{

border:none;
border-radius:10px;
box-shadow:0 5px 20px rgba(0,0,0,0.1);

}

.upload-card .card-header{

background:#2563eb;
color:white;
font-weight:bold;
}

.upload-card input,
.upload-card textarea,
.upload-card select{

border-radius:6px;
}

.btn-success{

padding:8px 18px;
}

</style>

</head>

<body>

<!-- Sidebar -->

<div class="sidebar" id="sidebar">

<h4 class="text-center mb-4">Notes System</h4>

@if(auth()->user()->role == 'admin')

<a href="/admin/dashboard" class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
<i class="fa fa-home"></i> Dashboard
</a>

<a href="{{ route('admin.users') }}">
<i class="fa fa-users"></i> Manage Users
</a>

<a href="{{ route('admin.notes') }}">
<i class="fa fa-file"></i> Manage Notes
</a>
<a href="/categories" class="{{ request()->is('categories') ? 'active' : '' }}">
<i class="fa fa-folder"></i> Categories
</a>

@endif


@if(auth()->user()->role == 'user')

<a href="/user/dashboard" class="{{ request()->is('user/dashboard') ? 'active' : '' }}">
<i class="fa fa-home"></i> Dashboard
</a>

<a href="{{ route('user.allnotes') }}">
<i class="fa fa-book"></i> All Notes
</a>

<a href="/upload" class="{{ request()->is('upload') ? 'active' : '' }}">
<i class="fa fa-upload"></i> Upload Notes
</a>


@endif

<a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
<i class="fa fa-sign-out"></i> Logout
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
@csrf
</form>

</div>


<!-- Topbar -->

<div class="topbar">

<span class="menu-btn" onclick="toggleMenu()">
<i class="fa fa-bars"></i>
</span>

<div>
<i class="fa fa-user"></i> {{ auth()->user()->name }}
</div>

</div>


<!-- Content -->

<div class="content">

@yield('content')

</div>


<script>

function toggleMenu(){
document.getElementById("sidebar").classList.toggle("show");
}

</script>

</body>
</html>