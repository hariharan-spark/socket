@extends('layouts.app')

@section('content')

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($getUser as $user)
            <tr>
                <td> {{$user->id}} </td>
                <td> {{$user->name}} </td>
                <td> {{$user->email}} </td>
                <td> <a href="/chatWithFriend/{{$user->id}}" class="btn btn-danger" >chat</a></td>
            </tr>
           @endforeach
  </tbody>
</table>
</div>
@endsection
