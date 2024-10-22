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

                    <a class="sidebar-link" href="#">
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
                    <a class="sidebar-link" href="#">
                        <img src="assets/img/presentation.png" style="width: 20px; height: 20px;">
                        <span class="align-middle">Pendahuluan</span></a><br>

                    <a class="sidebar-link" href="#">
                        <img src="assets/img/planets.png" style="width: 20px; height: 20px;">
                        <span class="align-middle">Sistem Tata Surya</span></a><br>

                    <a class="sidebar-link" href="#">
                        <img src="assets/img/earth-globe.png" style="width: 20px; height: 20px;">
                        <span class="align-middle">Bumi dan Satelitnya</span></a><br>

                    <a class="sidebar-link" href="#">
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
            <nav class="navbar navbar-expand navbar-light navbar-bg">
            <a class="sidebar-toggle js-sidebar-toggle">
            <i class="hamburger align-self-center"></i>
            </a>

            <div class="navbar-collapse collapse">
                <div class="navbar-title">SISTEM TATA SURYA</div>
                <ul class="navbar-nav navbar-align">
                    <!-- Your existing nav items here -->
                </ul>
            </div>
        </nav>


            <main class="content">
                @yield('container')
            </main>
        </div>
    </div>

    <script src="{{ asset('static/js/app.js') }}"></script>

</body>

</html>
