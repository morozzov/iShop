@extends('template')

@section('title')Cart
@endsection

@section('content')

    @php
        use \Illuminate\Support\Facades\Session;
        $user = Session::get('user');
    @endphp

    @if(count($cartItems)==0)
        <h3>Cart is empty</h3>
    @else
        <h1 class="h3 mb-3 fw-normal">Your cart</h1>
        <div class="container p-2 my-3 bg-white border border-gray rounded-3">
            <div class="d-flex flex-row media justify-content-start">
                <p class="text-muted mx-4 me-1 ">Total cost:</p>
                <p class="align-self-start me-2 card-text" id="cartPrice">$0</p>
                <a href="/purchases/make" class="btn btn-outline-dark ms-auto">Buy this</a>
            </div>
        </div>
        @foreach($cartItems as $cartItem)
            @php
                $product = $cartItem->product;
            @endphp

            <div class="container mb-1 bg-white border border-gray rounded-3" id="cart_{{$cartItem->id}}">
                <div class=" d-flex flex-row media text-muted">
                    <a href="/product/{{$product->id}}">
                        <img class="img-fluid p-1 align-self-center mb-2 rounded d-block"
                             style="max-height: 10em; width: auto"
                             src="{{asset($product->image_path)}}"
                             data-holder-rendered="true">
                    </a>


                    <p class="ms-2 align-self-center media-body mb-0 small lh-125 ">
                        <strong class="d-block text-gray-dark">{{$product->name}}</strong>
                        ${{$product->price}}
                    </p>

                    <button class="align-self-center ms-auto btn btn-outline-danger"
                            onclick="buttonDeleteClick({{$cartItem->id}},{{$user->id}})">Delete
                    </button>

                </div>
            </div>

        @endforeach

        <script>
            getPriceItemsByUserId({{$user->id}});
        </script>
    @endif
@endsection
