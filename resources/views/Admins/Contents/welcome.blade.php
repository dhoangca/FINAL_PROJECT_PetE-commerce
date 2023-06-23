<!DOCTYPE html>
<html>
<head>
  <title>Admin Welcome</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    
    .welcome-container {
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container welcome-container">
    <h1>Welcome to Pet E-commerce Admin Dashboard</h1>
    <p>Please register or log in to access the system.</p>
    <button class="btn btn-primary" onclick="location.href='{{ route('Admins.Register') }}'">Register</button>
    <button class="btn btn-secondary" onclick="location.href='{{ route('Admins.Login') }}'">Log In</button>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
