@extends('template')

@section('title')Purchases
@endsection

@section('content')
    @if(isset($products))
        <h1 class="h3 mb-3 fw-normal">Your purchases</h1>
        <ul class="list-group">
            @foreach($products as $product)
                <li class="list-group-item d-flex justify-content-end">
                    <div class="flex-column mx-auto ms-0">
                        <p class=" text-dark">{{$product->product->name}}</p>
                    </div>
                    <div class="flex-column align-self-start mx-2">
                        <span class="badge badge-primary badge-pill bg-dark">${{$product->product->price}}</span>
                    </div>
                    <div class="flex-column">
                        <p class=" text-secondary">{{$product->added_at}}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    @else
        <h3>Purchases is empty</h3>
    @endif

@endsection
