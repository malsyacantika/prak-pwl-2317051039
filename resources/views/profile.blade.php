<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href=""
      rel="stylesheet"
    />
    <title></title>
     <style>
      body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        background: #f4f6f8;
        margin: 0;
        padding: 0;
        display: flex;
        height: 100vh;
        justify-content: center;
        align-items: center;
      }

      .card {
        background: #fff;
        padding: 25px 30px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        width: 150px;
      }

      h1 {
        margin-bottom: 20px;
        font-size: 22px;
        color: #333;
        text-align: center;
      }

      table {
        width: 100%;
        border-collapse: collapse;
      }

      td {
        padding: 10px 0;
        border-bottom: 1px solid #eee;
      }

      td:first-child {
        font-weight: 600;
        color: #555;
        width: 100px;
      }

      td:last-child {
        color: #333;
      }

      .profile-img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        margin: 0 auto 15px auto; /* Tengah + jarak bawah */
        border: 3px solid #eee;
        display: block; /* Biar bisa pakai margin auto */
      }
    </style>
  </head>
  <body>
      <div class="card">
        <img src="{{ asset('img/profile.png') }}" alt="Foto Profil" class="profile-img"/>
        <table>
            <tr>
                <td>Nama : </td>
                <td>{{ $nama }}</td>
            </tr>
            <tr>
                <td>NPM : </td>
                <td>{{ $npm }}</td>
            </tr>
            <tr>
                <td>Kelas : </td>
                <td>{{ $kelas }}</td>
            </tr>
        </table>
    </div>
  </body>
</html>
