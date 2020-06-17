@extends('welcome')

@section('pory')
  <div class="porygon">

    @foreach ($poryDB as $pory)
      <div class="pory">
        {{$pory['nome']}} <br>
        {{$pory['tipo']}} <br>
        {{$pory['altezza']}} <br>
        {{$pory['peso']}}
      </div><br>
    @endforeach

  </div>
@endsection
