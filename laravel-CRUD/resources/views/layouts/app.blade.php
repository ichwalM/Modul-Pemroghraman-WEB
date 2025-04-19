<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initialscale=1.0"> 
    <title>Kafe Z</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</head> 
<body> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary px-4"> 
        <a class="navbar-brand" href="{{ url('/') }}">Kafe z</a>
        <div class="collapse navbar-collapse" id="navbarNav"> 
            <ul class="navbar-nav"> 
                <li class="nav-item"> 
                    <a class="nav-link" href="{{ route('menus.index') }}">Menu</a> 
                </li> 
                <li class="nav-item"> 
                    <a class="nav-link" href="{{ route('orders.index') }}">Pesanan</a> 
                </li> 
                <li class="nav-item"> 
                    <a class="nav-link" href="{{ route('customers.index') }}">Pelanggan</a> 
                </li> 
            </ul> 
        </div> 
    </nav> 
 
    <div class="container mt-4"> 
        @yield('content') 
    </div> 
</body> 
 
</html> 