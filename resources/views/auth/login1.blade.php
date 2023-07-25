@extends('layouts.apps')

@section('content')
    <h3 class="text-center mt-0 m-b-15">
        <a href="{{ url('/') }}" class="logo logo-admin"><img src={{ asset('asset/img/icon/logo-unoso.png') }}
                height="100 px" alt="logo"></a> <br>
    </h3>

    <div class="p-3">
        <form class="form-horizontal m-t-20" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group row">
                <div class="col-12">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                        placeholder="Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-12">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group text-center row m-t-20">
                <div class="col-12">
                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Masuk</button>
                </div>
            </div>
        </form>

    </div>
@endsection
