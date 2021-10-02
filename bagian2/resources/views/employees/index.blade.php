@extends('layouts.app')

@section('content')
        <div class="container">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                
                <h2>Employees</h2>
                
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('employees.create') }}"> Create Employees</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <div class="container table-responsive py-5">
    <table class="table table-bordered table-hover">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Company</th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($employees as $data)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->company }}</td>
            <td>{{ $data->email }}</td>
            <td>
                <form action="{{ route('employees.destroy',$data->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('employees.show',$data->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('employees.edit',$data->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Submit</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
    <div class="text-center">
        {!! $employees->links() !!}
    </div>
      
@endsection