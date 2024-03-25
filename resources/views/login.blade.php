@extends('layouts.app')

@section('content')
<html>
<head>
    <style>
        .form__heading {
            font-weight: bold;
            font-size: 26px;
        }
        .field__label {
            font-size: 16px;
            font-weight: bold;
        }
        .field__input {
            height: 30px;
        }
        .field__error {
            background-color: red;
            color: white;
            font-size: 14px;
            font-weight: bold;
            font-family: Roboto Lt;
            background-radius: 10px;
            padding: 2px;
        }
        .button__login {
            background-color: dodgerblue;
            color: white;
            font-weight: bold;
            font-size: 14px;
            background-radius: 10px;
        }
    </style>
</head>
<body>
<div class="px-4 py-5 my-5 text-center bg-body-tertiary rounded-3">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1 class="form__heading">Login</h1>
            <div class="form__field">
                <label class="field__label">Username</label>
                <input type="text" class="field__input" name="username" />
            </div>
            <div class="form__field">
                <label class="field__label">Password</label>
                <input type="password" class="field__input" name="password" />
            </div>
            <label class="field__error" style="display: none;">&lt;error&gt;</label>
            <button type="submit" class="button__login">Login</button>
        </form>
        @if ($errors->has('error'))
    <div class="alert alert-danger">
        {{ $errors->first('error') }}
    </div>
@endif
    </div>
</body>
</html>
@endsection
