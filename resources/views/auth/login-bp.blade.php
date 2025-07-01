<!-- Paste content from b-p login.html here -->
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Businness Partner Login - Tattva Capital</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f8fb;
      padding: 40px;
    }
    .login-box {
      max-width: 400px;
      margin: auto;
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }
    h2 {
      text-align: center;
      color: #1a237e;
    }
    input {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 6px;
      border: 1px solid #ccc;
    }
    button {
      width: 100%;
      padding: 12px;
      background-color: #1976d2;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 16px;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <div class="container mt-5">
    <a href="{{ url('/') }}" class="btn btn-primary mb-3">← Home</a>
  </div>
    <h2>Businness Partner Login</h2>
    
    <form action="#" method="POST">
      <input type="text" name="username" placeholder="Username" required />
      <input type="password" name="password" placeholder="Password" required />
      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>
