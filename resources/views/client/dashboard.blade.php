<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Client Dashboard | Tattva Capital</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Laravel Blade Asset Links -->
  <link rel="stylesheet" href="{{ asset('static/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('static/assets/vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('static/assets/css/style.css') }}">
  <link rel="shortcut icon" href="{{ asset('static/assets/images/favicon.png') }}" />

  <style>
    @media print {
      body * { visibility: hidden; }
      #pdf-area, #pdf-area * { visibility: visible; }
      #pdf-area {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        padding: 20px;
        background: white;
      }
      #pdf-area .row {
        display: flex !important;
        justify-content: space-between;
        flex-wrap: wrap;
      }
      #pdf-area #bar-chart-container,
      #pdf-area #pie-chart-container {
        width: 48% !important;
        display: inline-block !important;
        vertical-align: top;
        box-sizing: border-box;
      }
      #pdf-area canvas {
        width: 100% !important;
        height: auto !important;
      }
      .btn, .navbar, .sidebar, .footer { display: none !important; }
      .page-break { page-break-after: always; }
    }
    .card-light-blue { background-color: #ffb866!important; color: white; }
    .card-medium-blue { background-color: #94d5de!important; color: white; }
    .card-dark-blue { background-color: #49efaa!important; color: white; }
  </style>
</head>
<body>
  @php
  $user = \DB::table('users')->where('client_id', $client_data->client_code)->first();
  $clientName = \Illuminate\Support\Str::slug($user->name ?? ($client_data->client_name ?? 'Client'), '_');
@endphp


<script>
  const clientName = "{{ $clientName }}";
</script>


<div class="container-scroller">
  <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex align-items-center justify-content-start px-3 gap-3">
      <span class="navbar-brand text-dark fw-bold fs-4 m-0">Tattva Capital</span>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1 px-3">
      <div class="ms-auto d-flex flex-column align-items-end gap-2">
        <div class="dropdown">
          <button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="downloadDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            📄 Download PDF
          </button>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="downloadDropdown">
            <li><a class="dropdown-item" href="#" onclick="downloadPDFDesktop(); bootstrap.Dropdown.getInstance(document.getElementById('downloadDropdown')).hide();"> 💻 Download for Desktop</a></li>
            <li><a class="dropdown-item" href="#" onclick="downloadPDFMobile(); bootstrap.Dropdown.getInstance(document.getElementById('downloadDropdown')).hide();"> 📱 Download for Mobile</a></li>
          </ul>
        </div>
        <a href="/" class="btn btn-sm btn-primary">← Home</a>
      </div>
    </div>
  </nav>

  <div class="container-fluid page-body-wrapper">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link active" href="/my-portfolio">
            <i class="mdi mdi-view-dashboard-outline menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
      </ul>
    </nav>

    <div class="main-panel">
      <div class="content-wrapper">
        <div id="pdf-area">
          <h4 class="fw-bold text-dark mb-2">Your Portfolio Performance Report</h4>
          <div class="row mb-2">
            <div class="col-12">
              <p class="text-muted">Your ID: <strong>{{ $client_data->client_code ?? 'N/A'}}</strong></p>
              <p class="text-muted">Date: <strong>{{ $client_data->investment_date ?? 'N/A'}}</strong></p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card" style="background:#ffb866">
                <div class="card-body">
                  <p class="mb-4">Total Investment Value</p>
                  <p class="fs-30 mb-2">₹{{ $client_data->total_value?? 'N/A' }}</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card" style="background:#94d5de">
                <div class="card-body">
                  <p class="mb-4">Portfolio Value</p>
                  <p class="fs-30 mb-2">₹{{ $client_data->portfolio_value ?? 'N/A'}}</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card" style="background:#49efaa">
                <div class="card-body">
                  <p class="mb-4">Return %</p>
                  <p class="fs-30 mb-2">{{ $client_data->return_pct ?? 'N/A'}}%</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 grid-margin stretch-card" id="bar-chart-container">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Investment Split</h4>
                  <div style="height: 280px;">
                    <canvas id="barChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card" id="pie-chart-container">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Portfolio Allocation</h4>
                  <div class="d-flex justify-content-center" style="height: 280px;">
                    <canvas id="investmentChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Tattva Capital © 2025</span>
        </div>
      </footer>
    </div>
  </div>
</div>

<script src="{{ asset('static/assets/vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('static/assets/vendors/chart.js/chart.umd.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script src="{{ asset('static/assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('static/assets/js/template.js') }}"></script>

<script>
// (same JS code you provided earlier; I can reformat it here too if needed)
const pieCtx = document.getElementById('investmentChart');
    new Chart(pieCtx, {
      type: 'doughnut',
      data: {
        labels: ['Equity', 'Mutual Funds', 'Real Estate', 'Others'],
        datasets: [{
          data: [
              {{ $client_data->equity ?? 0 }},
              {{ $client_data->mf ?? 0 }},
              {{ $client_data->re ?? 0 }},
              {{ $client_data->others ?? 0 }}
            ],

          backgroundColor: ['#4CAF50', '#2196F3', '#FFC107', '#9C27B0'],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: { position: 'bottom' },
          datalabels: {
            color: '#fff',
            font: { weight: 'bold' },
            formatter: function(value) {
              return '₹' + value.toLocaleString();
            }
          }
        }
      },
      plugins: [ChartDataLabels]
    });

    const barCtx = document.getElementById('barChart');
    new Chart(barCtx, {
      type: 'bar',
      data: {
        labels: ['Equity', 'Mutual Funds', 'Real Estate', 'Others'],
        datasets: [{
          label: '₹ Investment',
          data: [
              {{ $client_data->equity ?? 0 }},
              {{ $client_data->mf ?? 0 }},
              {{ $client_data->re ?? 0 }},
              {{ $client_data->others ?? 0 }}
            ],


          backgroundColor: ['#4CAF50', '#2196F3', '#FFC107', '#9C27B0'],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: { beginAtZero: true }
        }
      }
    });

   function downloadPDF() {
  // Add temporary styles just for PDF
  const barChartContainer = document.getElementById('bar-chart-container');
  const pieChartContainer = document.getElementById('pie-chart-container');

  // Store original styles
  const originalBarStyle = barChartContainer.style.cssText;
  const originalPieStyle = pieChartContainer.style.cssText;

  // Apply fixed styles for better rendering in PDF
  barChartContainer.style.minWidth = '400px';
  barChartContainer.style.maxWidth = '48%';
  pieChartContainer.style.minWidth = '400px';
  pieChartContainer.style.maxWidth = '48%';

  // Resize/re-render charts if needed
  window.dispatchEvent(new Event('resize'));

  // Generate PDF
  const element = document.getElementById('pdf-area');
  const today = new Date();
  const filename = `{{ Str::slug($client_data->client_name ?? 'Client') }}_Report_${today.getFullYear()}-${today.getMonth() + 1}-${today.getDate()}.pdf`;

  const opt = {
    margin: 0.5,
    filename: filename,
    image: { type: 'jpeg', quality: 0.98 },
    html2canvas: { scale: 2, useCORS: true },
    jsPDF: { unit: 'in', format: 'a4', orientation: 'portrait' }
  };

  html2pdf().set(opt).from(element).save().then(() => {
    // Revert back original styles after download
    barChartContainer.style.cssText = originalBarStyle;
    pieChartContainer.style.cssText = originalPieStyle;
  });
}
    function downloadPDFDesktop() {
  adjustChartsForPDF('desktop');

  const element = document.getElementById('pdf-area');
  const opt = {
    margin: 0.5,
    filename: generatePDFFileName(),
    image: { type: 'jpeg', quality: 0.98 },
    html2canvas: { scale: 2, useCORS: true },
    jsPDF: { unit: 'in', format: 'a4', orientation: 'portrait' }
  };

  html2pdf().set(opt).from(element).save().then(() => resetChartStyles());
}

function downloadPDFMobile() {
  adjustChartsForPDF('mobile');

  const element = document.getElementById('pdf-area');
  const opt = {
    margin: 0.5,
    filename: generatePDFFileName(),
    image: { type: 'jpeg', quality: 0.90 },
    html2canvas: { scale: 2, useCORS: true },
    jsPDF: { unit: 'in', format: 'a4', orientation: 'portrait' }
  };

  html2pdf().set(opt).from(element).save().then(() => resetChartStyles());
}

function adjustChartsForPDF(viewType) {
  const pdfArea = document.getElementById('pdf-area');
  const barChart = document.getElementById('barChart');
  const pieChart = document.getElementById('investmentChart');

  // Apply uniform scaling to the entire area
  pdfArea.style.transform = 'scale(0.82)';
  pdfArea.style.transformOrigin = 'top left';
  pdfArea.style.width = '117%'; // helps maintain layout after scaling

  // Resize chart canvas for better fit (esp. for pie chart)
  barChart.style.height = '240px';
  barChart.style.width = '100%';
  pieChart.style.height = '240px';
  pieChart.style.width = '100%';

  window.dispatchEvent(new Event('resize'));
}


function resetChartStyles() {
  const pdfArea = document.getElementById('pdf-area');
  const barChart = document.getElementById('barChart');
  const pieChart = document.getElementById('investmentChart');

  pdfArea.style.transform = '';
  pdfArea.style.transformOrigin = '';
  pdfArea.style.width = '';

  barChart.style.height = '';
  barChart.style.width = '';
  pieChart.style.height = '';
  pieChart.style.width = '';
}



function generatePDFFileName() {
    const today = new Date();
    const dd = String(today.getDate()).padStart(2, '0');
    const mm = String(today.getMonth() + 1).padStart(2, '0');
    const yyyy = today.getFullYear();

    return `${clientName}_${dd}-${mm}-${yyyy}.pdf`;
}



</script>

</body>
</html>
