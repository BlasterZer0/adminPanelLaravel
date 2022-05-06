@extends('theme.base')

@section('content')
    
    <div class="container text-center">    
        <h1>
            <b style="text-transform:capitalize;">
                {{ auth()->user()->name }}
            </b>, ¡you have successfully logged in!
        </h1>
        
        <?php 
            date_default_timezone_set('America/Caracas');  
            $DateAndTime = date('m-d-Y h:i:s a', time());  
            echo "The current date and time are $DateAndTime.";
        ?>
    </div>

@endsection