@extends('layouts.materi')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="navbar-collapse collapse">
        <div class="navbar-title">JUPITER</div>
        <ul class="navbar-nav navbar-align">
            <!-- Your existing nav items here -->
        </ul>
    </div>
</nav>

<div class="container">

    <!-- Div baru untuk isi materi -->
    <div class="materi-content" style="font-size: 18px; line-height: 1.8; padding: 20px;">
        <h2 style="font-size: 28px; margin-bottom: 20px;">Jupiter</h2>
        <p style="margin-bottom: 20px;">
            Sampai hari ini, Jupiter adalah planet terbesar di Tata Surya kita. Ukurannya lebih dari dua kali ketujuh planet disatukan. 
            Jika dibandingkan dengan menggambang Bumi seukuran buah anggur, maka Jupiter sebesar bola basket. Jupiter, seperti juga 
            planet lain, tidaklah ideal untuk kehidupan manusia. Meski demikian, ilmuwan menemukan bahwa beberapa satelit Jupiter 
            memiliki lautan.
        </p>
        
        <h3 style="font-size: 24px; margin-bottom: 15px;">Karakteristik Jupiter</h3>
        <table class="table table-bordered" style="width: 100%; font-size: 18px;">
            <tr>
                <th style="padding: 10px;">Mass</th>
                <td style="padding: 10px;">318 kali massa Bumi</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Satelit</th>
                <td style="padding: 10px;">79 buah satelit dan 4 cincin</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Diameter</th>
                <td style="padding: 10px;">142,984 km (sekitar 11,21 kali diameter Bumi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Kandungan</th>
                <td style="padding: 10px;">84% hidrogen dan 15% helium</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Gravitasi</th>
                <td style="padding: 10px;">2,53 kali gravitasi Bumi</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Suhu di Permukaan</th>
                <td style="padding: 10px;">-110°C</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Periode Rotasi</th>
                <td style="padding: 10px;">9 jam 55 menit (ukuran Bumi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Jarak dari Matahari</th>
                <td style="padding: 10px;">5,2 SA (Satuan Astronomi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Periode Revolusi</th>
                <td style="padding: 10px;">11,9 tahun (ukuran Bumi)</td>
            </tr>
        </table>

        <!-- Section untuk Game Interaktif -->
        <h3 id="game" style="font-size: 24px; margin-bottom: 15px; margin-top: 40px;">Game Interaktif: Pecahkan Balon Jupiter!</h3>
        <div class="game-section">
            <p>Klik pada balon untuk memecahkannya dan selesaikan game!</p>
            <div id="balloon-container" style="margin-top: 20px; padding: 20px; background-color: #f9f9f9; display: flex; gap: 10px; flex-wrap: wrap;">
                <!-- Balon dengan event klik -->
                <div class="balloon" onclick="popBalloon(this)" style="width: 100px; height: 150px; background-color: red; border-radius: 50%; cursor: pointer;"></div>
                <div class="balloon" onclick="popBalloon(this)" style="width: 100px; height: 150px; background-color: blue; border-radius: 50%; cursor: pointer;"></div>
                <div class="balloon" onclick="popBalloon(this)" style="width: 100px; height: 150px; background-color: green; border-radius: 50%; cursor: pointer;"></div>
                <div class="balloon" onclick="popBalloon(this)" style="width: 100px; height: 150px; background-color: yellow; border-radius: 50%; cursor: pointer;"></div>
                <div class="balloon" onclick="popBalloon(this)" style="width: 100px; height: 150px; background-color: purple; border-radius: 50%; cursor: pointer;"></div>
            </div>
            <p id="game-result" style="font-weight: bold; color: blue; margin-top: 15px;"></p>
        </div>

        <script>
            let totalBalloons = 5; // Total balon yang harus dipecahkan
            let poppedBalloons = 0;

            // Function untuk memecahkan balon
            function popBalloon(element) {
                element.style.display = "none"; // Hilangkan balon
                poppedBalloons++; // Tambah jumlah balon yang dipecahkan

                // Cek apakah semua balon sudah dipecahkan
                if (poppedBalloons === totalBalloons) {
                    document.getElementById("game-result").innerHTML = "Semua balon sudah dipecahkan! Selamat!";
                }
            }
        </script>
    </div>
</div>
@endsection
