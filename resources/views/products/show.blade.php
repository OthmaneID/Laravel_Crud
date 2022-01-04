@extends('products.layout')

@section('content')
    <div class="p-3  w-10/12 position-relative rounded-xl border-black border mt-5 " >
        <div class="row border-b-2">
            <div class=" d-flex col-lg-12 mb-4">
                <div class="pull-left">
                    <a class="btn btn-primary" href="{{ route('products.index') }}">
                    <i class="fas fa-arrow-left" ></i> Back
                    </a>
                </div>
                <div class="pull-right ml-5 ">   
                    <h2 class=" text-3xl font-medium " >
                        Show Product
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="info">
                <div class="form-group">
                    <strong class="text-xl underline">Name:</strong><br>
                    <p class="text-lg font-semibold " > {{ $product->name }}</p>
                </div>
            </div>

            <div class="info px-3">
                <div class="form-group">
                    <strong class="text-xl underline">Details:</strong><br>
                    <p class=" w-4/5 text-lg font-semibold" >{{ $product->detail }}</p>
                </div>
            </div>

        </div>
    </div>
@endsection