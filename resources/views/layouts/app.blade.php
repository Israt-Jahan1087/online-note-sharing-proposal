<!DOCTYPE html>
<html>
<head>

<title>Note Sharing System</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container">

<a class="navbar-brand" href="#">Notes System</a>

<ul class="navbar-nav ms-auto">

<li class="nav-item">

<a class="nav-link"
href="#"
onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

Logout

</a>

<form id="logout-form"
action="{{ route('logout') }}"
method="POST"
class="d-none">

@csrf

</form>

</li>

</ul>

</div>

</nav>


<!-- Main Content -->

<div class="container mt-4">

@yield('content')

</div>

</body>
</html>