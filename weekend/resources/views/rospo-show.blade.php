@extends('layouts.main_layout')

  @section('content')

    <div class="">

      @if (session('success'))
        <h2>{{ session('success') }}</h2>
      @endif

      <ul>
        <li><strong>Name: </strong>{{ $rospetto['name'] }}</li>
        <li><strong>Color: </strong>{{ $rospetto['color'] }}</li>
        <li><strong>Weight: </strong>{{ $rospetto['weight'] }}Kg</li>
        <li><strong>Date of birth: </strong>{{ $rospetto['dateOfBirth'] }}</li>
      </ul>
      <br>
      <a href="{{ route('edit', $rospetto['id']) }}">-modifica rospetto-</a>
      <a href="{{ route('delete', $rospetto['id']) }}">-elimina rospetto-</a>
    </div>

    <div class="">
      <a href="{{ route('home') }}">
        <p>Torna alla lista dei rospi</p>
      </a>
    </div>
  @endsection
