@extends('layouts.materi')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="navbar-collapse collapse">
        <div class="navbar-title">LATIHAN JUPITER</div>
        <ul class="navbar-nav navbar-align">
            <!-- Your existing nav items here -->
        </ul>
    </div>
</nav>

<div class="container">

    <!-- Div untuk Latihan/Kuis -->
    <div class="materi-content" style="font-size: 18px; line-height: 1.8; padding: 20px;">
        <h3 style="font-size: 24px; margin-bottom: 15px;">Latihan: Kuis tentang Jupiter</h3>
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

</div>
@endsection
