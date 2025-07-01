<!-- Paste content from coming-soon.html here -->
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Coming Soon</title>
  <link rel="stylesheet" href="main.css" />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">
  <script>
  if (window.location.pathname === '/careers') {
    window.location.replace('/coming-soon.html');
  }
</script>

  <style>
    body, html {
      height: 100%;
      margin: 0;
      font-family: var(--default-font);
    }

    .coming-soon {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      height: 100vh;
      padding: 0 20px;
      background: linear-gradient(135deg, var(--accent-color), var(--heading-color));
      color: var(--contrast-color);
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .coming-soon h1 {
      font-size: 64px;
      font-family: var(--heading-font);
      color: var(--contrast-color);
      margin-bottom: 10px;
      text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
    }

    .coming-soon p {
      font-size: 20px;
      color: var(--contrast-color);
      margin-bottom: 30px;
      max-width: 600px;
      line-height: 1.5;
    }

    .coming-soon .btn {
      background-color: var(--contrast-color);
      color: var(--accent-color);
      padding: 12px 30px;
      border-radius: 4px;
      text-transform: uppercase;
      font-weight: bold;
      font-size: 14px;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s, color 0.3s;
      z-index: 2;
    }

    .coming-soon .btn:hover {
      background-color: color-mix(in srgb, var(--contrast-color), transparent 15%);
      color: var(--heading-color);
    }

    .gear {
      position: absolute;
      width: 80px;
      height: 80px;
      background: url('https://cdn-icons-png.flaticon.com/512/126/126472.png') no-repeat center center;
      background-size: contain;
      animation: rotate 5s linear infinite;
      opacity: 0.2;
    }

    .gear.g1 {
      top: 20px;
      left: 20px;
      width: 60px;
      height: 60px;
      animation-duration: 6s;
    }

    .gear.g2 {
      bottom: 20px;
      right: 20px;
      width: 100px;
      height: 100px;
      animation-duration: 10s;
    }

    @keyframes rotate {
      from {
        transform: rotate(0deg);
      }
      to {
        transform: rotate(360deg);
      }
    }
  </style>
</head>
<body>
  <section class="coming-soon">
    <!-- Animated Gears -->
    <div class="gear g1"></div>
    <div class="gear g2"></div>

    <!-- Main Content -->
    <h1>Coming Soon</h1>
    <p>We're building something powerful in the background.<br>Check back soon!</p>
    <a href="/" class="btn">Go to Homepage</a>
  </section>
</body>
</html>
