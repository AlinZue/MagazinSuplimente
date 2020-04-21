@extends('products.layout')

@section('content')

    <div class="row" style="margin-bottom: 15px">
        <div class="col-lg-10">
            <h3 class="text-center" style="background-color: white; ">Monster Shop Products</h3>
        </div>
        <div class="col-lg-2 text-center">
            <a class="btn btn-success " href="{{ route('products.create') }}"> Add Product</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
    @if(sizeof($products) > 0)
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Category</th>
                <th>Name</th>
                <th>Brand</th>
                <th>Photo</th>
                <th>Price</th>
                <th width="250px">More</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $product->category }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->brand }}</td>
                    <td><img src="{{ url('/') }}/images/{{ $product->photo }}" style="max-width: 100px;"></td>
                    <td>{{ $product->price }}Lei</td>
                    <td>
                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>


                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <div class="alert alert-alert">Start Adding to the Database.</div>
    @endif

    {!! $products->links() !!}

@endsection
