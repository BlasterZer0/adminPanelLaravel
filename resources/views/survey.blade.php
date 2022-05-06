@extends('theme.base')

@section('content')
    
    <div class="container text-center">    
        <form method="POST">
            @csrf
            <label for="start">From &nbsp;</label>
                <input type="date" name="dateFrom" class="col-form-label" value="<?php echo date('Y-m-d'); ?>" />
            <label for="start">&nbsp; To &nbsp;</label>
                <input type="date" name="dateTo" class="col-form-label" value="<?php echo date('Y-m-d'); ?>" />&nbsp;
            <input type="submit" name="submitDate" class="btn btn-success" value="Search" disabled/>
        </form>
    </div>

@endsection