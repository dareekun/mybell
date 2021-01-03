@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('proccesspassword') }}" onSubmit="return checkPassword(this)">
        @csrf
        <div id="login">
            <h3 class="text-center text-info pt-5">Change Password</h3>
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            @if (count($errors) > 0)
                            @foreach ($errors->all() as $error)
                            <small @if ($error=="Password Berhasil Dirubah" ) style="color:#7bc043" @else
                                style="color:#fe4a49" @endif class="form-text"><strong>{{$error}}</strong></small>
                            @endforeach
                            @endif
                            <br>
                            <div class="form-group">
                                <label for="username" class="text-info">Old Password:</label><br>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="oldpassword"
                                    required autocomplete="current-password">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">New Password:</label><br>
                                <input id="password1" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password1"
                                    required autocomplete="new-password">
                            </div>

                            <div class="form-group">
                                <label for="password" class="text-info">Confirm Password:</label><br>
                                <input id="password2" type="password" class="form-control" name="password2" required
                                    autocomplete="new-password">
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

<script>
function checkPassword(form) {
    password1 = form.password1.value;
    password2 = form.password2.value;
    if (password1 == '')
        alert("Please enter Password");
    else if (password2 == '')
        alert("Please enter confirm password");
    else if (password1 != password2) {
        alert("\nPassword did not match: Please try again...")
        return false;
    } else {
        return true;
    }
}
</script>
@endsection