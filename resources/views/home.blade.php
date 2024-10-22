<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>

    <!-- Load Gasoek One from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Gasoek+One&display=swap" rel="stylesheet">

    <!-- Link to external CSS -->
    <link href="{{ asset('static/css/app.css') }}" rel="stylesheet">
</head>

<body>

    <div class="container-fluid">
        <!-- Header section with title -->
        <header class="header">
            <h1><?php echo "BUMI DAN TATA SURYA"; ?></h1>
            <p class="subtitle"><?php echo "Untuk Pembelajaran Siswa SMP/MTs Kelas VII"; ?></p>
        </header>

        <!-- Boxes section -->
        <div class="box-container">
            <div class="box">
                <img src="assets/img/short-term.png" alt="Gambar 1">
                <h2 class="box-title">CAPAIAN PEMBELAJARAN</h2>
            </div>

            <div class="box" class="sidebar-link">
                <img src="assets/img/completed-task.png" alt="Gambar 1">
                <a href="/pendahuluan">
                    <h2 class="box-title">MATERI</h2></a>
                
            </div>
            <!-- <div class="box">
                <img src="assets/img/game-controller.png" alt="Gambar 1">
                <h2 class="box-title">GAME</h2>
            </div> -->
        </div>
    </div>

</body>

</html>
