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
                
                        <h4>Add Employees</h4>
                        <a class="btn btn-danger float-end" href="{{ url('employees') }}">Back</a>
                        
                    </div> 
                    <div class="card-body">

                        <form action="{{ url('employees') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <select name="company" class="form-control">
                                <option>Select Companies</option><!--selected by default-->
                                @foreach($companies as $data)
                                    <option value="{{ $data->id }}">
                                        {{ $data->name }}
                                    </option>
                                @endforeach
                           </select>
                           
                            <div class="form-group mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control">
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