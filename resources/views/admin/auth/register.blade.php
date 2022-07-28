{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
</head>
<style>
    @import "compass/css3";

    $button: rgba(148, 186, 101, 0.7);

    body {
        background: #384047;
        font-family: sans-serif;
        font-size: 10px
    }

    form {
        background: #fff;
        padding: 4em 4em 2em;
        max-width: 400px;
        margin: 50px auto 0;
        box-shadow: 0 0 1em #222;
        border-radius: 2px;

        h2 {
            margin: 0 0 50px 0;
            padding: 10px;
            text-align: center;
            font-size: 30px;
            color: darken(#e5e5e5, 50%);
            border-bottom: solid 1px #e5e5e5;
        }

        p {
            margin: 0 0 3em 0;
            position: relative;
        }

        input {
            display: block;
            box-sizing: border-box;
            width: 100%;
            outline: none;
            margin: 0;
        }

        input[type="text"],
        input[type="password"] {
            background: #fff;
            border: 1px solid #dbdbdb;
            font-size: 1.6em;
            padding: .8em .5em;
            border-radius: 2px;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            background: #fff
        }

        span {
            display: block;
            background: #F9A5A5;
            padding: 2px 5px;
            color: #666;
        }

        input[type="submit"] {
            background: $button;
            box-shadow: 0 3px 0 0 darken($button, 10%);
            border-radius: 2px;
            border: none;
            color: #fff;
            cursor: pointer;
            display: block;
            font-size: 2em;
            line-height: 1.6em;
            margin: 2em 0 0;
            outline: none;
            padding: .8em 0;
            text-shadow: 0 1px #68B25B;
        }

        input[type="submit"]:hover {
            background: rgba(148, 175, 101, 1);
            text-shadow: 0 1px 3px darken($button, 30%);
        }

        input[type="submit"]:hover {}

        label {
            position: absolute;
            left: 8px;
            top: 12px;
            color: #999;
            font-size: 16px;
            display: inline-block;
            padding: 4px 10px;
            font-weight: 400;
            background-color: rgba(255, 255, 255, 0);

            &.floatLabel {
                top: -11px;
                background-color: rgba(255, 255, 255, 0.8);
                font-size: 14px;
            }
        }
    }
</style>

<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{route('auth.register')}}" method="post">
        @csrf
        <h2>Sign Up</h2>
        <p>
            <label for="Email" class="floatLabel">Email</label>
            <input id="Email" name="email" type="text">
        </p>
        <p>
            <label for="Email" class="floatLabel">Name</label>
            <input id="Email" name="name" type="text">
        </p>
        <p>
            <label for="password" class="floatLabel">Password</label>
            <input id="password" name="password" type="password">
        </p>
        <p>
            <label for="confirm_password" class="floatLabel">Confirm Password</label>
            <input id="confirm_password" name="confirm_password" type="password">
        </p>
        <p>
            <input type="submit" value="Create My Account" id="submit">
        </p>
    </form>
</body>

</html> --}}

@extends('admin.layouts.auth')

@section('content')
    <div class="main-content">

        <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
            <div class="container px-4">
                <a class="navbar-brand" href="../index.html">
                    <img src="../assets/img/brand/white.png" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-collapse-main">
                    <div class="navbar-collapse-header d-md-none">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="../index.html">
                                    <img src="../assets/img/brand/blue.png">
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <button type="button" class="navbar-toggler" data-toggle="collapse"
                                    data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false"
                                    aria-label="Toggle sidenav">
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    
        <div class="header bg-gradient-primary py-7 py-lg-8">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-6">
                            <h1 class="text-white">Welcome!</h1>
                            <p class="text-lead text-light">Use these awesome forms to login or create new account in your
                                project for free.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        
        <div class="container mt--8 pb-5">
        
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="card bg-secondary shadow border-0">
                        <div class="card-header bg-transparent pb-5">
                            <div class="text-muted text-center mt-2 mb-4"><small>Sign up with</small></div>
                        </div>
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                                <small>Or sign up with credentials</small>
                            </div>
                            <form action="{{route('admin.auth.register')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Name" type="text" name="name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Email" name="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Password" name="password" type="password">
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-12">
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                                            <label class="custom-control-label" for="customCheckRegister">
                                                <span class="text-muted">I agree with the <a href="#!">Privacy
                                                Policy</a></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary mt-4">Create account</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
