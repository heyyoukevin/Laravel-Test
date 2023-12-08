@extends("layouts.userheadfoot")

@section("page-content")

<main>
  <br><br>
  <div class="user-info">
    <h1>Welcome, {{$user->name}}</h1>
    <br>
    <p><strong>Your Email ID : </strong>{{$user->email}}</p>
    <br>
  </div>
</main>

@endsection