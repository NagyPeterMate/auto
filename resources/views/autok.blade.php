@extends('layouts.master')
@section('title','autok')
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
                    <label>Rendszám</label> <input type="text" id="rendszam" name="rendszam" class="form-control" value="{{old('rendszam')}}"> <br>
                    @error('rendszam')
                    <div class="alert alert-danger">
                      {{$message}}
                   </div>  
                  @enderror
                    <label>Típus</label>    <input type="text" id="tipus" name="tipus" class="form-control" value="{{old('tipus')}}"> <br>
                    @error('tipus')
                    <div class="alert alert-danger">
                      {{$message}}
                   </div>  
                  @enderror
                    <label>Szín</label>     <input type="text" id="szin" name="szin" class="form-control" value="{{old('szin')}}"> <br>
                    @error('szin')
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