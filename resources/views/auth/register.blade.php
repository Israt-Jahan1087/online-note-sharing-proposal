<!DOCTYPE html>
<html>
<head>

<title>Register - Notes System</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background: linear-gradient(135deg,#667eea,#764ba2);
height:100vh;
display:flex;
align-items:center;
justify-content:center;
}
.register-card{
width:420px;
border:none;
border-radius:10px;
box-shadow:0 10px 30px rgba(0,0,0,0.2);
}

</style>

</head>

<body>

<div class="card register-card p-4">

<h3 class="text-center mb-4">Create Account</h3>

<form method="POST" action="{{ route('register') }}">
@csrf

<div class="mb-3">

<label>Name</label>

<input type="text"
name="name"
class="form-control"
value="{{ old('name') }}"
required>

</div>


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


<div class="mb-3">

<label>Confirm Password</label>

<input type="password"
name="password_confirmation"
class="form-control"
required>

</div>


<button class="btn btn-success w-100">
Register
</button>


<div class="text-center mt-3">

Already have an account?

<a href="{{ route('login') }}">
Login
</a>

</div>

</form>

</div>

</body>
</html>