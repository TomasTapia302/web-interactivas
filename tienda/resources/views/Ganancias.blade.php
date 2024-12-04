@extends('layouts.app')

@section('content')


<div class="container text-center">
  <div class="row text-bg-primary p-3 rounded"> 
    <div class="col">
    <h1>Ganancias</h1>
    </div>
  </div>
  <br>


  <div>
  <div class="row">
    <div class="col border border-black text-bg-primary">
    <h2>Dinero disponible</h2>
    </div>
    <div class="col-5 border border-black text-bg-primary">
    <h2>Ganancias del mes</h2>
    </div>
    <div class="col border border-black text-bg-primary">
    <h2>Total de ventas mensuales</h2>
    </div>
  </div>
  <div class="row">
    <div class="col border border-black">
      1 of 3
    </div>
    <div class="col-5 border border-black">
      2 of 3 (wider)
    </div>
    <div class="col border border-black">
      3 of 3
    </div>
  </div>
</div>
<br>
<div>
  <div class="row">
    <div class="col border border-black text-bg-primary">
     cantidad de articulos vendidos
    </div>
    <div class="col-5 border border-black text-bg-primary">
    precio promedio de venta
    </div>
    <div class="col border border-black text-bg-primary">
      Valoración promedio
    </div>
  </div>
  <div class="row">
    <div class="col border border-black">
      1 of 3
    </div>
    <div class="col-5 border border-black">
      2 of 3 (wider)
    </div>
    <div class="col border border-black">
      3 of 3
    </div>
  </div>
</div>

</div>



@endsection
@push('styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@endpush