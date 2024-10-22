<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="assets/img/logo-ulm.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

    <title>Materi</title>

    <link href="{{ asset('static/css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="#">
                    <span class="align-middle">MATERI</span>
                </a>
                <div class="sidebar-item">

                    <a class="sidebar-link" href="/home">
                        <img src="assets/img/house.png" style="width: 20px; height: 20px;">
                        <span class="align-middle">Home</span>
                    </a><br>

                    @can('admin')
                    <a class="sidebar-link" href="#">
                        <i class="bi bi-house"></i> <span class="align-middle">Data Ruangan</span></a><br>

                    <a class="sidebar-link" href="#">
                        <i class="bi bi-box-seam"></i> <span class="align-middle">Data Alat</span></a><br>

                    <a class="sidebar-link" href="#">
                        <i class="bi bi-file-earmark"></i> <span class="align-middle">Laporan</span><hr></a><br>

                    <a class="sidebar-link" href="#">
                        <i class="bi bi-house-add"></i> <span class="align-middle">Reservasi Tempat</span></a>

                    <a class="sidebar-link" href="#">
                        <i class="bi bi-box-seam"></i> <span class="align-middle">Peminjaman Alat</span></a>
                    @endcan

                    @cannot('admin')
                    <a class="sidebar-link" href="/pendahuluan">
                        <img src="assets/img/presentation.png" style="width: 20px; height: 20px;">
                        <span class="align-middle">Pendahuluan</span></a><br>

                    <a class="sidebar-link" data-bs-toggle="collapse" href="#submenu-sistem-tata-surya" role="button" aria-expanded="false" aria-controls="submenu-sistem-tata-surya">
                        <img src="assets/img/planets.png" style="width: 20px; height: 20px;">
                        <span class="align-middle">Sistem Tata Surya</span>
                    </a>
                    <div class="collapse" id="submenu-sistem-tata-surya"><br>
                        <ul class="list-unstyled fw-normal pb-1 small" style="padding-left: 20px;">
                            <li style="margin-bottom: 10px;"><a href="/merkurius" class="sidebar-link" style="padding-left: 10px;">Merkurius</a></li>
                            <li style="margin-bottom: 10px;"><a href="/venus" class="sidebar-link" style="padding-left: 10px;">Venus</a></li>
                            <li style="margin-bottom: 10px;"><a href="/bumi" class="sidebar-link" style="padding-left: 10px;">Bumi</a></li>
                            <li style="margin-bottom: 10px;"><a href="/mars" class="sidebar-link" style="padding-left: 10px;">Mars</a></li>
                            <li style="margin-bottom: 10px;"><a href="/jupiter" class="sidebar-link" style="padding-left: 10px;">Jupiter</a></li>
                            <li style="margin-bottom: 10px;"><a href="/saturnus" class="sidebar-link" style="padding-left: 10px;">Saturnus</a></li>
                            <li style="margin-bottom: 10px;"><a href="/uranus" class="sidebar-link" style="padding-left: 10px;">Uranus</a></li>
                            <li><a href="/neptunus" class="sidebar-link" style="padding-left: 10px;">Neptunus</a></li>
                        </ul>
                    </div>
                    <br>

                    <a class="sidebar-link" href="/bumi_satelit">
                        <img src="assets/img/earth-globe.png" style="width: 20px; height: 20px;">
                        <span class="align-middle">Bumi dan Satelitnya</span></a><br>

                    <a class="sidebar-link" href="/matahari">
                        <img src="assets/img/sun.png" style="width: 20px; height: 20px;">
                        <span class="align-middle">Mengenal Matahari</span></a><br>

                    <a class="sidebar-link" href="#">
                        <img src="assets/img/task.png" style="width: 20px; height: 20px;">
                        <span class="align-middle">Evaluasi</span></a><br><br><br><br><br><br><br>
                    @endcan

                    <a class="sidebar-link-2" href="#">
                        <img src="assets/img/resume.png" style="width: 20px; height: 20px;">
                        <span class="align-middle">Rabiatul Adawiyah 2210131220011</span></a><br>

                </div>
            </div>
        </nav>

        <div class="main">
            @yield('container')
            <!-- <main class="content">
            </main> -->
        </div>
    </div>

    <script src="{{ asset('static/js/app.js') }}"></script>

</body>

</html>
