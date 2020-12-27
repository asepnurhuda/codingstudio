<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
@php
    $total = 0;
@endphp
    <div class="container">
    <h1>Anda telah membeli : </h1>

    <table class="table">
        <thead class="thead-light">
            <tr>
            <th scope="col-lg-1">#</th>
            <th scope="col">Product</th>
            <th scope="col-lg-3">Price</th>
            <th scope="col-lg-1">Qty</th>
            <th scope="col-lg-3">Subtotal</th>
            </tr>
        </thead>
        @foreach($carts as $cart)
        <tbody>
            <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $cart->product->name }}</td>
            <td>IDR. {{ number_format($cart->product->price) }}</td>
            <td>{{ $cart->qty }}</td>
            <td>IDR. {{ number_format($cart->product->price * $cart->qty) }}</td>
            </tr>
                @php 
                    $total += $cart->product->price * $cart->qty;
                @endphp
        </tbody>
        @endforeach
        
    </table>
    <h2>Total pesanan Anda IDR. {{ number_format($total) }}</h2>
    </div>

<script src="{{asset('js/app.js')}}"></script>    
</body>
</html>