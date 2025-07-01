<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Client Login - Tattva Capital</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      display: flex;
      height: 100vh;
      background: radial-gradient(circle at center, #0a1e3a 0%, #0d47a1 100%);
      color: white;
    }

    .left-panel {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 42px;
      font-weight: bold;
      text-align: center;
      text-shadow: 1px 1px 4px rgba(0,0,0,0.4);
    }

    .separator {
      width: 2px;
      height: 60%;
      align-self: center;
      background-color: #ffffff;
      opacity: 0.2;
    }

    .right-panel {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-box {
      width: 100%;
      max-width: 400px;
      background: rgb(144, 192, 248);
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
      border: 1px solid #ccc;
      color: #2d2f3a;
      text-align: center;
    }

    .login-box img {
      width: 50px;
      height: 50px;
      margin-bottom: 16px;
    }

    .login-box h2 {
      color: #1a237e;
      margin-bottom: 24px;
    }

    .login-box input[type="text"],
    .login-box input[type="password"],
    .login-box input[type="email"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 16px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }

    .login-box button {
      width: 100%;
      padding: 12px;
      background-color: #1976d2;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 15px;
      margin-bottom: 10px;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .login-box button:hover {
      background-color: #0d47a1;
      transform: translateY(-2px);
    }

    #forgotForm, #otpSection {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="left-panel">
    <div style="position: absolute; top: 20px; left: 30px;">
      <a href="/" style="text-decoration: none; background-color: #ffffff; color: #0d47a1; padding: 5px 13px; font-size: 16px; border-radius: 6px; font-weight: bold; box-shadow: 0 2px 6px rgba(0,0,0,0.2); transition: background-color 0.3s;"
         onmouseover="this.style.backgroundColor='#e3f2fd'" 
         onmouseout="this.style.backgroundColor='#ffffff'">
        ⬅ Home
      </a>
    </div>
    Tattva Capital
  </div>

  <div class="separator"></div>

  <div class="right-panel">
    <div class="login-box">
      <img src="https://cdn-icons-png.flaticon.com/512/3064/3064197.png" alt="Login Icon">
      <h2>Client Login</h2>

      {{-- Laravel-form compatible login --}}
      <form method="POST" action="{{ url('/login') }}">
        @csrf
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Login</button>
        @if(session('error'))
            <div style="color: red; margin-top: 10px;">{{ session('error') }}</div>
          @endif

        <button type="button" onclick="showForgotForm()">Forgot Password?</button>

        @if ($errors->any())
          <div style="color: red; margin-top: 10px;">
            @foreach ($errors->all() as $error)
              <p>{{ $error }}</p>
            @endforeach
          </div>
        @endif

        {{-- Forgot Password Section (optional, can still talk to Render API) --}}
        <div id="forgotForm" style="display:none;">
          <input type="email" id="forgotEmail" placeholder="Enter your email">
          <button type="button" onclick="sendOTP()">Send OTP</button>

          <div id="otpSection" style="display:none;">
            <input type="text" id="otpInput" placeholder="Enter OTP">
            <input type="password" id="newPass" placeholder="New Password">
            <input type="password" id="confirmPass" placeholder="Confirm Password">
            <button type="button" onclick="resetPassword()">Confirm</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <script>
    const BACKEND_URL = "http://127.0.0.1:8000";  // ✅ Deployed backend

    function showForgotForm() {
      document.getElementById("forgotForm").style.display = "block";
    }

    function sendOTP() {
      const email = document.getElementById("forgotEmail").value;
      fetch(`${BACKEND_URL}/send-otp`, {
  method: "POST",
  headers: { "Content-Type": "application/json" },
  body: JSON.stringify({ email })
})
.then(async res => {
  if (!res.ok) {
    const errorText = await res.text(); // helpful for debugging
    throw new Error("Server error: " + errorText);
  }
  return res.json();
})
.then(data => {
  if (data.success) {
    alert("OTP sent to your email!");
    document.getElementById("otpSection").style.display = "block";
  } else {
    alert(data.message);
  }
})
.catch(err => {
  alert("Failed to send OTP: " + err.message);
});
    }

    function resetPassword() {
      const email = document.getElementById("forgotEmail").value;
      const enteredOTP = document.getElementById("otpInput").value;
      const newPass = document.getElementById("newPass").value;
      const confirmPass = document.getElementById("confirmPass").value;

      if (newPass !== confirmPass) {
        alert("Passwords do not match!");
        return;
      }

      fetch(`${BACKEND_URL}/reset-password`, {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
              email,
              otp: enteredOTP,
              new_password: newPass,
              new_password_confirmation: confirmPass
            })

      })
      .then(res => res.json())
      .then(data => {
        if (data.success) {
          alert("Password updated!");
          location.reload();
        } else {
          alert(data.message);
        }
      })
      .catch(err => {
        alert("Failed to reset password: " + err.message);
      });
    }
  </script>
</body>
</html>
