@extends('template')

@section('title')Home
@endsection

@section('content')
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Is it shop?</h1>
            <p class="col-md-8 fs-4">You will decide. But, we're the best among the best. There is no reason for doubt.
                Having ordered from us once, you will not think about choosing a store in the future. Our clients love
                us, and we a priori love them.</p>
        </div>
    </div>

    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100 p-5 text-white bg-dark rounded-3">
                <h2>Buy new iPhone</h2>
                <p>Choose iPhone for yourself or your loved one right now. And we will help you.</p>
                <a href="/productsByCategory/1"><button class="btn btn-outline-light">View</button></a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5 bg-light border rounded-3">
                <h2>Check Mac</h2>
                <p>Do you want to be more productive and faster? We have great helpers for this. See if you can find a
                    new friend.</p>
                <a href="/productsByCategory/4" class="btn btn-outline-secondary">Check it</a>
            </div>
        </div>
    </div>
@endsection
