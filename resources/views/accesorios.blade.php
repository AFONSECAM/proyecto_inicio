@extends('layouts.pages')

@section('content')
<!-- <div class="jumbotron col-md-12 text-white"
    style="background-image: url(https://surflorida.com/wp-content/uploads/2021/02/mejores-celulares-2018.jpg); background-size: 100% 100%; opacity: 0.8;">
    <h1 class="text-center">Celulares</h1>
    <p class="text-center">Aquí encontrarás los celulares que tenemos disponibles</p>
</div> -->
<!-- Carrusel -->

<div id="carouselExampleCaptions" class="carousel slide pb-5" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" style="height: 300px">
            <img src="https://pbs.twimg.com/media/EEHMp2DU8AIsuTe.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Accesorios</h5>
                <p>Conoce todos nuestra linea de accesorios para tu móvil.</p>
            </div>
        </div>
    </div>
</div>

<!-- End Carrusel -->

<div class="container">
    <div class="accesorios celulares">
        <div class="  wrapper">
            <h2 id="">Accesorios celulares</h2>
        </div>
        <div class="auriculares-cascos-con-micrófono-y-control-volumen-iphone-estampado-leopardo w-100 d-flex align-items-center">
            <img src="imagenes/imagenesguardadas/auriculares-cascos-con-micrófono-y-control-volumen-iphone-estampado-leopardo-500x500.jpg 1.jpg" alt="">
        </div>
        <div class="CABLE-RADIANCE-PRO-REMAX w-100 d-flex align-items-center">
            <img src="imagenes/imagenesguardadas/CABLE-RADIANCE-PRO-REMAX-3-500x500.jpg 2.jpg" alt="">
        </div>
        <div class="CONVERTIDOR-TYPE-C-A-MICRO  w-100 d-flex align-items-center">
            <img src="imagenes/imagenesguardadas/CONVERTIDOR-TYPE-C-A-MICRO-003461.jpg 3.jpg" alt="">
        </div>
        <div class="HUBS-MULTIPUERTO-WIWU-3EN1-005535-1-  w-100 d-flex align-items-center">
            <img src="imagenes/imagenesguardadas/HUBS-MULTIPUERTO-WIWU-3EN1-005535-1-500x500.jpg 4.jpg" alt="">
        </div>
        <div class="MANOS LIBRES PC PRO 005005  w-100 d-flex align-items-center">
            <img src="imagenes/imagenesguardadas/MANOS LIBRES PC PRO 005005-500x500.jpg 5.jpg" alt="">
        </div>
        <div class="MANOS LIBRES PC PRO REF 005414-  w-100 d-flex align-items-center">
            <img src="imagenes/imagenesguardadas/MANOS LIBRES PC PRO REF 005414-500x500.jpg 6.jpg" alt="">
        </div>
        <div class="MANOS-LIBRES-BLUETOOTH-7G w-100 d-flex align-items-center">
            <img src="imagenes/imagenesguardadas/MANOS-LIBRES-BLUETOOTH-7G-500x500.jpg 7.jpg" alt="">
        </div>
        <div class="MANOS-LIBRES-ORG-S8 w-100 d-flex align-items-center">
            <img src="imagenes/imagenesguardadas/MANOS-LIBRES-ORG-S8-2-500x500.jpg 8.jpg" alt="">
        </div>
        <div class="CABLE-BLINDADO-3M-TYPE-C-004415-1 w-100 d-flex align-items-center">
            <img src="imagenes/imagenesguardadas/CABLE-BLINDADO-3M-TYPE-C-004415-1-500x500.jpg 9.jpg" alt="">
        </div>
        <div class="CABLE-BLINDADO BLANCO -3M-TYPE C 10  w-100 d-flex align-items-center">
            <img src="imagenes/imagenesguardadas/CABLE-BLINDADO BLANCO -3M-TYPE C 10.jpg" alt="">
        </div>
        <div class="CABLE BLINDADO BLANCO 1-2 M  w-100 d-flex align-items-center">
            <img src="imagenes/imagenesguardadas/CABLE BLINDADO BLANCO 1-2-500x500.jpg 12.jpg" alt="">
        </div>
        <div class="Audífonos-Manos-Libres-Bluetooth-I9S-4- w-100 d-flex align-items-center">
            <img src="imagenes/imagenesguardadas/Audífonos-Manos-Libres-Bluetooth-I9S-4-500x500.jpg 13.jpg" alt="">
        </div>
        <div class="Audífonos-Manos-Libres-C550-  w-100 d-flex align-items-center">
            <img src="imagenes/imagenesguardadas/Audífonos-Manos-Libres-C550-500x500.jpg 14.jpg" alt="">
        </div>
        <div class="Cable-Datos-Cordon-Micro-USB-  w-100 d-flex align-items-center">
            <img src="imagenes/imagenesguardadas/Cable-Datos-Cordon-Micro-USB-500x500.jpg 15.jpg" alt="">
        </div>
        <div class="Audífonos-Manos-Libres-5G-1-  w-100 d-flex align-items-center">
            <img src="imagenes/imagenesguardadas/Audífonos-Manos-Libres-5G-1-500x500.jpg 16.jpg" alt="">
        </div>
        <div class="Audifonos-Manos libres sencillos 1-2-  w-100 d-flex align-items-center">
            <img src="imagenes/imagenesguardadas/Audifonos-Manos libres sencillos 1-2-500x500.jpg 17.jpg" alt="">
         </div>
        </div>
    </div>
</div>
</section>

<div class="col-md-12 pb-5">
    <form>
        <div class="form-row">
            <div class="col">
                <select type="text" class="form-control">
                    <option value="">Ordenar por precio</option>
                    <option value="">Mas barato a más costoso</option>
                    <option value="">Más costoso a más barato</option>
                </select>
            </div>
            <div class="col">
                <select type="text" class="form-control">
                    <option value="">Filtrar por marca</option>
                </select>
            </div>
        </div>
    </form>
</div>
@foreach($accesorios as $accesorio)
<div class="card col-sm-12 col-md-4 col-lg-3">
    <img src="{{asset('uploads/accesories/'.$accesorio->foto)}}" class="card-img-top" alt="Se supone que va la imagen"
        width="200px" height="200px">
    <div class="card-body text-center">
        <h5 class="card-title">{{ucfirst(strtolower($accesorio->name))}}</h5>
        <p class="card-text">${{number_format($accesorio->price)}}</p>
        <a href="#" class="btn btn-primary">¡Lo quiero!</a>
    </div>
</div>

@endforeach
@endsection