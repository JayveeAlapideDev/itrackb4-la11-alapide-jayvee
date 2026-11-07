@extends('layouts.app')

@section('title', $product ['name'])
@section('content')

<h1>Stocks Status</h1>
<h3>Jayvee Alapide</h3>
<header class="bg-white">
 <h1>{{$product ['name'] }}</h1>

        <p>Price {{$product['price'] }}</p>
        <p>Stock {{$product['stock'] }}</p>
        <p>Brand {{$product['brand']->name }}</p>
        <p>Package {{$product['package'] }}</p>
        
</header>
          <p><a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a></p>-
@endsection