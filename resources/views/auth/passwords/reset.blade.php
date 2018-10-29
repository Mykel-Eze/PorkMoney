@extends('layouts.app')

@section('custom-css')

<link href="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/css/fonts.css" media="screen" rel="stylesheet" type="text/css">
<link href="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/css/materialize.css" media="screen" rel="stylesheet" type="text/css">
<link href="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/css/styles.css?v=1.1.3" media="screen" rel="stylesheet" type="text/css">
<style>
        body{
            height: 100vh;
            /* overflow: hidden; */
        }

        .navbar-brand.brand-logo img{
            width: 150px;
        }

        footer{
            position: absolute;
            width: 100%;
            bottom: 0;
        }

        .navbar-inverse{
            background: white;
            color: black;
            box-shadow: none;
        }

        h4.card-header{
            background: transparent;
            text-align: center;
            font-family: var(--font);
            font-size: 2.2rem;
            color: var(--pry-color);
            font-weight: 100;
            border: none;
        }

        .card{
            border: 1px solid var(--pry-color);
        }

        .btn-container{    
            text-align: center;
            margin: auto;
            margin-top: -10px;
            margin-bottom: 20px;
        }
        .btn-container button{
            padding: 2px 10px;
        }
    </style>

@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 col-sm-6">
            
            <h4 class="card-header">{{ __('Reset Password') }}</h4>

            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('password.request') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="input-field">
                            <label for="email" class="">{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="input-field">
                            <label for="password" class="">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="input-field">
                            <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-xs-12 btn-container">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="//78306-229696-1-raikfcquaxqncofqfm.stackpathdns.com/js/materialize.js"></script>
@endsection
