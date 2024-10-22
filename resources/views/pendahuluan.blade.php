@extends('layouts.materi')
      @section('container')
      <nav class="navbar navbar-expand navbar-light navbar-bg">
            <a class="sidebar-toggle js-sidebar-toggle">
            <i class="hamburger align-self-center"></i>
            </a>
            <div class="navbar-collapse collapse">
                <div class="navbar-title">PENDAHULUAN</div>
                <ul class="navbar-nav navbar-align">
                    <!-- Your existing nav items here -->
                </ul>
            </div>
        </nav>
      
      <div class="container">
        
        <!-- Div baru untuk isi materi -->
        <div class="materi-content">
            <h2>Materi Pembelajaran</h2>
            <p>Berikut adalah penjelasan materi terkait sistem tata surya:</p>
            <ul>
                <li>Penjelasan tentang planet-planet di tata surya.</li>
                <li>Fakta menarik tentang Bumi dan satelitnya.</li>
                <li>Pengertian dan fungsi matahari dalam sistem tata surya.</li>
            </ul>
        </div>
    </div>
@endsection
