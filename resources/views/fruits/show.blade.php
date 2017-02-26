@extends ('layouts.master')

@section('content')
  <div align="center">
    <h2>{{$fruit->name}}</h2>
    <img src="{{$fruit->photo}}" alt="photo" style="width:600px;height:500px;" class="img-circle">
  </div>
<h5>Fruit Price: {{$fruit->price}}</h5>
<h5>Fruit Best Used By: {{$fruit->expiration_date}}</h5>
@endsection
