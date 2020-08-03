@extends('auth.layout')

@section('content')

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <!-- Icon -->
            <div class="fadeIn first">
                <img src="/img/logo.png" id="icon" alt="Logo">
                @include('admin.errors')
            </div>

            <!-- Login Form -->
            <form method="post" action="/government/register">
                {{csrf_field()}}
                <input type="text" value="{{old('login')}}" id="name" class="fadeIn second beauty" name="name"
                       placeholder="Логин">
                <input type="text" value="{{old('email')}}" id="email" class="fadeIn second beauty" name="email"
                       placeholder="Email">
                <input type="password" id="password" class="fadeIn third beauty" name="password" placeholder="Пароль">

                <button type="submit" class="fadeIn fourth btnBeauty">Регистрация</button>
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Забыли пароль?</a>
            </div>

        </div>
    </div>
@endsection
