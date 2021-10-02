@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Company
                    <a href="{{ url('company/create') }}" class="btn btn-primary float-end">Add Company</a>
                </div>

                <div class="card-body">
        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
