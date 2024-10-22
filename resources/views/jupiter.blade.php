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

        <!-- Section untuk Latihan/Kuis -->
        <h3 style="font-size: 24px; margin-bottom: 15px; margin-top: 40px;">Latihan: Kuis tentang Jupiter</h3>
        <div class="quiz-section">
            <p>Pertanyaan 1: Berapa kali massa Jupiter dibandingkan dengan massa Bumi?</p>
            <div>
                <input type="radio" name="q1" value="318" id="q1a">
                <label for="q1a">318 kali</label><br>
                
                <input type="radio" name="q1" value="420" id="q1b">
                <label for="q1b">420 kali</label><br>
                
                <input type="radio" name="q1" value="100" id="q1c">
                <label for="q1c">100 kali</label><br>
            </div>

            <p>Pertanyaan 2: Berapa suhu permukaan Jupiter?</p>
            <div>
                <input type="radio" name="q2" value="-110°C" id="q2a">
                <label for="q2a">-110°C</label><br>
                
                <input type="radio" name="q2" value="0°C" id="q2b">
                <label for="q2b">0°C</label><br>
                
                <input type="radio" name="q2" value="200°C" id="q2c">
                <label for="q2c">200°C</label><br>
            </div>

            <button class="btn btn-primary" onclick="checkQuiz()">Submit Jawaban</button>
            <p id="quiz-result" style="font-weight: bold; color: green; margin-top: 15px;"></p>
        </div>

        <script>
            function checkQuiz() {
                let correct = 0;
                if (document.querySelector('input[name="q1"]:checked')?.value === "318") correct++;
                if (document.querySelector('input[name="q2"]:checked')?.value === "-110°C") correct++;

                const result = document.getElementById("quiz-result");
                if (correct === 2) {
                    result.innerHTML = "Selamat! Semua jawaban benar!";
                } else {
                    result.innerHTML = "Beberapa jawaban salah. Coba lagi!";
                }
            }
        </script>

        <!-- Section untuk Game Interaktif -->
        <h3 style="font-size: 24px; margin-bottom: 15px; margin-top: 40px;">Game Interaktif: Susun Jupiter</h3>
        <div class="game-section">
            <p>Coba susun planet Jupiter dengan komponen yang tepat (kandungan, suhu, dan lainnya)!</p>
            <div id="game-container" style="border: 1px solid #ccc; padding: 10px; background-color: #f9f9f9;">
                <!-- Game sederhana dengan Drag and Drop -->
                <div style="display: flex; gap: 10px;">
                    <div class="planet-part" draggable="true" ondragstart="drag(event)" id="mass">318x Massa Bumi</div>
                    <div class="planet-part" draggable="true" ondragstart="drag(event)" id="temp">-110°C</div>
                    <div class="planet-part" draggable="true" ondragstart="drag(event)" id="gravity">2.53x Gravitasi Bumi</div>
                </div>
                <div id="dropzone" ondrop="drop(event)" ondragover="allowDrop(event)" style="margin-top: 20px; padding: 20px; border: 1px dashed #000;">
                    Drop komponen di sini untuk membuat Jupiter
                </div>
            </div>
            <p id="game-result" style="font-weight: bold; color: blue; margin-top: 15px;"></p>
        </div>

        <script>
            function allowDrop(ev) {
                ev.preventDefault();
            }

            function drag(ev) {
                ev.dataTransfer.setData("text", ev.target.id);
            }

            function drop(ev) {
                ev.preventDefault();
                var data = ev.dataTransfer.getData("text");
                ev.target.appendChild(document.getElementById(data));
                document.getElementById("game-result").innerHTML = "Planet Jupiter berhasil disusun!";
            }
        </script>
    </div>
</div>
@endsection
