@extends('layouts.layout')

@section('title')
    {{$product->title}}
@endsection

@section('content')


    <div class="productWrapper">
            <div class="productImage">
            <img src="{{$product->imagePath}}" width="60%" alt="">
             </div>
        <div class="productTitle">
            {{$product->title}}
        </div>
        <div class="productDescription">
            {{$product->description}}
        </div>
        <div class="buyProduct">
                <a id="addProductToCart" href="/add-to-cart/{{ $product->id }}" class="btn btn-success">
                   Add to cart
                </a>
         </div>
          
    </div>


@endsection