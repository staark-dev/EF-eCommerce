@extends('layouts.app')

@section('content')
<body >
<div class="container" id="login">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>
            
            
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group ">

                            <div style="width: 100%">
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div style="width: 100%">
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                
                                <div class="form-group form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                  </div>
                 
                         
                    
                                <button type="submit" class="btn btn-success" style="width: 100%">
                                    {{ __('Login') }}
                                </button>
                        
                        <br>
                        <div style="text-align: center;">     
                        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="text-decoration:none">
                                        {{ __('Forgot Your Password?') }}
                                    </a><span>or </span><a href="{{ route('register') }}" style="text-decoration:none;margin-left:5px">Register</a>
                                @endif
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection

<style scoped>
    body{
        background-image: linear-gradient(-90deg, white, lightblue);
    }

</style>