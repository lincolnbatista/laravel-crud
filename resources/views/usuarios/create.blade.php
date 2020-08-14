@extends('templates.template')
@section('content')

    <h1>Novo Usuario</h1>
<form method="POST" action="/users">
@csrf
    <label for="name">Usuário</label>

    <input name="name" id="name" type="text" class="form-control @error('name') is-invalid @enderror">

    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <label for="email">E-mail:</label>

    <input name="email" id="email" type="email" class="form-control @error('email') is-invalid @enderror">

    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <br>
    <label for="password">Senha</label>

    <input name="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror">

    @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <input type="submit" value="Salvar">

</form>

@endsection()
