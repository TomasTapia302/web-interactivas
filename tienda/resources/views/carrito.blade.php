@extends('layouts.app')

@section('content')
<div class="container">
<div class="row"> 
    <div class="col-8" >
      <div class="text-bg-primary p-3 rounded"> <h2>carrito</h2> </div>
   <br>
      <div class="card mb-3 border border-black border-opacity-50 rounded" >
        <div class="row ">
          <div class="col">
            <img src="..." class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col">
            <div class="card-body">
              <h5 class="card-title">nombre</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="row">
                <div  class="col"><button>eliminar</button></div>
                <div  class="col"><button>editar</button></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 border border-black border-opacity-50 rounded" >
        <div class="row ">
          <div class="col">
            <img src="..." class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col">
            <div class="card-body">
              <h5 class="card-title">nombre</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="row">
                <div  class="col"><button>eliminar</button></div>
                <div  class="col"><button>editar</button></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 border border-black border-opacity-50 rounded" >
        <div class="row ">
          <div class="col">
            <img src="..." class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col">
            <div class="card-body">
              <h5 class="card-title">nombre</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="row">
                <div  class="col"><button>eliminar</button></div>
                <div  class="col"><button>editar</button></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 border border-black border-opacity-50 rounded" >
        <div class="row ">
          <div class="col">
            <img src="..." class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col">
            <div class="card-body">
              <h5 class="card-title">nombre</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="row">
                <div  class="col"><button>eliminar</button></div>
                <div  class="col"><button>editar</button></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 border border-black border-opacity-50 rounded" >
        <div class="row ">
          <div class="col">
            <img src="..." class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col">
            <div class="card-body">
              <h5 class="card-title">nombre</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="row">
                <div  class="col"><button>eliminar</button></div>
                <div  class="col"><button>editar</button></div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
     <div class="col-3"> 
      <div class="text-bg-primary p-3 rounded"><h2>resumen de compra</h2></div>
   
      <br>
      <div class="border border-black border-opacity-50 rounded">
        <div class="container">
          <br>
          <h3>productos: $100.00 </h3>
      <h3> envio: $100.00 </h3>
      <h3>descuentos: $100.00 </h3>
 
      <h3>-----------------------</h3>

      <h3>Total:$100.00</h3>
      <br>
        </div>
      
    </div>
      <br>
      <div class="d-grid gap-2">
        <button class="btn btn-primary" type="button">pagar</button>
       
      </div>

     </div>
  </div>
</div>
@endsection
@push('styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@endpush