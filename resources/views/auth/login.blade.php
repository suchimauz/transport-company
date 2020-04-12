@extends('layouts.auth')

@section('content')
<div id="loginbox">            
    <form id="loginform" role="form" method="POST" class="form-vertical" action="{{ url('/login') }}">
        {{ csrf_field() }}

        <div class="control-group normal_text"> <h3>Авторизация</h3></div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on"><i class="icon-envelope"></i></span><input type="text" name="email" value="{{ old('email') }}" placeholder="E-mail адрес" required autofocus/>
                    @if ($errors->has('email'))
                        <div>{{ $errors->first('email') }}</div>
                    @endif
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on"><i class="icon-lock"></i></span><input type="password" name="password" placeholder="Пароль" required/>
                    @if ($errors->has('password'))
                        <div>{{ $errors->first('password') }}</div>
                    @endif
                </div>
            </div>
        </div>
        <div class="form-actions">
            <a href="/register"><button type="button" class="btn btn-danger">Регистрация</button></a>
            <span class="pull-right"><input type="submit" class="btn btn-success" value="Войти" /></span>
        </div>
    </form>
</div>
@endsection
