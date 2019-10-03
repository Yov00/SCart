@extends('layouts.layout')

@section('title')
    {{$category->name}}
@endsection

@section('content')
<div class="row" >
        <div class="col-md-12" style="text-align:center;padding:40px 0;">
        <h1>{{$category->name}}</h1>
      </div>
      </div>
      @if(count($category->products) < 1)
      <div class="alert-danger" style="padding:2px; text-align:center;width:50%;margin:0 auto;">
            Currently, there are no {{$category->name}}  in store
      </div>
      @endif
      <div class="containerer">
@foreach( $category->products as $product)
<a href="/show-product/{{$product->id}}" style="color:inherit;text-decoration:none;">
    <div class="product">
          <div class="product-image">
         
            <img   src="{{asset($product->imagePath)}}" alt="...">
          </div>


          <div class="product-title">
                <h3>{{$product->title}}</h3>
          </div>


        <div class="product-descritpion">
            {{$product->description}}
        </div>
        
        <div class="add-product-to-cart">
            <div class="product-price">
               {{$product->price}}$
            </div>
                 <div class="add-to-cart-button">
                          <a href="/add-to-cart/{{ $product->id }}" class="btn btn-success add-to-cart-btn" role="button">
                              <i class="fas fa-cart-plus"></i> Add to cart</a> 
                </div>
               
        </div> 
      </div>
              
    </a>
 
@endforeach
      </div>
@endsection