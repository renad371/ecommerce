@extends('layouts.app')
@section('content')

<section class="py-5">
    <div class="container">
      <div class="row gx-5">

        <aside class="col-lg-6">
          <div class="border rounded-4 mb-3 d-flex justify-content-center">
            <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image">    
              <img style="max-width: 90%; max-height: 90%; margin: auto;" class="rounded-4 fit" src=" /assete\images\{{$data->images}}" />
             
            </a>
          </div>   
        </aside>


        <main class="col-lg-6">
          @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-dark">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
          <div class="ps-lg-3">
            <h4 class="title text-dark">
              {{$data->ProductName}}
            </h4>
            <div class="d-flex flex-row my-3">
              <div class="text-warning mb-1 me-2">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span class="ms-1">
                  4.5
                </span>
              </div>
              <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>154 orders</span>
              <span class="text-success ms-2">In stock</span>
            </div>

            <div class="mb-3">
              <span class="h5">${{$data->Price}}.00</span>
              <span class="text-muted">/per box</span>
            </div>


            <div class="row">
              <dt class="col-3">Type: </dt>
              <dd class="col-9">{{$data->ProductName}}</dd>

              <dt class="col-3">Color</dt>
              <dd class="col-9">{{$data->color}}</dd>

            </div>

            <hr />

            <div class="row mb-4">
              <div class="col-md-4 col-6">
                <label class="mb-2">Size</label>
                <select class="form-select border border-secondary" style="height: 35px;">
                  <option>Small</option>
                  <option>Medium</option>
                  <option>Large</option>
                </select>
              </div>
             
              <div class="col-md-4 col-6 mb-3">
                <label class="mb-2 d-block">Quantity</label>
                <div class="input-group mb-3" style="width: 170px;">
                  <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon1" data-mdb-ripple-color="dark">
                    <i class="fas fa-minus"></i>
                  </button>
                  <input type="text" class="form-control text-center border border-secondary" placeholder="14" aria-label="Example text with button addon" aria-describedby="button-addon1" />
                  <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
              </div>
            </div>
           
            <a href="{{route('AddToCart', $data->id)}}" class="btn btn-primary shadow-0"> <i class="me-1 fa fa-shopping-basket"></i> Add to cart </a>
            <a href="/shopping/Cart" class="btn btn-light border border-secondary py-2 icon-hover px-3"> <i class="me-1 fa fa-heart fa-lg"></i> Save </a>
            
          </div>
        </main>
      </div>
    </div>
  </section>
  <!-- content -->
@endsection