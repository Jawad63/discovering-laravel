@extends('template')

@section('body')

<form method="post"> 
    @csrf
  <div class="form-group">
    <label for="form">This is a form:</label>
    <input type="text" name="verou" id="verou" />
    <input type="submit" value="hit">
  </div>
</form>

@endsection