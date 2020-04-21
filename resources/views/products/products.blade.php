@extends('products.layout')

@section('title', 'Products')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    <div class="container products">

        <div class="row">

            @foreach($products as $product)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        @if(strpos($product->photo, 'http') !== 0)
                            <img src="{{ url('/') }}/images/{{ $product->photo }}" style="max-width: 200px;max-height: 162px">

                        @else
                            <img src="{{ $product->photo }}" style="max-width: 200px;max-height: 162px">
                        @endif
                        <div class="caption">
                            <div class="name-brand" style="max-width: 200px;height: 162px">
                            <h4>{{ $product->name }}</h4>
                            <h3>{{ $product->brand }}</h3>
                            </div>
                            <p><strong>Price: </strong> {{ $product->price }}Lei</p>
                            <p class="btn-holder"><a href="{{ url($product->id) }}" class="btn btn-success btn-block text-center" role="button">Show</a> </p>
                            <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-info btn-block text-center" role="button">Add to cart</a> </p>
                        </div>
                    </div>
                    <br>
                </div>
            @endforeach

        </div><!-- End row -->

    </div>

@endsection
