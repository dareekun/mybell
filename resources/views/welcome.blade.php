@extends('layouts.app')

@section('content')
<div class="container-md">
    <div class="row">
        <div class="col-md-5">
            <div class="row">
                <div class="col-md-12">
                    <img class="py-2" src="{{ asset('image/logo.png') }}" alt="">
                    <h1 class="my-3">Bell-e <i class="fas fa-bell"></i> System</h1>
                    <p class="my-1">is a collaborative program between php language and python language to create an
                        open source-based bell system, where users can change and tweak the program according to their
                        needs. </p>
                </div>
            </div>
        </div>
        <div class="col-md-7">
        <form method="POST" action="{{ route('login') }}">
        @csrf
        <div id="login">
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <br>
                                <h3 class="text-center text-info">Login</h3>
                                <br><br>
                                <div hidden class="form-group">
                                    <label for="username" class="text-info">Username:</label><br>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="admin@admin.com" required autocomplete="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="text-info">Password:</label><br>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">
                                </div>

                                <div class="form-group">

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label text-info" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                <div class="text-right">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
        </div>
    </div>
    <div class="row my-5">
    <div class="col-md-12">
    <h4>Please visit my social media at</h4>
    <a class="btn btn-sm btn-outline-dark" href="http://www.dareekun.com"><i class="fas fa-globe-asia"></i> Website</a>
    <a class="btn btn-sm btn-outline-dark" href="http://github.com/dareekun"><i class="fab fa-github-square"></i> Github</a>
    <a class="btn btn-sm btn-outline-dark" href="http://facebook.com/dareekun"><i class="fab fa-facebook-square"></i> Facebook</a>
    <a class="btn btn-sm btn-outline-dark" href="https://www.linkedin.com/in/dareekun/"><i class="fab fa-linkedin"></i> Linkedin</a>
    </div>
    </div>
</div>
@endsection