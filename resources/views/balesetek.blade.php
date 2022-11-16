@extends('layouts.master')
@section('title','balesetek')
@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-6">
            <form method="POST">
             @csrf
                <label>Időpontja:</label> <input type="text"> <br>
                <label>Sérülés leírása:</label>    <input type="text"> 
             </form>
        </div>
    </div>
</div>

@endsection