@extends('layouts.app') 
 
@section('title', 'Laboratorium') 
 
@section('content') 
    <h1 class="text-center fw-bold  ">Laboratorium</h1> 
    <p class="text-center">Informasi mengenai laboratorium kami 
dan layanan yang kami tawarkan.</p> 
    <div class="d-flex align-items-center justify-content
between"> 
        <div class=" w-50"> 
            <h1 class="fs-1 fw-semibold">Startup Laboratory</h1> 
        </div> 
        <div id="carouselStartup" class="carousel slide w-75"> 
            <div class="carousel-inner mt-5"> 
                <div class="carousel-item active"> 
                    <img src="{{ asset('images/startup1.jpg') }}" 
class="d-block w-100" alt="startup photo 1"> 
                </div> 
                <div class="carousel-item"> 
                    <img src="{{ asset('images/startup2.jpg') }}" 
class="d-block w-100" alt="startup photo 2"> 
                </div> 
                <div class="carousel-item"> 
                    <img src="{{ asset('images/startup3.jpg') }}" 
class="d-block w-100" alt="startup photo 3"> 
                </div> 
            </div> 
            <button class="carousel-control-prev" type="button" 
data-bs-target="#carouselStartup" data-bs-slide="prev"> 
                <span class="carousel-control-prev-icon" aria
hidden="true"></span> 
                <span class="visually-hidden">Previous</span> 
            </button> 
            <button class="carousel-control-next" type="button" 
data-bs-target="#carouselStartup" data-bs-slide="next"> 
                <span class="carousel-control-next-icon" aria
hidden="true"></span> 
                <span class="visually-hidden">Next</span> 
            </button> 
        </div> 
    </div> 
 
    <div class="d-flex align-items-center justify-content-between 
margin-section-between"> 
        <div id="carouselIot" class="carousel slide w-75 me-5"> 
            <div class="carousel-inner mt-5"> 
                <div class="carousel-item active"> 
                    <img src="{{ asset('images/IoT (1).jpg') }}" 
class="d-block w-100" alt="iot photo 1"> 
                </div> 
                <div class="carousel-item"> 
                    <img src="{{ asset('images/IoT (2).jpg') }}" 
class="d-block w-100" alt="iot photo 2"> 
                </div> 
                <div class="carousel-item"> 
                    <img src="{{ asset('images/IoT (3).jpg') }}" 
class="d-block w-100" alt="iot photo 3"> 
                </div> 
            </div> 
            <button class="carousel-control-prev" type="button" 
data-bs-target="#carouselIot" data-bs-slide="prev"> 
                <span class="carousel-control-prev-icon" aria
hidden="true"></span> 
                <span class="visually-hidden">Previous</span> 
            </button> 
            <button class="carousel-control-next" type="button" 
data-bs-target="#carouselIot" data-bs-slide="next"> 
                <span class="carousel-control-next-icon" aria
hidden="true"></span> 

<div class="carousel-item"> 
                    <img src="{{ asset('images/Mulmed (2).jpg') 
}}" class="d-block w-100" alt="mulmed photo 2"> 
                </div> 
                <div class="carousel-item"> 
                    <img src="{{ asset('images/Mulmed (3).jpg') 
}}" class="d-block w-100" alt="mulmed photo 3"> 
                </div> 
                <div class="carousel-item"> 
                    <img src="{{ asset('images/Mulmed (4).jpg') 
}}" class="d-block w-100" alt="mulmed photo 4"> 
                </div> 
                <div class="carousel-item"> 
                    <img src="{{ asset('images/Mulmed (5).jpg') 
}}" class="d-block w-100" alt="mulmed photo 5"> 
                </div> 
            </div> 
            <button class="carousel-control-prev" type="button" 
data-bs-target="#carouselMulmed" data-bs-slide="prev"> 
                <span class="carousel-control-prev-icon" aria
hidden="true"></span> 
                <span class="visually-hidden">Previous</span> 
            </button> 
            <button class="carousel-control-next" type="button" 
data-bs-target="#carouselMulmed" data-bs-slide="next"> 
                <span class="carousel-control-next-icon" aria
hidden="true"></span> 
                <span class="visually-hidden">Next</span> 
            </button> 
        </div> 
    </div> 
 
    <div class="d-flex align-items-center justify-content-between 
margin-section-between"> 
        <div id="carouselComvis" class="carousel slide w-75 me-5"> 
            <div class="carousel-inner mt-5"> 
                <div class="carousel-item active"> 
                <img src="{{ asset('images/CV (1).jpg') }}" 
class="d-block w-100" alt="Comvis photo 1"> 
                </div> 
                <div class="carousel-item"> 
                    <img src="{{ asset('images/CV (2).jpg') }}" 
class="d-block w-100" alt="Comvis photo 2"> 
                </div> 
            </div> 
            <button class="carousel-control-prev" type="button" 
data-bs-target="#carouselComvis" data-bs-slide="prev"> 
                <span class="carousel-control-prev-icon" aria
hidden="true"></span> 
                <span class="visually-hidden">Previous</span> 
            </button> 
            <button class="carousel-control-next" type="button" 
data-bs-target="#carouselComvis" data-bs-slide="next"> 
                <span class="carousel-control-next-icon" aria
