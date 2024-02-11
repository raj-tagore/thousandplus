@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                    <br>
                    <a href="/tally" class="btn border m-3">Fill the Daily Form</a>
                    <a href="/dashboard" class="btn border m-3">Go to Dashboard</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection