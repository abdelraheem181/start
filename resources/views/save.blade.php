@extends('layouts.app')

@section('content')
<form method="POST" action="save">
  @csrf
  <div class="form-group">
    <label for="exampleInputPassword1">Category</label>
    <input type="text" name="name" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection