@extends('layouts.master')
<div align="center">
    @section('title')
      Fruit Stand
    @endsection
</div>
@section('content')
  <div align="center">
    <h2>Fruits</h2>
  </div>
  @foreach ($fruits as $fruit)
  <div class="row">
    <div class="col-md-6 well">
      <a href="#" style="text-decoration : none">
        <h5>Fruit Name: {{$fruit->name}}</h5>
        <h5>Fruit Price: {{$fruit->price}}</h5>
        <h5>Fruit Best Used By: {{$fruit->expiration_date}}</h5>
        <img src="{{$fruit->photo}}" alt="photo" style="width:300px;height:200px;">
    </a>
    </div>
  </div>
  @endforeach
@endsection
