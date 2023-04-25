@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 py-4">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (Auth::user()->role == 'admin')
                            {{ __('You are logged in as a Admin!') }}
                        @else
                            {{ __('You are logged in as a User!') }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
