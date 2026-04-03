<!DOCTYPE html>
<html>
<head>

<title>Login - Notes System</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background: linear-gradient(135deg,#0d6efd,#6610f2);
height:100vh;
display:flex;
align-items:center;
justify-content:center;
}

.login-card{
width:400px;
border:none;
border-radius:10px;
box-shadow:0 10px 30px rgba(0,0,0,0.2);
}

</style>

</head>

<body>

<div class="card login-card p-4">

<h3 class="text-center mb-4">Login</h3>

<form method="POST" action="{{ route('login') }}">
@csrf

<div class="mb-3">

<label>Email</label>

<input type="email"
name="email"
class="form-control"
value="{{ old('email') }}"
required>

</div>


<div class="mb-3">

<label>Password</label>

<input type="password"
name="password"
class="form-control"
required>

</div>


<div class="form-check mb-3">

<input type="checkbox" name="remember" class="form-check-input">

<label class="form-check-label">Remember Me</label>

</div>


<button class="btn btn-primary w-100">
Login
</button>


<div class="text-center mt-3">

<a href="{{ route('register') }}">
Create Account
</a>

</div>

</form>

</div>

</body>
</html>