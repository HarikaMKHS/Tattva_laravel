<!-- Paste content from retirement.html here -->
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Retirement Calculator</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      min-height: 100vh;
      background: 
        linear-gradient(rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.3)),
        url('https://media.istockphoto.com/id/2043931633/photo/shot-of-a-joyful-senior-couple-enjoying-a-road-trip.jpg?b=1&s=612x612&w=0&k=20&c=_QojOGhyZZ_MQxoXvrmGbhM_PJQvugLhQ3ITtkoe3wQ=')
        no-repeat center center fixed;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: flex-start;
      gap: 30px;
      padding: 30px;
      width: 100%;
      max-width: 1200px;
    }

    .calculator {
      background: #b3dcf9;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 500px;
      color: #2c3e50;
    }

    .result-box {
  background: #b3dcf9;
  border-radius: 12px;
  box-shadow: 0 8px 20px rgba(0,0,0,0.1);
  width: 100%;
  max-width: 500px;
  color: #2c3e50;
  text-align: center;
  height: auto;
  overflow: hidden; /* Prevent overflow from chart */
  padding: 0; /* Remove default padding */
}


    h2 {
      text-align: center;
      color: #2c3e50;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border-radius: 6px;
      border: 1px solid #ccc;
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: #2ecc71;
      color: white;
      border: none;
      border-radius: 6px;
      margin-top: 20px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #27ae60;
    }

    .result {
      margin-top: 20px;
      background: #ecf0f1;
      padding: 15px;
      border-radius: 8px;
      font-weight: bold;
      text-align: center;
      color: #2c3e50;
    }

    .back-button {
      display: inline-block;
      margin-bottom: 20px;
      background-color: #ffffff;
      color: #0d47a1;
      text-decoration: none;
      padding: 8px 14px;
      border-radius: 6px;
      font-weight: bold;
      border: 2px solid #0d47a1;
      transition: background-color 0.3s;
    }

    .back-button:hover {
      background-color: #e3f2fd;
    }

    .progress-container {
      width: 100%;
      background-color: #ecf0f1;
      border-radius: 10px;
      overflow: hidden;
      margin-top: 15px;
      height: 24px;
    }

    #progressBar {
      height: 100%;
      width: 0%;
      background-color: #2ecc71;
      text-align: center;
      line-height: 24px;
      color: white;
      font-weight: bold;
      transition: width 0.5s ease-in-out;
    }

    #retirementChart {
      width: 100% !important;
      max-width: 300px;
      height: auto !important;
      margin: 20px auto 0;
      display: block;
    }

    .result-inner {
  padding: 35px;
}

  </style>
</head>
<body>
  <div class="container">
    <div class="calculator" id="calculatorBox">
      <a href="{{ url('/') }}"  class="back-button">← Back</a>
      <h2>Retirement Calculator</h2>

      <label for="currentAge">Current Age</label>
      <input type="number" id="currentAge" />

      <label for="retirementAge">Retirement Age</label>
      <input type="number" id="retirementAge" />

      <label for="currentSavings">Current Savings (₹)</label>
      <input type="number" id="currentSavings" />

      <label for="monthlyContribution">Monthly Contribution (₹)</label>
      <input type="number" id="monthlyContribution" />

      <label for="annualReturn">Expected Annual Return (%)</label>
      <input type="number" step="0.01" id="annualReturn" />

      <button onclick="calculateRetirement()">Calculate</button>
    </div>

    <div class="result-box" id="resultBoxSection">
  <div class="result-inner">
    <div class="result" id="result">Estimate your retirement savings.</div>

    <!-- Progress bar -->
    <div class="progress-container">
      <div id="progressBar"></div>
    </div>

    <!-- Pie chart -->
    <canvas id="retirementChart"></canvas>
  </div>
</div>

  </div>

  <script>
    let chartInstance = null;

    function calculateRetirement() {
      const currentAge = parseInt(document.getElementById("currentAge").value);
      const retirementAge = parseInt(document.getElementById("retirementAge").value);
      const currentSavings = parseFloat(document.getElementById("currentSavings").value);
      const monthlyContribution = parseFloat(document.getElementById("monthlyContribution").value);
      const annualReturn = parseFloat(document.getElementById("annualReturn").value) / 100;

      const resultBox = document.getElementById("result");
      const progressBar = document.getElementById("progressBar");

      if (
        isNaN(currentAge) || isNaN(retirementAge) || isNaN(currentSavings) ||
        isNaN(monthlyContribution) || isNaN(annualReturn) || currentAge >= retirementAge
      ) {
        resultBox.innerText = "Please enter valid inputs and ensure Retirement Age > Current Age.";
        progressBar.style.width = "0%";
        progressBar.innerText = "";
        if (chartInstance) {
          chartInstance.destroy();
        }
        return;
      }

      const yearsToInvest = retirementAge - currentAge;
      const monthsToInvest = yearsToInvest * 12;
      const monthlyReturn = annualReturn / 12;

      let futureValue = currentSavings * Math.pow(1 + monthlyReturn, monthsToInvest);
      for (let i = 1; i <= monthsToInvest; i++) {
        futureValue += monthlyContribution * Math.pow(1 + monthlyReturn, monthsToInvest - i);
      }

      const formattedValue = futureValue.toFixed(2);
      resultBox.innerText = "Total Savings by Retirement: ₹" + formattedValue;

      // Progress bar update
      const maxGoal = 10000000; // ₹1 Crore goal
      const progress = Math.min((futureValue / maxGoal) * 100, 100).toFixed(2);
      progressBar.style.width = progress + "%";
      progressBar.innerText = progress + "%";

      // Pie chart data
      const totalContributed = currentSavings + (monthlyContribution * monthsToInvest);
      const totalGrowth = futureValue - totalContributed;
      const ctx = document.getElementById("retirementChart").getContext("2d");

      if (chartInstance) {
        chartInstance.destroy();
      }

      chartInstance = new Chart(ctx, {
        type: "pie",
        data: {
          labels: ["Your Contributions", "Estimated Growth"],
          datasets: [{
            data: [totalContributed, totalGrowth],
            backgroundColor: ["#3498db", "#2ecc71"]
          }]
        },
        options: {
          responsive: true,
          plugins: {
            legend: {
              position: 'bottom'
            },
            title: {
              display: true,
              text: 'Retirement Portfolio Breakdown'
            }
          }
        }
      });

      // 🔄 Match height of result box to calculator box
      const calculatorBox = document.getElementById("calculatorBox");
      const resultBoxSection = document.getElementById("resultBoxSection");
      resultBoxSection.style.height = calculatorBox.offsetHeight + "px";
    }
  </script>
</body>
</html>
