@extends('layouts.main_layout')

  @section('content')

    @if (session('success'))
      <h2>{{ session('success') }}</h2>
    @endif

    <a href="{{ route('create') }}">-genera rospetto-</a>


    <ul>
      @foreach ($rospetti as $rospetto)
        <li class='ninfea'>
          <a href="{{ route('show', $rospetto['id']) }}">
            {{ $rospetto['name'] }}
          </a>
        </li>
      @endforeach
    </ul>

  @endsection
