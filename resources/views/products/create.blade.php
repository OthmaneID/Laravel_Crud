@extends('products.layout')

@section('content')
    <form action="{{ route('products.store') }}" method="post"
     class="create-form">
     @csrf
        <div class="create-form-top">
            <a href="/products" class="btn btn-primary position-absolute mt-2 ml-2 w-20" > 
                <i class="fas fa-arrow-left text-xl" ></i> 
            </a>
            <h1 class="text-center text-3xl" >Add new Product</h1>
        </div>
        <div class="create-form-body p-3 mt-3">
            <div class="mb-3">
                <label for="Name">Name:</label>
                <input class="form-control" type="text" name="name" id="name" value="" placeholder="Name" >
            </div>
            <div class="mb-3">
                <label for="detail">Detail:</label>
                <textarea class="form-control" placeholder="Detail" 
                name="detail" id="detail" rows="3">

                </textarea>
            </div>
            <div class="d-flex justify-content-center" >
                <button class="btn btn-outline-success " type="submit">Create</button>
            </div>
        </div>
    </form>
@endsection