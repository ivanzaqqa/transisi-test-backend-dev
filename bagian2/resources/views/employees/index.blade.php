@extends('layouts.app')

@section('content')
        <div class="container">
        <div class="col-lg-12 margin-tb">
            
            @if (session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif

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
            <td>{{ $data->companies->name }}</td>
            <td>{{ $data->email }}</td>
            <td>
                <form action="{{ url('employees/'.$data->id) }}" method="POST">   
                    <a class="btn btn-sm btn-info" href="{{ url('employees/'.$data->id.'/edit') }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
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