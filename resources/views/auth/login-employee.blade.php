<!-- Paste content from login-employee.html here -->
 <!--<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Employee Login - Tattva Capital</title>
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
    <h2>Employee Login</h2>
    <form action="#" method="POST">
      <input type="text" name="username" placeholder="Username" required />
      <input type="password" name="password" placeholder="Password" required />
      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Employee Login - Tattva Capital</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #d0e6f9;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .container {
      width: 900px;
      height: 500px;
      background: transparent;
      border-radius: 12px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
      display: flex;
      overflow: hidden;
    }
    .left {
      flex: 1;
      padding: 40px 50px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      background: #2e95f0;
      color: white;
      border-radius: 12px 0 0 12px;
    }
    h2 {
      text-align: center;
      margin-bottom: 30px;
      color: white;
    }
    form input {
      width: 100%;
      padding: 12px;
      margin: 12px 0;
      border-radius: 6px;
      border: none;
      font-size: 16px;
      box-sizing: border-box;
    }
    form button {
      width: 100%;
      padding: 14px;
      background-color: #0d47a1;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 18px;
      cursor: pointer;
      margin-top: 10px;
      transition: background-color 0.3s ease;
    }
    form button:hover {
      background-color: #3474e3;
    }
    .right {
      flex: 1;
      position: relative;
      background-image: url('https://img.freepik.com/premium-vector/user-login-illustration-with-two-people-character_108061-305.jpg?semt=ais_hybrid&w=740');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: right center;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      box-sizing: border-box;
      border-radius: 0 12px 12px 0;
    }
    .logo-on-image {
      font-size: 30px;
      font-weight: bold;
      color: #1a237e;
      text-align: center;
      user-select: none;
      margin-top: 40px; /* moved down slightly */
    }
    @media (max-width: 768px) {
      .container {
        flex-direction: column;
        height: auto;
        width: 90vw;
      }
      .right {
        height: 200px;
        border-radius: 0 0 12px 12px;
      }
      .left {
        border-radius: 12px 12px 0 0;
      }-+
      .logo-on-image {
        font-size: 24px;
        margin-top: 20px;
      }
    }
  </style>
</head>
<body>
  <a href="/" style="
    position: absolute;
    top: 20px;
    left: 30px;
    text-decoration: none;
    background-color: #0d47a1;
    color: #ffffff;
    padding: 8px 16px;
    border-radius: 6px;
    font-weight: bold;
    box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    z-index: 1000;
    font-size: 16px;
    transition: background-color 0.3s ease;
  "
  onmouseover="this.style.backgroundColor='#1565c0'"
  onmouseout="this.style.backgroundColor='#0d47a1'">
    ← Home
  </a>

  <div class="container">
    
    <div class="left">
      <h2>Employee Login</h2>
      <form action="#" method="POST">
        <input type="text" name="username" placeholder="Username" required />
        <input type="password" name="password" placeholder="Password" required />
        <button type="submit">Login</button>
      </form>
    </div>
    <div class="right">
      <div class="logo-on-image">Tattva Capital</div>
    </div>
  </div>
</body>
</html>

