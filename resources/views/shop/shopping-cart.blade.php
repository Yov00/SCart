@extends('layouts.layout')

@section('title')
     Shopping Cart
@endsection

@section('content')

    @if(Session::has('cart'))

        <div class="row">
            <div class="col-6 ScView">
                <h2>{{Auth::user()->name}}'s Products</h2>
                <ul style="padding:0;">
                    @foreach($products as $product)
                            <li class="list-group-item">
                                <div class="row">
                                      <div class="col-12">
                                  
                                        <span class="badge badge-success">
                                            {{ $product['qty'] }}
                                        </span>
                                        <strong>
                                        {{ $product['item']['title'] }}
                                        </strong>
                                
                                        <div class="btn-group float-right" >
                                                <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" style="font-size:15px;padding:2px 5px;">
                                                    Action <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" >
                                                    <li style="text-align:center;padding:10px 0;border-bottom:1px solid lightgray;"><a class="label" href="">Remove 1</a></li>
                                                    <li style="text-align:center;padding:10px 0;"><a href="">Remove all</a></li>
                                                </ul>
                                        </div>
                                    
                                 </div>
                               
                            </div>
                        
                           <div class="row">
                                <div class="col-12">
                                <span class="col-2">
                                    Price:
                                </span>
                                <span class="label label-success col-10">
                                    {{ $product['price'] }}$
                                </span>
                                </div>
                           </div>
                            
                            </li>
                    @endforeach
                    <li class="list-group-item">
                            <div class="row">
                                    <div class="col-6">
                                        <strong>Total: {{ $totalPrice }}$ </strong>
                                    </div>
                                    <div class="col-6">
                                    <a href="/checkout" type="button" class="btn btn-success float-right">
                                            Checkout
                                        </a>
                                    </div>
                                </div>
                    </li>
                </ul>
            </div>
        </div>

       
    @else
        <div class="row">
            <div class="col-6">
                <h1>No items in the Cart</h1>
            </div>
        </div>
    @endif

@endsection;