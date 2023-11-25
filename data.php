<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Infografis Pertahanan dan Keamanan Kabupaten Sleman</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.42.0/apexcharts.min.css"
        integrity="sha512-nnNXPeQKvNOEUd+TrFbofWwHT0ezcZiFU5E/Lv2+JlZCQwQ/ACM33FxPoQ6ZEFNnERrTho8lF0MCEH9DBZ/wWw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .navbar-custom {
            background-color: #1A5276;
            border-color: #2e6da4;
            color: #ffffff;
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-nav>li>a {
            color: #ffffff !important;
        }

        .navbar-custom .navbar-toggler {
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

    <nav class="navbar navbar-expand-lg navbar-custom navbar-center">
        <div class="container-fluid d-flex justify-content-center">
            <a class="navbar-brand" href="#">SafeZoneSlemanGIS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="responsi.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Sebaran Fasilitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="container.php">Jenis Fasilitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="data.php">Grafis & Tabel</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>








    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fa-solid fa-chart-line"></i> Informasi Data Pertahanan dan
                Keamanan Kabupaten Sleman</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa-solid fa-bars"></i> Data
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="tabelkeamanan.php">Fasilitas Pertahanan dan Keamanan</a>
                            </li>
                            <li><a class="dropdown-item" href="tabelposkamling.php">Fasilitas Pos Kamling</a></li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li
                            <a class="dropdown-item" href="#"></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-disabled="true" data-bs-toggle="modal" data-bs-target="#infoModal"><i
                                class="fa-solid fa-circle-info"></i> Info</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h5>Luas Daerah dan Jumlah Pulau</h5>
            </div>
            <div class="cad-body">
                <div id="chart"></div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"> <i class="fa-solid fa-circle-info"></i>Info
                        Modal </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <p> Nama: <a href="https://www.linkedin.com/in/fani-aisyah-546ab1287?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">Fani Aisyah</a></p>
                    <p> NIM : 22/493988/SV/20769</p>
                    <p> Kelas : A </p>
                    <p>Sumber Data 1: <a href="https://geoportal.slemankab.go.id/search/?title__icontains=SEBARAN%20FASILITAS%20PERTAHANAN%20DAN%20KEAMANAN%20DI%20KABUPATEN%20SLEMAN%20TAHUN%202019&abstract__icontains=SEBARAN%20FASILITAS%20PERTAHANAN%20DAN%20KEAMANAN%20DI%20KABUPATEN%20SLEMAN%20TAHUN%202019&purpose__icontains=SEBARAN%20FASILITAS%20PERTAHANAN%20DAN%20KEAMANAN%20DI%20KABUPATEN%20SLEMAN%20TAHUN%202019&f_method=or&limit=5&offset=0
                    " target="_blank">Data Fasilitas Pertahanan dan Kemanan Kabupaten Sleman</a></p>
<p>Sumber Data 2: <a href="https://geoportal.slemankab.go.id/search/?title__icontains=pos%20kamling&abstract__icontains=pos%20kamling&purpose__icontains=pos%20kamling&f_method=or&limit=5&offset=0
" target="_blank">Data Sebaran Pos Kamling Kabupaten Sleman</a></p>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.42.0/apexcharts.min.js"
        integrity="sha512-HctQcT5hnI/elQck4950pvd50RuDnjCSGSoHI8CNyQIYVxsUoyJ+gSQIOrll4oM/Z7Kfi7WCLMIbJbiwYHFCpA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var options = {
            series: [1, 8, 14, 2, 24, 13, 44],
            chart: {
                width: '100%', // Gunakan persentase untuk mengisi lebar 100% dari wadah
                height: '500px', // Atur tinggi diagram sesuai yang diinginkan
                type: 'pie',
            },
            labels: ["Rumah Tahanan", "Pangkalan Militer", "Koramil", "Kodim", "Kantor Polisi", "Fasilitas Hankam",
                "Pos Kamling"
            ],
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: '100%' // Sesuaikan lebar saat tampilan responsif (misal, di perangkat seluler)
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
</body>

</html>
