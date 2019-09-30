@extends('layouts.layout')

@section('title')
    Checkout
@endsection


@section('content')

<div class="row">
    <div class="col-6" id='checkOutContainer'>
        <h1>Checkout</h1>
        <h5>
            Your Total: ${{ $total }}
        </h5>
    <form class="container" style="" id="checkoutUserInfo" action="/checkout" method="POST">
        <div class="row">
            <div class="col-12">
                <h4 style="text-align:center;">Card Information</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="name" class="checkbox-label">Name</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="address" class="checkbox-label">Address</label>
                    <input type="text" id="address" name="address" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="card-name" class="checkbox-label">Card Holder Name</label>
                    <input type="text" id="card-name" name="card-name" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="card-number" class="checkbox-label">Card Number</label>
                    <input type="text" id="card-number" name="card-number" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="card-expiry-month" class="checkbox-label">Expiration Month</label>
                    <input type="text" id="card-expiry-month" name="card-expiry-month" class="form-control" required>
                </div>
            </div>
            <div class="col-6">
                    <div class="form-group">
                        <label for="card-expiry-year" class="checkbox-label">Expiration Year</label>
                        <input type="text" id="card-expiry-year" name="card-expiry-year" class="form-control" required>
                    </div>
        </div>
      
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="card-cvc" class="checkbox-label">CVC</label>
                    <input type="text" id="card-cvc" name="card-cvc" class="form-control" required>
                </div>
            </div>
        </div>
        {{ csrf_field() }}

        <button class="btn btn-success col-12" style="margin-top:20px;" type="submit">Buy Now</button>
    </form>
    </div>
</div>

@endsection