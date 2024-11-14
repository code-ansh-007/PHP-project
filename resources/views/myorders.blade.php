@extends('master')
@section('content')
<div class="container-fluid p-5 title-page text-white text-center">
    <h1 class="text-xl font-bold">My Orders Details</h1>
</div>
<div class="container cart-detail-wrap">


    @if(count($orders))

    @foreach ($orders as $order)

    <div class="row cart_product_body">
        <div class="col-md-3">
            <a href="/detail/{{$order->id}}">
                <img src="{{$order->gallery}}" width="200px">
            </a>
        </div>
        <div class="col-md-5">
            <h3><span class="font-bold">Name:</span> {{$order->name}}</h3>
            <h5><span class="font-bold">Delivery Status:</span> {{$order->status}}</h5>
            <h5><span class="font-bold">Address:</span> {{$order->address}}</h5>
            <h5><span class="font-bold">Payment Method:</span> {{$order->payment_method}}</h5>
            <h5><span class="font-bold">Payment Status:</span>
                @if ($order->payment_status == "pending")
                <span class="text-red-500">
                    {{$order->payment_status}}
                </span>
                @else
                <span class="text-green-500">
                    {{$order->payment_status}}
                </span> @endif
            </h5>
        </div>
    </div>
    @endforeach
    @else

    <h5 style="padding: 50px 0">There is no Order yet.</h5>

    @endif
</div>
</div>


@endsection