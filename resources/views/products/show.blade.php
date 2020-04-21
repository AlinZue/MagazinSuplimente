@extends('products.layout')

@section('content')
    <h1 style="color: white;">Product {{ $product->name }}</h1>


    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="jumbotron text-left">
                <p>
                    <strong>Name:</strong> {{ $product->name }}<br>
                    <strong>Brand:</strong> {{ $product->brand }}<br>
                    <strong>Quantity:</strong> {{ $product->quantity }}<br>
                    <strong>Description:</strong> {{ $product->description }}<br>
                    <strong>Size:</strong> {{ $product->size }}<br>
                    <strong>Composition:</strong> {{ $product->composition }}<br>
                </p>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <img src="{{ url('/') }}/images/{{ $product->photo }}" style="max-width: 200px;">
            <br>
            <br>
            <h4 style="width: 200px; margin-left: 15px;"><strong>Price: </strong> {{ $product->price }} Lei</h4><br>
            <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-success btn-block text-center" role="button" style="width: 200px;">Add to cart</a> </p>
        </div>
    </div>
    <a href="{{ URL::previous() }}" class="btn btn-warning btn-block text-center" role="button" style="width: 80px;">Go Back</a>
@endsection
