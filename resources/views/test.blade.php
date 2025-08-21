<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quota PKL</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #fff;
      padding: 20px;
      text-align: center;
    }
    .quota-container {
      max-width: 400px;
      margin: auto;
      border-radius: 15px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      padding: 20px;
    }
    .quota-header {
      display: flex;
      justify-content: space-between;
      font-size: 14px;
      margin-bottom: 8px;
      color: #555;
    }
    .progress-bar {
      background: #f0f0f0;
      border-radius: 20px;
      overflow: hidden;
      height: 20px;
      margin-bottom: 20px;
      position: relative;
    }
    .progress {
      background: linear-gradient(90deg, #FFD700, #FFC300);
      height: 100%;
      width: 60%; /* ubah sesuai persentase pemakaian */
    }
    .progress-label {
      position: absolute;
      left: 10px;
      top: 0;
      bottom: 0;
      display: flex;
      align-items: center;
      font-size: 12px;
      font-weight: bold;
      color: #000;
    }
    .progress-total {
      position: absolute;
      right: 10px;
      top: 0;
      bottom: 0;
      display: flex;
      align-items: center;
      font-size: 12px;
      font-weight: bold;
      color: #555;
    }
    .quota-stats {
      display: flex;
      justify-content: space-between;
      margin-top: 10px;
    }
    .stat {
      flex: 1;
      text-align: center;
    }
    .stat-value {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 5px;
    }
    .stat-label {
      font-size: 12px;
      color: #666;
    }
  </style>
</head>
<body>
  <div class="quota-container">
    <div class="quota-header">
      <span>Remaining Quota</span>
      <span style="color:red; cursor:pointer;">See Details</span>
    </div>
    <div class="progress-bar">
      <div class="progress" style="width: 40%;"></div>
      <div class="progress-label">10 Kuota</div>
      <div class="progress-total">25 Kuota</div>
    </div>
    <div class="quota-stats">
      <div class="stat">
        <div class="stat-value">25</div>
        <div class="stat-label">Jumlah Kuota PKL</div>
      </div>
      <div class="stat">
        <div class="stat-value">15</div>
        <div class="stat-label">Kuota Terpenuhi</div>
      </div>
      <div class="stat">
        <div class="stat-value">10</div>
        <div class="stat-label">Sisa Kuota</div>
      </div>
    </div>
  </div>
</body>
</html>
