@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('This is your profile................') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('user profile!...') }}
                    {{ __('logout and log again if you are new user!...') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
