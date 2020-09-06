@extends('layouts.app')

@section('content')

@foreach($cat as $item)
 <form method="POST" action="cate/edit/{{$cat_id}}">
  @csrf
  <div class="form-group">
    <label for="exampleInputPassword1">edite</label>
    <input type="text" name="name" value="{{$item->name}}"  class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">edite</button>
</form>
@endforeach
@endsection