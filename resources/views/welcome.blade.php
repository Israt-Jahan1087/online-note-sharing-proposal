<!DOCTYPE html>
<html>
<head>

<title>Notes Sharing System</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

.hero{
background: linear-gradient(135deg,#0d6efd,#6610f2);
color:white;
padding:100px 0;
text-align:center;
}

.feature-icon{
font-size:40px;
color:#0d6efd;
margin-bottom:15px;
}

.feature-card{
border:none;
box-shadow:0 4px 15px rgba(0,0,0,0.1);
transition:0.3s;
}

.feature-card:hover{
transform:translateY(-5px);
}

footer{
background:#212529;
color:white;
padding:15px;
text-align:center;
}

</style>

</head>

<body>


<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container">

<a class="navbar-brand fw-bold" href="#">Notes System</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="/login">Login</a>
</li>

<li class="nav-item">
<a class="btn btn-success ms-2" href="/register">Register</a>
</li>

</ul>

</div>

</div>

</nav>


<!-- Hero Section -->

<section class="hero">

<div class="container">

<h1 class="display-4 fw-bold">Online Notes Sharing System</h1>

<p class="lead mt-3">
Upload, Share and Download Study Notes Easily
</p>

<a href="/register" class="btn btn-light btn-lg mt-4">
Get Started
</a>

</div>

</section>


<!-- Features -->

<section class="py-5">

<div class="container">

<div class="text-center mb-5">

<h2>System Features</h2>

<p class="text-muted">Everything you need for sharing study materials</p>

</div>

<div class="row text-center g-4">


<div class="col-md-4">

<div class="card feature-card p-4">

<i class="fa-solid fa-upload feature-icon"></i>

<h4>Upload Notes</h4>

<p class="text-muted">
Students can upload study materials quickly.
</p>

</div>

</div>


<div class="col-md-4">

<div class="card feature-card p-4">

<i class="fa-solid fa-download feature-icon"></i>

<h4>Download Notes</h4>

<p class="text-muted">
Access shared notes anytime easily.
</p>

</div>

</div>


<div class="col-md-4">

<div class="card feature-card p-4">

<i class="fa-solid fa-magnifying-glass feature-icon"></i>

<h4>Search Notes</h4>

<p class="text-muted">
Find notes instantly using smart search.
</p>

</div>

</div>


</div>

</div>

</section>


<!-- Footer -->

<footer>

© 2026 Notes Sharing System

</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>