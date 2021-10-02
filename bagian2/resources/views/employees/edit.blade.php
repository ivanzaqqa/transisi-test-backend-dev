@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">

                    @if (session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                
                        <h4>Edit Employees</h4>
                        <a class="btn btn-danger float-end" href="{{ url('employees') }}">Back</a>
                        
                    </div> 
                    <div class="card-body">

                        <form action="{{ url('employees/'.$employees->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $employees->name }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Company</label>
                                <input type="text" name="company" class="form-control" value="{{ $employees->company }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control" value="{{ $employees->email }}">
                            </div>
                            
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                        </form>

                    </div>
            </div>
        </div>
    </div>
</div>

    @endsection