hidden="true"></span> 
                <span class="visually-hidden">Next</span> 
            </button> 
        </div> 
        <div class=" w-50"> 
            <h1 class="fs-1 fw-semibold">Computer Vision 
Laboratory</h1> 
        </div> 
    </div> 
 
    <div class="d-flex align-items-center justify-content-between 
margin-section-between"> 
        <div class=" w-50"> 
            <h1 class="fs-1 fw-semibold">Data Science 
Laboratory</h1> 
        </div> 
        <div id="carouselDs" class="carousel slide w-75 me-5"> 
            <div class="carousel-inner mt-5"> 
                <div class="carousel-item active"> 
                    <img src="{{ asset('images/DS (1).jpg') }}" 
class="d-block w-100" alt="Ds photo 1"> 
                </div> 
                <div class="carousel-item"> 
                    <img src="{{ asset('images/DS (2).jpg') }}" 
class="d-block w-100" alt="Ds photo 2"> 
                </div> 
                <div class="carousel-item"> 
                    <img src="{{ asset('images/DS (3).jpg') }}" 
class="d-block w-100" alt="Ds photo 3"> 
                </div> 
                <div class="carousel-item"> 
                    <img src="{{ asset('images/DS (4).jpg') }}" 
class="d-block w-100" alt="Ds photo 3"> 
                </div> 
            </div> 
            <button class="carousel-control-prev" type="button" 
data-bs-target="#carouselDs" data-bs-slide="prev"> 
                <span class="carousel-control-prev-icon" aria
hidden="true"></span> 
                <span class="visually-hidden">Previous</span>
                </button> 
            <button class="carousel-control-next" type="button" 
data-bs-target="#carouselDs" data-bs-slide="next"> 
                <span class="carousel-control-next-icon" aria
hidden="true"></span> 
                <span class="visually-hidden">Next</span> 
            </button> 
        </div> 
    </div> 
 
    <div class="d-flex align-items-center justify-content-between 
margin-section-between"> 
        <div id="carouselMicro" class="carousel slide w-75 me-5"> 
            <div class="carousel-inner mt-5"> 
                <div class="carousel-item active"> 
                    <img src="{{ asset('images/Micro (1).jpg') }}" 
class="d-block w-100" alt="Micro photo 1"> 
                </div> 
                <div class="carousel-item"> 
                    <img src="{{ asset('images/Micro (2).jpg') }}" 
class="d-block w-100" alt="Micro photo 2"> 
                </div> 
                <div class="carousel-item"> 
                    <img src="{{ asset('images/Micro (3).jpg') }}" 
class="d-block w-100" alt="Micro photo 3"> 
                </div> 
                <div class="carousel-item"> 
                    <img src="{{ asset('images/Micro (4).jpg') }}" 
class="d-block w-100" alt="Micro photo 3"> 
                </div> 
                <div class="carousel-item"> 
                    <img src="{{ asset('images/Micro (5).jpg') }}" 
class="d-block w-100" alt="Micro photo 3"> 
                </div> 
            </div> 
            <button class="carousel-control-prev" type="button" 
data-bs-target="#carouselMicro" data-bs-slide="prev"> 
                <span class="carousel-control-prev-icon" aria
hidden="true"></span> 
                <span class="visually-hidden">Previous</span> 
            </button> 
            <button class="carousel-control-next" type="button" 
data-bs-target="#carouselMicro" data-bs-slide="next"> 
                <span class="carousel-control-next-icon" aria
hidden="true"></span> 
                <span class="visually-hidden">Next</span> 
            </button> 
        </div> 
        <div class=" w-50"> 
            <h1 class="fs-1 fw-semibold">Micro Controller 
Laboratory</h1> 
        </div> 
    </div> 
 
    <div class="d-flex align-items-center justify-content-between 
margin-section-between"> 
        <div class=" w-50"> 
<h1 class="fs-1 fw-semibold">Computer Network 
Laboratory</h1> 
        </div> 
        <div id="carouselComnet" class="carousel slide w-75 me-5"> 
            <div class="carousel-inner mt-5"> 
                <div class="carousel-item active"> 
                    <img src="{{ asset('images/Comnet 1.png') }}" 
class="d-block w-100" alt="Comnet photo 1"> 
                </div> 
                <div class="carousel-item"> 
                    <img src="{{ asset('images/comnet 2.png') }}" 
class="d-block w-100" alt="Comnet photo 2"> 
                </div> 
                <div class="carousel-item"> 
                    <img src="{{ asset('images/Comnet 3.png') }}" 
class="d-block w-100" alt="Comnet photo 3"> 
                </div> 
                <div class="carousel-item"> 
                    <img src="{{ asset('images/Comnet 4.png') }}" 
class="d-block w-100" alt="Comnet photo 3"> 
                </div> 
            </div> 
            <button class="carousel-control-prev" type="button" 
data-bs-target="#carouselComnet" data-bs-slide="prev"> 
                <span class="carousel-control-prev-icon" aria
hidden="true"></span> 
                <span class="visually-hidden">Previous</span> 
            </button> 
            <button class="carousel-control-next" type="button" 
data-bs-target="#carouselComnet" data-bs-slide="next"> 
                <span class="carousel-control-next-icon" aria
hidden="true"></span> 
                <span class="visually-hidden">Next</span> 
            </button> 
        </div> 
    </div> 
@endsection 