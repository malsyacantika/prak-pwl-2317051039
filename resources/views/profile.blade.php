<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kartu Biodata</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #74ABE2, #5563DE);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .card {
      background: #fff;
      border-radius: 20px;
      padding: 30px;
      text-align: center;
      box-shadow: 0 10px 20px rgba(0,0,0,0.2);
      width: 300px;
    }
    .card img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid #5563DE;
      margin-bottom: 20px;
    }
    .card table {
      margin: auto;
      text-align: left;
    }
    .card td {
      padding: 6px 10px;
    }
    .title {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 15px;
      color: #333;
    }
  </style>
</head>
<body>
  <div class="card">
    <!-- Foto -->
    <img src="/malsya.jpg" alt="Foto Profil">

    <div class="title">Biodata</div>
    <table>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td>{{ $nama }}</td>
      </tr>
      <tr>
        <td>NPM</td>
        <td>:</td>
        <td>{{ $npm }}</td>
      </tr>
      <tr>
        <td>Kelas</td>
        <td>:</td>
        <td>{{ $kelas }}</td>
      </tr>
    </table>
  </div>
</body>
</html>
