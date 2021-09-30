@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <div class="float-right">
                        <a class="btn btn-success" href="{{ route('employees.index') }}">Employees</a>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-dark" href="#">Companies</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
