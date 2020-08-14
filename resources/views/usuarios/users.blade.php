@extends('templates.template')
@section('content')
<h1>users</h1>

<a href="/users/new">Novo</a>

@foreach ($users as $user)
    <p>This is user <a href="/users/{{ $user->id }}">{{ $user->id }}</a> - {{$user->name}}</p>
@endforeach
@endsection()
