<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial
scale=1.0"> 
    <title>@yield('title')</title> 
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') 
}}"> 
    <style> 
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap'); 
 
        body { 
            background-color: #00a6b5; 
            color: white; 
            font-family: "Poppins", sans-serif; 
            margin: 0; 
            height: 100vh; 
            display: flex; 
            flex-direction: column; 
        } 
 
        .navbar-atas { 
            padding: 20px 110px 20px 110px; 
        } 
 
        .content-wrapper { 
            flex: 1; 
            padding-top: 170px; 
        } 
 
        .isi-content { 
            margin-bottom: 70px; 
        } 
 
        .margin-section-between { 
            margin-top: 170px; 
        } 
 
        footer { 
            position: relative; 
            background-color: white; 
            color: black; 
            text-align: center; 
            padding: 10px 0; 
        } 
    </style> 
</head>
<body> 
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-white shadow navbar-atas fixed-top"> 
        <div class="container-fluid"> 
            <img src="{{ asset('images/iclabs-logo.jpg') }}" alt="Logo Iclabs" width="70px"> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> 
                <span class="navbar-toggler-icon"></span> 
            </button> 
            <div class="collapse navbar-collapse" id="navbarNav"> 
                <ul class="navbar-nav ms-auto"> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="{{ 
route('profile') }}">Profil</a> 
                    </li> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="{{ 
route('laboratorium') }}">Laboratorium</a> 
                    </li> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="{{ 
route('kontak') }}">Kontak</a> 
                    </li> 
                </ul> 
            </div> 
        </div> 
    </nav> 
 
    <div class="content-wrapper"> 
        <div class="container isi-content"> 
            @yield('content') 
        </div> 
    </div> 
 
    <footer> 
        <p>&copy; 2025 IcLabs Fakultas Ilmu Komputer Universitas 
Muslim Indonesia</p> 
        <a href="https://fikom.umi.ac.id/" target="_blank" 
class="me-2">FIKOM</a> 
        <a href="https://www.instagram.com/labfikomumi/" 
target="_blank">Instagram</a> 
    </footer> 
 
    <script src="{{ asset('js/bootstrap.bundle.min.js') 
}}"></script> 
</body> 
 
</html> 