@extends('products.layout')

@section('content')
<div class="w-10/12 overflow-hidden position-relative " >
    @if($message= Session::get('success'))
        <div class="success py-3 mb-3 rounded-b-lg w-full">
            {{ $message }}
        </div>
    @endif
  <div class="list-products">

        <div class="list-products-top d-flex justify-content-around  ">
            <h1 class="text-3xl font-bold" >Products List</h1>
            <a href="{{ route('products.create') }}" class="btn btn-success " >
                <i class="fas fa-plus" ></i>
            </a>
        </div>
        <div class="list-products-body">
            <table class="table table-bordered text-center mt-4">
                    <tr>
                         <th>ID</th>
                         <th>Name</th>
                         <th>Detail</th>
                         <th>edit</th>
                         <th>delete</th>
                         <th>Show</th>
                    </tr>
                    @foreach ($Products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name}}</td>
                            <td class="overflow-hidden max-w-xs ">{{ $product->detail}}</td>
                            <form action="{{ route('products.destroy',$product->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                {{-- btn for edit --}}
                                <td>
                                    <a href="{{ route('products.edit',$product->id) }}"
                                        class="btn btn-outline-warning">
                                        edit
                                    </a>
                                </td>
                                {{-- btn for delete --}}
                                <td>
                                    <button type="submit" class="btn btn-outline-danger w-2/3 ">
                                        <i class="fas fa-trash-alt" ></i>
                                    </button>
                                </td>
                                {{-- btn for showing the infos --}}
                                <td>
                                    <a href="{{ route('products.show',$product->id) }}"
                                        class="btn btn-outline-primary">
                                        Show
                                    </a>
                                </td>
                            </form>
                        </tr>
                    @endforeach
            </table>
            {{ $Products->links() }}
        </div>
  </div>
</div>
@endsection