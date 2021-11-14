@extends('template')

@section('title')Settings
@endsection

@section('content')

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <link href="{{asset('mycss/settings.css')}}" rel="stylesheet">

<div class="form-signin">
    <form method="post" action="/users/save">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Settings</h1>

        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="Login" name="login" value="{{$user->login}}">
            <label for="floatingInput">Login</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control name" id="floatingInput" placeholder="Name" name="name" value="{{$user->name}}">
            <label for="floatingInput">Name</label>
        </div>
        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="Login" name="email" value="{{$user->email}}">
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating mb-0">
            <input type="password" class="form-control pswrd" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control pswrd2" id="floatingPassword" placeholder="Repeated password" name="password2">
            <label for="floatingPassword">Repeat password</label>
        </div>

        <button class="w-100 btn btn-lg btn-outline-dark" type="submit">Save</button>
    </form>
</div>
@endsection

