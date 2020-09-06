@extends('layouts.app')

@section('content')
<a href="/save">
<button type="button" class="btn btn-primary">add</button>
</a>
<div style="width:60%">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($cat as $item)
    <tr>
      <td> {{$item->id}} </td>
      <td>{{$item->name}}</td>
      <td> 
        <a href="cate/del/{{$item->id}}" class="btn btn-danger"> delete</a> 
        <a href="/edite" class="btn btn-defualt"> update</a> 
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection