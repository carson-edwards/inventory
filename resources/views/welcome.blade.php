@extends('layouts.app')

@section('content')
    <div class="container welcome-container mt-3">
        <div class="row">
            <div class="col-12 text-center">
                <div class="auth-logo text-center">
                    <img class="rounded" src="{{ asset('logo_500.png') }}">
                    <h1>{{ config('app.name', '') }}</h1>
                    <h3 class="text-primary">Find who your looking for...</h3>
                    <h3 class="">Faster & Easier</h3>
                </div>
            </div>
            <div class="col-12 mt-5">
                <a class="btn btn-secondary btn-block" href="{{ route('login') }}">{{ __('Login') }}</a>
                <a class="btn btn-primary btn-block" href="{{ url('social/facebook') }}">{{ __('Facebook') }}</a>

                <a class="btn btn-link btn-block text-white" href="{{ route('register') }}">{{ __('Sign Up') }} </a>
            </div>
        </div>
    </div>
@endsection