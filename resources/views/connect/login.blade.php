@extends('connect.master')
@section('title', 'Login')
@section('content')
<div class="box">
    <div class='header'>
        <a href="{{ url('/')}}">
            <img src="{{ url('/static/images/logo.png')}}">
        </a>
    </div>
    <div class="inside">
    {!! Form::open(['url' => '/login']) !!}
    <label for="email">Correo electrónico</label>
    <div class="input-group">
        <div class="input-group-text"><i class="fa-solid fa-envelope"></i></div>
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>

    <label for="password" class="mtop">Contraseña</label>
    <div class="input-group">
        <div class="input-group-text"><i class="fa-solid fa-lock"></i></i></div>
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>
    {!! Form::submit('Aceptar', ['class' => 'btn btn-dark mtop']) !!}
    {!! Form::close() !!}
    </div>
</div>
@stop