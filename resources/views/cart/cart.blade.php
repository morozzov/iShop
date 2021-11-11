@extends('template')

@section('title')Cart
@endsection

@section('content')

    {{--    <h1>{{$findRows->product_id}}</h1>--}}

    @if(count($cartItems)==0)
        <h3>Cart is empty</h3>
    @else

        <h6 class="border-bottom border-gray pb-2 mb-0">Your cart</h6>
        @php $summ=0 @endphp
        @foreach($cartItems as $cartItem)
            @php
                $product = $cartItem->product;
                $summ+=$product->price
            @endphp

            <div class="container mb-1 bg-white border border-gray rounded-3">
                <div class="d-flex flex-row media text-muted  ">
                    <div class="form-check align-self-center" id="formCheck">
                        <input class="form-check-input" type="checkbox" id="check" >
                    </div>

                    <img class="img-fluid p-1 align-self-center mb-2 rounded h-25 d-block" style="width: 100px;"
                         src="{{asset($product->image_path)}}"
                         data-holder-rendered="true">


                    <p class="ms-2 align-self-center media-body mb-0 small lh-125 ">
                        <strong class="d-block text-gray-dark">{{$product->name}}</strong>
                        ${{$product->price}}
                    </p>

                    <button class="align-self-center ms-auto btn btn-outline-danger">Delete</button>

                </div>
            </div>
            {{--            <div class="media text-muted pt-3">--}}
            {{--                <div class="col">--}}
            {{--                    <img  class="mr-2 rounded col-1" src="{{asset($product->image_path)}}" data-holder-rendered="true">--}}
            {{--                    <p class="media-body   mb-0 small lh-125 border-bottom border-gray">--}}
            {{--                        <strong class="d-block text-gray-dark">{{$product->name}}</strong>--}}
            {{--                        ${{$product->price}}--}}
            {{--                    </p>--}}
            {{--                </div>--}}
            {{--            </div>--}}


            {{--            <div class="col">--}}
            {{--                <div class="card shadow-sm">--}}
            {{--                    <img class="img-fluid" src="{{asset($product->image_path)}}">--}}
            {{--                    <div class="card-body">--}}
            {{--                        <p class="card-title">{{$product->name}}</p>--}}
            {{--                        <p class="card-text">{{$product->description}}</p>--}}

            {{--                        <div class="d-flex justify-content-between align-items-center">--}}
            {{--                            <div class="btn-group">--}}
            {{--                                <button type="button" class="btn btn-sm btn-outline-secondary">Learn more</button>--}}
            {{--                                <button type="button" class="btn btn-sm btn-outline-secondary">To card</button>--}}
            {{--                            </div>--}}

            {{--                            <div class="progress w-25">--}}
            {{--                                <div class="progress-bar bg-dark" role="progressbar"--}}
            {{--                                     style="width: {{$product->rating*20}}%" aria-valuenow="25" aria-valuemin="0"--}}
            {{--                                     aria-valuemax="100">{{$product->rating}}</div>--}}
            {{--                            </div>--}}
            {{--                            <small class="text-muted">${{$product->price}}</small>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        @endforeach
        <div class="container p-2 my-3 bg-white border border-gray rounded-3">
            <div class="d-flex flex-row media justify-content-start">
                <p class="text-muted mx-4 me-1 ">Total cost:</p>
                <p class="align-self-start me-2 card-text"> ${{$summ}}</p>
                <button class="btn btn-outline-dark ms-auto">Buy this</button>
            </div>
        </div>
    @endif
@endsection
