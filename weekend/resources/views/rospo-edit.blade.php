@extends('layouts.main_layout')

@section('content')

  <div>

    @if ($errors -> any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors -> all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>

    @endif

    <form  action="{{ route('update', $rospetto['id']) }}" method="post" class="flexme">
      @csrf
      @method('POST')

      <label for="name">NAME</label>
      <input type="text" name="name" value="{{ $rospetto['name'] }}">

      <label for="color">COLOR</label>
      <input type="text" name="color" value="{{ $rospetto['color'] }}">

      <label for="weight">WEIGHT</label>
      <input type="text" name="weight" value="{{ $rospetto['weight'] }}">

      <label for="dateOfBirth">DATE OF BIRTH</label>
      <input type="text" name="dateOfBirth" value="{{ $rospetto['dateOfBirth'] }}">
      <br><br>
      <input type="submit" name="submit" value="UPDATE ME">
    </form>
  </div>

@endsection
