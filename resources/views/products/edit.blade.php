@extends('products.layout')

@section('content')
    <div class="edit-form w-4/5">
        <form class="border-black border rounded-lg p-3" 
        action="{{ route('products.update',$product->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="row border-b-2">
                <div class=" d-flex col-lg-12 mb-4">
                    <div class="pull-left">
                        <a class="btn btn-primary" href="{{ route('products.index') }}">
                        <i class="fas fa-arrow-left" ></i> Back
                        </a>
                    </div>


                    <div class="pull-right ml-5 ">   
                        <h2 class=" text-3xl font-medium " >
                            Edit Product
                        </h2>
                    </div> 

                </div>
            </div>

            <div class="row mt-3">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong class="text-xl" >Name:</strong>
                        <input type="text" name="name" id="name"
                         value="{{ $product->name }}" class="form-control"placeholder="Name" >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong class="text-xl" >Detail:</strong>
                        <textarea name="detail" id="detail" class="form-control" rows="3"
                        placeholder="Detail">{{ $product->detail }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-4">
                    <button type="submit" class="btn btn-warning" >Update</button>
                </div>
            </div>

        </form>

        @if($errors->any())
        <div class="w-3/4 text-center create-error alert alert-danger" >
            <strong>Whoops</strong> there are some problems with your input <br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
     @endif
    </div>
@endsection