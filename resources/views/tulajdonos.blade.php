@extends('layouts.master')
@section('title','tulajdonos')
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
                <label>Tulajdonos neve:</label> <input type="text" id="tulajdonos neve" name="tulajdonos neve" class="form-control" value="{{old('tulajdonos neve')}}"> <br>
                @error('tulajdonos neve')
                <div class="alert alert-danger">
                  {{$message}}
               </div>  
              @enderror
                <label>Tulajdonjog kezdete:</label>    <input type="date" id="tulajdonjog kezdete" name="tulajdonjog kezdete" class="form-control" value="{{old('tulajdonjog kezdete')}}"> <br>
                @error('tulajdonjog kezdete')
                <div class="alert alert-danger">
                  {{$message}}
               </div>  
              @enderror
                <label>Tulajdonjog vége:</label>     <input type="date" id="tulajdonjog vege" name="tulajdonjog vege" class="form-control" value="{{old('tulajdonjog vege')}}"> <br>
                @error('tulajdonjog vege')
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