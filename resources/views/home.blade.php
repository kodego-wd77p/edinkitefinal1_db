@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1 class="brand">EDIN KITE</h1>
            <p class="HOME">HOME</p>
            <p class="OVERVEIW">OVERVEIW</p>
    </div>
        <br>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4">
                <div class="text-center square-container own-border">
    
                    <button type="button" class="btn btn-primary"  onclick='window.location.href = "/random-drink"'>TODO-APP NOTE</button>
                </div>
            </div>
        </div>
    </div>
         <br><br>
    <div class="container-fluid footer">
        <div class="container">
            <p>&copy; 2023 EDIN KITE TODO APP NOTE</p>
        </div>
    </div>
@endsection