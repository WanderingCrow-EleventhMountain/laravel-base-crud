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

    <form  action="{{ route('store') }}" method="post" class="flexme">
      @csrf
      @method('POST')

      <label for="name">NAME</label>
      <input type="text" name="name" value="{{ old('name') }}">

      <label for="color">COLOR</label>
      <input type="text" name="color" value="{{ old('color') }}">

      <label for="weight">WEIGHT</label>
      <input type="text" name="weight" value="{{ old('weight') }}">

      <label for="dateOfBirth">DATE OF BIRTH</label>
      <input type="text" name="dateOfBirth" value="{{ old('dateOfBirth') }}">
      <br><br>
      <input type="submit" name="submit" value="Crea rospetto">
    </form>
  </div>

@endsection
