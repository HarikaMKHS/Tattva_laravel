<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Credentials</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    form {
      margin-top: 20px;
    }
    .hidden {
      display: none;
    }
    input {
      margin-bottom: 10px;
      display: block;
    }
  </style>
</head>
<body>
  <h2>Select Role</h2>
  <select id="roleSelect">
    <option value="">-- Select Role --</option>
    <option value="client">Client</option>
    <option value="employee">Employee</option>
    <option value="partner">Business Partner</option>
  </select>

  <!-- Client Form -->
  <form method="POST" action="/admin/register-user">
  @csrf
  <h3>Register Client</h3>
  <input type="text" name="client_id" placeholder="Client ID" required>
  <input type="text" name="name" placeholder="Name" required>
  <input type="email" name="email" placeholder="Email" required>
  <input type="text" name="username" placeholder="Username" required>
  <input type="password" name="password" placeholder="Password" required>
  <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
  <button type="submit">Register</button>
</form>
@if(session('success'))
  <p style="color: green;">{{ session('success') }}</p>
@endif

  <!-- Employee Form -->
  <form id="employeeForm" class="hidden">
    <h3>Register Employee</h3>
    <input type="text" id="empName" placeholder="Name" required>
    <input type="email" id="empEmail" placeholder="Email" required>
    <input type="text" id="empUsername" placeholder="Username" required>
    <input type="password" id="empPassword" placeholder="Password" required>
    <input type="password" id="empConfirmPassword" placeholder="Confirm Password" required>
    <button type="button" onclick="registerEmployee()">Register</button>
  </form>

  <script>
    const roleSelect = document.getElementById("roleSelect");
    const clientForm = document.getElementById("clientForm");
    const employeeForm = document.getElementById("employeeForm");

    roleSelect.addEventListener("change", () => {
      const selectedRole = roleSelect.value;
      clientForm.classList.add("hidden");
      employeeForm.classList.add("hidden");

      if (selectedRole === "client") {
        clientForm.classList.remove("hidden");
      } else if (selectedRole === "employee") {
        employeeForm.classList.remove("hidden");
      } else if (selectedRole === "partner") {
        window.location.href = "https://www.google.com";
      }
    });

    /*function registerClient() {
      const password = document.getElementById("clientPassword").value;
      const confirm = document.getElementById("clientConfirmPassword").value;

      if (password !== confirm) {
        alert("Passwords do not match!");
        return;
      }

      const clientData = {
        role: "client",
        clientId: document.getElementById("clientId").value,
        name: document.getElementById("clientName").value,
        email: document.getElementById("clientEmail").value,
        username: document.getElementById("clientUsername").value,
        password: password
      };

      fetch("https://tattva-capital.onrender.com/register-user", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(clientData)
      })
      .then(res => res.json())
      .then(data => alert(data.message || "Client registered!"))
      .catch(err => alert("Error: " + err));
    }

    function registerEmployee() {
      const password = document.getElementById("empPassword").value;
      const confirm = document.getElementById("empConfirmPassword").value;

      if (password !== confirm) {
        alert("Passwords do not match!");
        return;
      }

      const empData = {
        role: "employee",
        name: document.getElementById("empName").value,
        email: document.getElementById("empEmail").value,
        username: document.getElementById("empUsername").value,
        password: password
      };

      fetch("https://tattva-capital.onrender.com/register-user", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(empData)
      })
      .then(res => res.json())
      .then(data => alert(data.message || "Employee registered!"))
      .catch(err => alert("Error: " + err));
    }*/
  </script>
</body>
</html>
<!-- Paste content from admin.html here -->