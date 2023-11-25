<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contoh Bootstrap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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

    .container-separator {
      margin-top: 20px;
    }

    .container-content {
      text-align: center;
    }

    .container-content img {
      max-width: 100%;
      max-height: 100%;
      margin-top: 10px;
    }

    .container-content-inner {
      margin-top: 20px;
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

<div class="container">
  <div class="row">
  
    <div class="col-md-3">
  <div class="container-box container-separator">
    <div class="container-content">
      <h3>Rumah Tahanan</h3>
      <p>Tempat penahanan sementara untuk pelanggar hukum</p>
      <div class="row">
        <div class="col-md-12">
          <img src="https://sorot.co/images/2021/09/sleman/183434_2313_lembagapemasyarakatanlapas20210909183434.jpg" alt="Placeholder Image" style="margin-bottom: 10px;">
          <button type="button" class="btn btn-primary" onclick="window.location.href='rumah_tahanan.php'">Go to Rumah Tahanan</button>
        </div>
      </div>
    </div>
  </div>
</div>

  

<div class="col-md-3">
  <div class="container-box container-separator">
    <div class="container-content">
      <h3>Pangkalan Militer</h3>
      <p>Pusat operasional dan manajemen untuk keperluan militer</p>
      <div class="row">
        <div class="col-md-12">
          <img src="https://paradigmaindonesia.com/wp-content/uploads/2021/02/IMG-20210220-WA0004.jpg" alt="Placeholder Image" style="margin-bottom: 10px;">
          <button type="button" class="btn btn-primary" onclick="window.location.href='pangkalan_militer.php'">Go to Pangkalan Militer</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-md-3">
  <div class="container-box container-separator">
    <div class="container-content">
      <h3>Koramil</h3>
      <p>Unit teritorial militer untuk beberapa desa</p>
      <div class="row">
        <div class="col-md-12">
          <img src="https://lh3.googleusercontent.com/-Jnw7D55Rpz0/YRnsuNBNLKI/AAAAAAAAnfo/DqUePcchi2cij8HwfIFZp5Pc0yVYGBvqwCLcBGAsYHQ/s1600/1629088948242609-1.png" alt="Placeholder Image" style="margin-bottom: 10px;">
          <button type="button" class="btn btn-primary" onclick="window.location.href='koramil.php'">Go to Koramil</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-md-3">
  <div class="container-box container-separator">
    <div class="container-content">
      <h3>Kodim</h3>
      <p>Komando Distrik Militer, bertanggung jawab atas suatu wilayah</p>
      <div class="row">
        <div class="col-md-12">
          <img src="https://suryayogya.com/wp-content/uploads/2020/10/WhatsApp-Image-2020-10-23-at-14.41.49.jpeg" alt="Placeholder Image" style="margin-bottom: 10px;">
          <button type="button" class="btn btn-primary" onclick="window.location.href='kodim.php'">Go to Kodim</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-md-3">
  <div class="container-box container-separator">
    <div class="container-content">
      <h3>Kantor Polisi</h3>
      <p>Fasilitas pelayanan dan penegakan hukum</p>
      <div class="row">
        <div class="col-md-12">
          <img src="https://media.suara.com/pictures/970x544/2023/09/19/93885-kantor-polisi-daerah-sleman-ilustrasi-polres-sleman.jpg" alt="Placeholder Image" style="margin-bottom: 10px;">
          <button type="button" class="btn btn-primary" onclick="window.location.href='kantorpolisi.php'">Go to Kantor Polisi</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-md-3">
  <div class="container-box container-separator">
    <div class="container-content">
      <h3>Fasilitas Hankam</h3>
      <p> Instalasi militer pendukung keamanan negara</p>
      <div class="row">
        <div class="col-md-12">
          <img src="https://aau.ac.id/wp-content/uploads/2022/03/WhatsApp-Image-2022-04-02-at-11.01.47-1-1024x768.jpeg" alt="Placeholder Image" style="margin-bottom: 10px;">
          <button type="button" class="btn btn-primary" onclick="window.location.href='hankam.php'">Go to Failitas Hankam</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-md-3">
  <div class="container-box container-separator">
    <div class="container-content">
      <h3>Pos Kamling</h3>
      <p>Pusat pengawasan keamanan lingkungan oleh masyarakat</p>
      <div class="row">
        <div class="col-md-12">
          <img src="https://humas.polri.go.id/wp-content/uploads/2023/05/IMG-20230503-WA0139-2-768x576.jpg" alt="Placeholder Image" style="margin-bottom: 10px;">
          <button type="button" class="btn btn-primary" onclick="window.location.href='index2.php'">Go to Pos Kamling</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ... (closing tags) ... -->

  </div>
</div>

</body>
</html>
