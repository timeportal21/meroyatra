@extends('layouts.login')
@section('content')
    <h4 class="fw-300 c-grey-900 mB-40">
        {{ trans('global.login') }}
    </h4>
    @if(\Session::has('message'))
        <p class="alert alert-info">
            {{ \Session::get('message') }}
        </p>
    @endif
    <div class="row h-p100 justify-content-sm-center align-items-center">
        <div class="col-sm-6 col-md-4">

            <div class="card border-info text-center">
                <div class="card-header">
                    <h2 class="text-center">Log In</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" class="form-signin">
                        @csrf
                        <div class="input-group mb-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="email" name="email"
                                   class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   placeholder="Email" required autofocus value="{{ old('email', null) }}">
                            @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>
                        <div class="input-group mb-10 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                            <input name="password" type="password"
                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required
                                   placeholder="{{ trans('global.login_password') }}">
                            @if($errors->has('password'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
                        </div>
                        <button class="btn btn-lg btn-primary btn-block mb-20" type="submit">Sign in</button>
                        <div class="checkbox float-left">
                            <input type="checkbox" id="basic_checkbox_1">
                            <label for="basic_checkbox_1">Remember me</label>
                        </div>
                        <a href="{{ route('password.request') }}" class="float-right text-blue ">forgot Password?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
