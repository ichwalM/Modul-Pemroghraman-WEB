@extends('layouts.app')
@section('title', 'Profil Perusahaan') 
 
@section('content') 
    <div class="d-flex align-items-center justify-content-between 
mb-5"> 
        <div class=" w-50"> 
            <h1 class="fs-1 fw-bold">Laboratorium Terpadu IcLabs 
Fakultas Ilmu Komputer UMI</h1> 
            <p>Laboratorium fakultas ilmu komputer merupakan 
fasilitas yang mendukung mahasiswa dalam mengasah keterampilan 
                dan pengetahuan praktis mereka. Melalui 
laboratorium ini, mahasiswa dapat melakukan praktikum, eksperimen, 
                dan pengembangan perangkat lunak, mempersiapkan 
diri untuk tuntutan industri teknologi informasi yang terus 
                berkembang.</p> 
        </div> 
        <img src="{{ asset('images/iclabs-logo.jpg') }}" 
alt="Ilustrasi" class=" w-25"> 
    </div> 
 
    <div class="d-flex align-items-center justify-content-between 
margin-section-between"> 
        <img src="{{ asset('images/startup1.jpg') }}" 
alt="Fasilitas" class=" w-50 me-5 rounded"> 
        <div class=" w-50"> 
            <h1 class="fs-1 fw-bold">Fasilitas Laboratorium</h1> 
            <p>Laboratorium kami dilengkapi dengan perangkat keras 
dan perangkat lunak terbaru, memberikan mahasiswa akses 
                ke teknologi mutakhir. Fasilitas ini mencakup 7 
laboratorium dan 3 ruang riset yang fasilitasnya sudah 
                sangat mendukung pembelajaran mahasiswa/i.</p> 
        </div> 
    </div> 
 
    <div class="text-center margin-section-between"> 
        <h1 class="fs-1 fw-bold">Denah Lantai 2 FIKOM</h1> 
        <img src="{{ asset('images/denah lt2.jpeg') }}" 
alt="Fasilitas" class="w-75 rounded "> 
    </div> 
@endsection 