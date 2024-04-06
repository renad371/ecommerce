@extends('layouts.base')

@section('content')

<div class="container">
    <div class="row mt-5 ">
        <div class="col">

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
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <span> Add New Product</span>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5  text-dark" id="exampleModalLabel">Add New Product</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('createproducts')}}" method="post">
                                @csrf
                                <input type="text" class="form-control" name="ProductName">
                                <button type="submit" class="btn btn-info mt-2 ">Save</button>
                                <button type="button" class="btn btn-secondary mt-2"
                                    data-bs-dismiss="modal">Cancel</button>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <form action="" method="GET">
                <div class="input-group mb-3">
                    <form action="{{ route('Search') }}" method="GET"></form>
                        <form action="{{ route('Products') }}" method="GET"></form>
                    <input type="text" class="form-control me-3" placeholder="Search" name="search">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>

        </div>

        
        <a href="{{ route('Products') }}""><button type="submit" class="btn btn-primary">
            Show All Products</button></a>


        <div class="row mt-5 text-dark">
            <div class="col">
                <div class="card">


                    <div class="card-body bg-white">
                        <table class="table table-bordered">
                            <thead>
                                <th class="text-center">ID</th>
                                <th class="text-center"> Product Name</th>
                                <th colspan="2" class="text-center">Action</th>

                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    @foreach($Products as $items )
                                    <td>
                                        {{$items->id}}
                                    </td>
                                    <td>
                                        {{$items->ProductName}}
                                    </td>
                                    <td><a href="{{ route('del', ['id' => $items->id]) }}"><i
                                                class="fa fa-trash text-danger"></i></a></td>

                                    <td> <a href="#" class="edit" data-bs-toggle="modal"
                                            data-bs-target="#editProductModal" data-id="{{ $items->id }}"
                                            data-name="{{ $items->ProductName }}"><i
                                                class="fa fa-edit text-success"></i></a></td>

                                </tr>
                                @endforeach
                                <!-- Modal -->
                                <div class="modal fade text-dark" id="editProductModal" tabindex="-1"
                                    aria-labelledby="editProductModalLabel" aria-hidden="true">
                                    <div class="modal-dialog text-dark">
                                        <div class="modal-content">
                                            <div class="modal-header text-dark">
                                                <h5 class="modal-title" id="editProductModalLabel">Edit Product</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-dark">
                                                <form action="{{ route('edit') }}" method="GET">
                                                    <input class="text-dark" type="text" id="ProductId"
                                                        name="ProductId">
                                                    <div class="mb-3">
                                                        <label for="ProductName" class="form-label text-dark">Product
                                                            Name</label>
                                                        <input type="text" class="form-control" id="ProductName"
                                                            name="ProductName">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary"
                                                        onclick="saveChanges()">Save
                                                        changes</button>
                                                </form>
                                            </div>
                                        </div>
                            </tbody>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const editButtons = document.querySelectorAll('.edit');

            editButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const ProductId = this.getAttribute('data-id');
                    const ProductName = this.getAttribute('data-name');

                    document.getElementById('ProductId').value = ProductId;
                    document.getElementById('ProductName').value = ProductName;

                });
            });
        });
    </script>
    @endsection