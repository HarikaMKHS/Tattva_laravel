<!-- Paste content from sip.html here -->
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <title>SIP Calculator</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: url('{{ asset('images/sipcc.jpg') }}') no-repeat center center fixed;
      background-size: cover;
      color: #ffffff;
    }

    h1 {
      text-align: center;
      font-size: 36px;
      margin: 10px 0 -90px;
      color: #ffd700;
      text-shadow: 2px 2px 5px #000;
    }

    .container {
      display: flex;
      justify-content: center;
      gap: 40px;
      flex-wrap: wrap;
      padding: 30px;
    }

    .calculator, .chart-section {
      background: rgba(0, 0, 0, 0.7);
      padding: 30px;
      border-radius: 12px;
      border: 2px solid #ffffff;
      box-shadow: 0 0 25px rgba(255, 255, 255, 0.3);
      width: 400px;
      max-width: 90%;
    }

    .calculator label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
      text-align: left;
    }

    input[type="number"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border-radius: 6px;
      border: 1px solid #ccc;
    }

    button {
      padding: 12px 24px;
      background-color: #00b894;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
      width: 100%;
    }

    button:hover {
      background-color: #019875;
    }

    .result {
      margin-top: 20px;
      padding: 15px;
      border: 2px solid #00cec9;
      border-radius: 8px;
      background-color: rgba(0, 150, 136, 0.3);
      color: #fff;
      font-size: 16px;
    }

    .quote {
      margin-top: 20px;
      font-style: italic;
      font-size: 18px;
      color: #81ecec;
    }

    .chart-section canvas {
      margin-top: 20px;
    }

    .legend {
      margin-top: 20px;
      font-size: 16px;
    }

    .legend div {
      margin-bottom: 8px;
    }

    .legend span {
      display: inline-block;
      width: 12px;
      height: 12px;
      margin-right: 8px;
      vertical-align: middle;
    }
    .back-button {
      display: inline-block;
      margin: 40px 0 20px 30px;
      background-color: #ffd700;
      color: #000;
      padding: 10px 20px;
      border-radius: 6px;
      text-decoration: none;
      font-weight: bold;
      box-shadow: 2px 2px 6px rgba(0,0,0,0.3);
      transition: background-color 0.3s ease;
    }

    .back-button:hover {
      background-color: #e6c200;
    }

    /* @media (max-width: 850px) {
      .container {
        flex-direction: column;
        align-items: center;
      }
    } */
  </style>
</head>
<body>
  <!-- Load shared header -->
  <!-- <div id="header-placeholder"></div> -->

  <h1>SIP Calculator</h1>
  <a href="{{ url('/') }}"  class="back-button">← Back</a>
  <div class="container">
    <!-- Left: Calculator Form -->
    <div class="calculator">
      <label for="monthlyInvestment">Monthly Investment (₹):</label>
      <input type="number" id="monthlyInvestment" required />

      <label for="annualReturn">Expected Annual Return Rate (%):</label>
      <input type="number" id="annualReturn" step="0.1" max="35" required />

      <label for="years">Time Period (Years):</label>
      <input type="number" id="years" required />

      <button onclick="calculateSIP()">Calculate SIP</button>

      <div class="quote" id="quote"></div>
    </div>

    <!-- Right: Chart and Results -->
    <div class="chart-section">
      <p style="text-align: center; font-size: 18px; color: #ffd700;">
        The total value of your investment after <span id="year-label">X</span> years will be:
      </p>
      <h2 style="text-align: center; font-size: 32px;" id="totalValue">₹0</h2>

      <canvas id="sipChart" width="300" height="300"></canvas>

      <div class="legend">
        <div><span style="background-color: #ff6b00;"></span> <strong>Invested Amount:</strong> ₹<span id="legend-invested">0</span></div>
        <div><span style="background-color: #576eff;"></span> <strong>Est. Returns:</strong> ₹<span id="legend-gain">0</span></div>
      </div>
    </div>
  </div>

  <script>
    let sipChart = null;

    function calculateSIP() {
      const P = parseFloat(document.getElementById('monthlyInvestment').value);
      const r = parseFloat(document.getElementById('annualReturn').value) / 100 / 12;
      const annualReturn = parseFloat(document.getElementById('annualReturn').value);
if (annualReturn > 35) {
  alert("Annual return rate must not exceed 35%");
  return;
}

      const n = parseFloat(document.getElementById('years').value) * 12;
      const years = parseFloat(document.getElementById('years').value);

      if (isNaN(P) || isNaN(r) || isNaN(n)) {
        alert("Please enter all values correctly.");
        return;
      }

      const amount = P * ((Math.pow(1 + r, n) - 1) * (1 + r)) / r;
      const invested = P * n;
      const gain = amount - invested;

      document.getElementById('totalValue').innerText = `₹${amount.toLocaleString()}`;
      document.getElementById('legend-invested').innerText = invested.toLocaleString();
      document.getElementById('legend-gain').innerText = gain.toLocaleString();
      document.getElementById('year-label').innerText = years;
      document.getElementById('quote').innerText = `"An investment in knowledge pays the best interest." – Benjamin Franklin`;

      const ctx = document.getElementById('sipChart').getContext('2d');
      if (sipChart) sipChart.destroy();

      sipChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          labels: ['Invested Amount', 'Estimated Returns'],
          datasets: [{
            data: [invested, gain],
            backgroundColor: ['#ff6b00', '#576eff'],
            borderColor: ['#ffffff', '#ffffff'],
            borderWidth: 2
          }]
        },
        options: {
          cutout: '70%',
          plugins: {
            legend: { display: false },
            tooltip: {
              callbacks: {
                label: function(context) {
                  return `${context.label}: ₹${context.raw.toLocaleString()}`;
                }
              }
            }
          }
        }
      });
    }
  </script>

  <script>
    fetch('header.html')
      .then(res => res.text())
      .then(data => document.getElementById('header-placeholder').innerHTML = data)
      .catch(err => console.error('Header load error:', err));
  </script>
</body>
</html>
