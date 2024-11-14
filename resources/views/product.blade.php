@extends('master')
@section('content')

<head>
    <style>
        .img-style {
            height: 500px;
            overflow: hidden;
            width: 100%;
        }

        .trending-styles {
            margin-top: 20px;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<div class="custom-slider">

    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            @foreach ($products as $item)
            <a href="detail/{{$item['id']}}">
                <div class="carousel-item {{$item['id']==1?'active':''}}">
                    <div class="img-style">
                        <img src="{{$item['gallery']}}" class="d-block w-100 h-100 object-fit-cover">
                    </div>
                    <div class="carousel-caption d-none d-md-block slider-text">
                        <h4>{{$item['name']}}</h4>
                        <p>{{$item['description']}}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        <button class="carousel-control-prev slider-arrow" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next slider-arrow" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="trending-wrapper trending-styles">
    <h3 class="text-xl font-bold mb-5">Trending Products</h3>
    @foreach ($products as $item)
    <a href="detail/{{$item['id']}}">
        <div class="trending-item {{$item['id']==1?'active':''}}">
            <img src="{{$item['gallery']}}" class="trending-image rounded-xl ">
            <div>
                <h4>{{$item['name']}}</h4>
                <h4 class="text-sm">₹{{$item['price']}}</h4>
            </div>
        </div>
    </a>
    @endforeach
</div>


@endsection