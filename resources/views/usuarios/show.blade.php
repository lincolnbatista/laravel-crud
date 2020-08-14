@extends('templates.template')
@section('content')
    <h1>user</h1>

    <form method="POST" action="/users">
        @csrf

        ...
    </form>



        <p>This is user <a href="/users/{{ $batata->id }}">{{ $batata->id }}</a> - {{$batata->name}}</p>

@endsection()
