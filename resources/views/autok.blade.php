@extends('layouts.master')
@section('title','autok')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-6">
                <form method="POST">
                 @csrf
                    <label>Rendszám</label> <input type="text"> <br>
                    <label>Típus</label>    <input type="text"> <br>
                    <label>Szín</label>     <input type="text">
                 </form>
            </div>
        </div>
    </div>

@endsection