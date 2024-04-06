@extends('layouts.app')
@section('content')
<section class="h-100 h-custom" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card">
                    <div class="card-body p-4">

                        <div class="row">

                            <div class="col-lg-7">
                                <h5 class="mb-3"><a href="shopping" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                                <hr>

                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div>

                                        <p class="mb-0"> items in your cart</p>
                                    </div>
                                 
                                </div>
                                <table id="shoppingCart" class="table table-condensed table-responsive">
                                    <thead>
                                        <tr>
                                            <th style="width:60%">Product</th>
                                            <th style="width:12%">Price</th>
                                            <th style="width:10%">Quantity</th>
                                            <th style="width:16%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $items)
                                        <tr>
                                            <td data-th="Product">
                                                <div class="row">
                                                    <div class="col-md-3 text-left">
                                                        <img src=" /assete\images\{{$items->images}}" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                                    </div>
                                                    <div class="col-md-9 text-left mt-sm-2">
                                                        <h4>{{$items->Description}}</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-th="Price">{{$items->Price}} SAR</td>
                                            
                                            <td data-th="Quantity">
                                                <input type="number" class="form-control  text-center" value="1">
                                            </td>
                                            <td class="actions" data-th="">
                                                <div class="text-right">
                                                   
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>


                            </div>
                            <div class="col-lg-5">

                                <div class="card bg-primary text-white rounded-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <h5 class="mb-0">Card details</h5>

                                        </div>


                                        <hr class="my-4">

                                        <div class="d-flex justify-content-between">
                                            <p class="mb-2">Subtotal</p>
                                            <p class="mb-2">{{$total_price}} SAR</p>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <p class="mb-2">Shipping</p>
                                            <p class="mb-2">0.00 SAR</p>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <P class="mb-2">total:</P>
                                            <P class="mb-2">{{$total_price}} SAR</P>
                                        </div>
                                        <div class="row">
                                            <div class="col">

                                            </div>
                                            <div class="col">

                                                <button type="button" class="btn btn-info btn-block btn-lg">
                                                    <div class="d-flex justify-content-between div center">
                                                        <span>{{$total_price}}</span>
                                                        <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2" center></i></span>
                                                    </div>
                                                </button>

                                            </div>
                                            <div class="col">

                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection