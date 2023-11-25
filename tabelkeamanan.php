<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Keamanan - Sleman</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style>
    .navbar-custom {
      background-color: #1A5276;
      border-color: #2e6da4;
      color: #ffffff;
    }

    .navbar-custom .navbar-brand,
    .navbar-custom .navbar-nav>li>a {
      color: #ffffff;
    }

    .navbar-custom .navbar-toggle {
      border-color: #ffffff;
    }

    .navbar-center {
      display: flex;
      justify-content: center;
    }

    .container-box {
      border: 2px solid #ddd;
      padding: 20px;
      margin-top: 20px;
      margin-bottom: 20px;
      border-radius: 10px;
      height: 400px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-default navbar-custom navbar-center">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SafeZoneSlemanGIS</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="responsi.php">Beranda</a></li>
      <li><a href="index.php">Sebaran Fasilitas</a></li>
      <li><a href="container.php">Jenis Fasilitas</a></li>
      <li><a href="data.php">Grafis & Tabel</a></li>
    </ul>
  </div>
</nav>

<div class="container-box">


<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "kamling";
$table = "keamanan3";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Sekarang Anda memiliki koneksi ke database, dan Anda dapat melakukan operasi seperti SELECT pada tabel.

// Contoh SELECT data dari tabel dan tampilkan dalam bentuk tabel HTML
$sql = "SELECT * FROM $table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div style='width: 100%; overflow-x: auto;'>";
    echo "<table style='width: 100%; border-collapse: collapse; margin-bottom: 20px; border: 1px solid #ddd;'>";
    echo "<thead>
            <tr style='background-color: #f2f2f2;'>
                <th style='border: 1px solid #ddd; padding: 8px;'>ID</th>
                <th style='border: 1px solid #ddd; padding: 8px;'>JENIS</th>
                <th style='border: 1px solid #ddd; padding: 8px;'>NAMA</th>
                <th style='border: 1px solid #ddd; padding: 8px;'>SUMBER</th>
                <th style='border: 1px solid #ddd; padding: 8px;'>LATITUDE</th>
                <th style='border: 1px solid #ddd; padding: 8px;'>LONGITUDE</th>
                <th style='border: 1px solid #ddd; padding: 8px;'>KATEGORI</th>
            </tr>
          </thead>";
    echo "<tbody>";

    $row_count = 0; // Inisialisasi hitungan baris
    while ($row = $result->fetch_assoc()) {
        $row_count++;
        $bg_color = ($row_count % 2 == 0) ? '#ffffff' : '#f9f9f9'; // Ganti warna pada setiap baris bergantian

        echo "<tr style='background-color: $bg_color;'>";
        echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row["ID"] . "</td>";
        echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row["JENIS"] . "</td>";
        echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row["NAMA"] . "</td>";
        echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row["SUMBER"] . "</td>";
        echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row["lATITUDE"] . "</td>";
        echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row["lONGITUDE"] . "</td>";
        echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row["KATEGORI"] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
    echo "</div>";
} else {
    echo "Tidak ada data dalam tabel.";
}

// Tutup koneksi
$conn->close();
?>
</div>

</body>
</html>