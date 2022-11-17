@extends('layouts.master')
@section('title','balesetek')
@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-6">
            <form method="POST">
                @if (session()->get('Kész'))
                <div class="alert alert-success">
                    {{session()->get('Kész')}}
                </div>
                @endif
                 @csrf
                <label>Baleset időpontja:</label> <input type="date" id="baleset idopontja" name="baleset idopontja" class="form-control" value="{{old('baleset idopontja')}}"> <br>
                @error('tulajdonos neve')
                <div class="alert alert-danger">
                  {{$message}}
               </div>  
              @enderror
                <label>Sérülés leírása:</label>    <input type="text" id="serules leirasa" name="serules leirasa" class="form-control" value="{{old('serules leirasa')}}"> <br>
                @error('tulajdonos neve')
                <div class="alert alert-danger">
                  {{$message}}
               </div>  
              @enderror

                <button type="submit" class="btn btn-dark rounded-5" class="form-control">Rögzítés</button>
             </form>
        </div>
    </div>
</div>

@endsection