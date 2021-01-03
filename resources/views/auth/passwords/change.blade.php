@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="/newpassword">
        @csrf
        <div id="login">
            <h3 class="text-center text-info pt-5">Change Password</h3>
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                        <br>
                            <div class="form-group">
                                <label for="username" class="text-info">Old Password:</label><br>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="oldpassword"
                                    required autocomplete="current-password">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">New Password:</label><br>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">
                            </div>

                            <div class="form-group">
                                <label for="password" class="text-info">Confirm Password:</label><br>
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="text-right">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save Password') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection