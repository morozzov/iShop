@extends('template')

@section('title')Products
@endsection

@section('content')
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach($products as $product)
            <div class="col">
                <div class="card shadow-sm p-1">
                    <div class="d-flex flex-row media text-muted  ">
                        <img class="img-fluid col-8 h-25 m-auto" src="{{asset($product->image_path)}}">
                    </div>
                    <div class="card-body">
                        <p class="card-title">{{$product->name}}</p>
                        <p class="card-text">{{$product->description}}</p>

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="/product/{{$product->id}}" class="btn btn-sm btn-outline-dark">
                                    Learn more
                                </a>
                                <button type="button" class="btn btn-sm btn-outline-dark" onclick="buttonAddClick({{$product->id}})">To card</button>
                            </div>

                            <div class="progress w-25">
                                <div class="progress-bar bg-dark" role="progressbar"
                                     style="width: {{$product->rating*20}}%" aria-valuenow="25" aria-valuemin="0"
                                     aria-valuemax="100">{{$product->rating}}</div>
                            </div>
                            <small class="text-muted">${{$product->price}}</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @if(count($products)==0)
            <p class="text-secondary">Category is empty</p>
        @endif
    </div>

    <script src="{{asset('myjs/addNewItemToUser.js')}}"></script>
@endsection
