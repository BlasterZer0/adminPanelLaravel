@extends('theme.base')

@section('content')

    <div class="container text-center">
        <h1>User Profile</h1>
        
        <div class="card text-start|center|end text-center">
            <div class="text-center">
                <img class="card-img-top py-3" src="{{ URL::asset('../resources/img/logo-427x436.png') }}" style="width:10%;border-radius: 50%;">
            </div>
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