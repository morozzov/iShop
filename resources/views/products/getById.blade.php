@extends('template')

@section('title'){{$product->name}}
@endsection

@section('content')
    @php
        use \Illuminate\Support\Facades\Session;
        $user = Session::get('user');
    @endphp
    @if($product==null)
        <p class="text-secondary">Product not found</p>
    @else
        <div class="d-flex">
            <div class="col">
                <img class="img-fluid  m-auto" src="{{asset($product->image_path)}}">
            </div>
            <div class="col">

                <div class="row">
                    <h1>{{$product->name}}</h1>
                </div>
                <div class="row">
                    <p class="text-secondary">{{$product->description}}</p>
                </div>

                <div class="progress m-1">
                    <div class="progress-bar bg-dark" role="progressbar"
                         style="width: {{$product->rating*20}}%" aria-valuenow="25" aria-valuemin="0"
                         aria-valuemax="100">{{$product->rating}}</div>
                </div>

                <div class="col">
                    <h5 class="text-secondary">${{$product->price}}</h5>
                </div>

                <button class="btn btn-outline-dark" onclick="buttonAddClick({{$product->id}},{{$user->id}})">To cart</button>
            </div>
        </div>
    @endif
    <script src="{{asset('myjs/addNewItemToUser.js')}}"></script>
@endsection
