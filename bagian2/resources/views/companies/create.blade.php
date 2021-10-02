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
                
                        <h4>Add Companies</h4>
                        <a class="btn btn-danger float-end" href="{{ url('companies') }}">Back</a>
                        
                    </div> 
                    <div class="card-body">

                        <form action="{{ url('companies') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Logo</label>
                                <input type="file" name="logo" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Website</label>
                                <input type="text" name="website" class="form-control">
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