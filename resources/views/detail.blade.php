@extends('master')
@section('content')
<div class="container-fluid p-5 title-page text-white text-center">
    <h1 class="text-xl font-bold">Product Detail</h1>
</div>
<div class="container detail-wrap">
    <div class="row">
        <div class="col-md-6">
            <img src="{{$product['gallery']}}" class="detail-image rounded-md">
        </div>
        <div class="col-md-6">
            <a href="/" class="text-blue-500 underline">Go Back</a>
            <div class="flex flex-col gap-2">
                <h2 class="text-xl font-bold">{{$product['name']}}</h2>
                <h5><b>Price:</b> {{$product['price']}}</h5>
                <h5><b>Detail:</b> {{$product['description']}}</h5>
                <h5><b>Category:</b> {{$product['category']}}</h5>
            </div>
            <br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-primary">Add to Cart</button>
            </form>

            <br>
            <a class="btn btn-success" href="ordernow">Buy Now</a>

        </div>
    </div>
</div>


@endsection