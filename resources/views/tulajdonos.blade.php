@extends('layouts.master')
@section('title','tulajdonos')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <form method="POST">
             @csrf
                <label>Tulajdonos neve:</label> <input type="text"> <br>
                <label>Tulajdonjog kezdete:</label>    <input type="text"> <br>
                <label>Tulajdonjog vége:</label>     <input type="text">

             </form>
        </div>
    </div>
</div>

@endsection