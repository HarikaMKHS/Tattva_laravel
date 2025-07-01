<!-- Paste content from ARform.html here -->
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Book Appointment</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(rgba(255,255,255,0.2), rgba(255,255,255,0.2)),
                  url('assets/img/philo1.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Segoe UI', sans-serif;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    .appointment-container {
        width: 100%;
        max-width: 600px;
        background-color: #b0b0b0; /* medium gray */
        padding: 40px 30px;
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      }

      .btn-primary,
      .btn-home {
        background-color: #f57c00;
        color: white;
        border: none;
      }

      .btn-primary:hover,
      .btn-home:hover {
        background-color: #e65100;
      }


    h2 {
      text-align: center;
      color: #273d4e;
      margin-bottom: 25px;
      font-weight: 600;
    }

    .form-label {
      font-weight: 500;
    }

    
  </style>
</head>
<body>

  <div class="appointment-container">
    <h2>Book an Appointment</h2>
    <form action="mail.php" method="POST">
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Age</label>
        <input type="number" class="form-control" name="age" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Mobile</label>
        <input type="tel" class="form-control" name="mobile" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email" required>
      </div>
      <div class="row mb-3">
  <div class="col-md-6">
    <label class="form-label">Preferred Date</label>
    <input type="date" class="form-control" name="date" required>
  </div>
  <div class="col-md-6">
    <label class="form-label">Preferred Time</label>
    <input type="time" class="form-control" name="time" required>
  </div>
</div>

      <div class="mb-3">
        <label class="form-label">Mode of Meeting</label><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="mode" id="online" value="Online" required>
          <label class="form-check-label" for="online">Online</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="mode" id="offline" value="Offline" required>
          <label class="form-check-label" for="offline">Offline</label>
        </div>
      </div>
      <div class="text-center d-flex justify-content-center gap-3 mt-4">
  <button type="submit" class="btn btn-primary px-4">Submit</button>
  <a href="/" class="btn btn-home px-4">Go to Home</a>
</div>

    </form>
  </div>

</body>
</html>
