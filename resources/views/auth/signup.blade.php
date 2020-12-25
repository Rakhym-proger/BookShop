@extends('layout.layout')

@section('title')Регистрация@endsection

@section('main_content')
    <style>
        .error {
            color: red;
            font-style: italic;
        }
    </style>
    <div class="row">
        <div class="col-6 offset-3">
            <form action="{{route('signup')}}" method="post" novalidate id="registerForm">
                @csrf
                <div class="form-group">
                    <label for="email">Email адерес</label>
                    <input type="email" name="email"
                           class="form-control{{$errors->has('email') ? ' is-invalid' : ''}}"
                           id="email" placeholder="Введите email"
                           value="{{ old('email') }}">
                    @if($errors->has('email'))
                        <small class="help-block text-danger">
                            {{ $errors->first('email') }}
                        </small>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" name="password"
                           class="form-control{{$errors->has('password') ? ' is-invalid' : ''}}"
                           id="password" placeholder="Введите пароль">
                    @if($errors->has('password'))
                        <small class="help-block text-danger">
                            {{ $errors->first('password') }}
                        </small>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Повторите пароль</label>
                    <input type="password" name="password_confirmation"
                           class="form-control{{$errors->has('password_confirmation') ? ' is-invalid' : ''}}"
                           id="password_confirmation" placeholder="Подтвердите пароль">
                    @if($errors->has('password_confirmation'))
                        <small class="help-block text-danger">
                            {{ $errors->first('password_confirmation') }}
                        </small>
                    @endif
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="name">Имя</label>
                        <input type="text" name="name"
                               class="form-control{{$errors->has('name') ? ' is-invalid' : ''}}"
                               id="name" placeholder="Имя"
                               value="{{ old('name') }}">
                        @if($errors->has('name'))
                            <small class="help-block text-danger">
                                {{ $errors->first('name') }}
                            </small>
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <label for="surname">Фамилия</label>
                        <input type="text" name="surname"
                               class="form-control{{$errors->has('surname') ? ' is-invalid' : ''}}"
                               id="surname" placeholder="Фамилия"
                               value="{{ old('surname') }}">
                        @if($errors->has('surname'))
                            <small class="help-block text-danger">
                                {{ $errors->first('surname') }}
                            </small>
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <label for="date">Дата рождения</label>
                        <input type="date" name="date"
                               class="pr-4 form-control{{$errors->has('date') ? ' is-invalid' : ''}}"
                               id="date"
                               value="{{ old('date') }}">
                        @if($errors->has('date'))
                            <small class="help-block text-danger">
                                {{ $errors->first('date') }}
                            </small>
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn btn-warning w-100 m-0">Регистрация</button>
            </form>
        </div>
    </div>


    <script>

        if ($("#registerForm").length > 0) {
            $('#registerForm').validate({
                rules: {
                    name: {
                        required: true,
                        maxlength: 50
                    },
                    surname: {
                        required: true,
                        maxlength: 50
                    },
                    date: {
                        required: true
                    },
                    email: {
                        required: true,
                        maxlength: 50,
                        email: true,
                    },
                    password: {
                        required: true,
                        minlength: 8,
                    },
                    password_confirmation: {
                        required: true,
                        minlength: 8,
                        equalTo: '#password'
                    },
                },
                messages: {
                    name: {
                        required: "Please enter name",
                    },
                    surname: {
                        required: "Please enter surname",
                    },
                    date: {
                        required: "Please enter date",
                    },
                    email: {
                        required: "Please enter email",
                        email: "Please enter valid email",
                        maxlength: "The email name should less than or equal to 50 characters",
                    },
                    password: {
                        required: "Please enter password",
                        minlength: "Password must contain at least 8 characters",
                    },
                    password_confirmation: {
                        required: "This field is required",
                        minlength: "Password must contain at least 8 characters",
                        equalTo: "Passwords doesn't match"
                    },

                },
            });
        }
    </script>
@endsection
