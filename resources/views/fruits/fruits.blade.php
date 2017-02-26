<div align="center">
  <h2>
    Fruit Stand
  </h2>
</div>

@foreach ($fruits as $fruit)
  <h5>Fruit Name: {{$fruit->name}}</h5>
  <h5>Fruit Price: {{$fruit->price}}</h5>
  <h5>Fruit Best Used By: {{$fruit->expiration_date}}</h5>
@endforeach
