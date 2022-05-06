@extends('theme.base')

@section('content')

    <div class="container text-center">
        <h1>User Profile</h1>

        <div class="card text-start|center|end">
            <img class="card-img-top" src="" alt="">
            <div class="card-body">
                <h4 class="card-title">{{ auth()->user()->name . " " . auth()->user()->lastname }}</h4>
                <a>{{ auth()->user()->rol }}</a>
                <p class="card-text">{{ auth()->user()->email }}</p>
                <p class="card-text">{{ auth()->user()->phone }}</p>
                <p class="card-text">{{ auth()->user()->address }}</p>
            </div>
        </div>

    </div>

@endsection