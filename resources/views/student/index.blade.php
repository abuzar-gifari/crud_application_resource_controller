@extends('welcome')

@section('main')
    

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    @if (session('message'))
                        <h6 class="alert alert-warning">{{ session('message') }}</h6>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <div class="h4">
                                Student Crud
                                <a href="{{ url('students/create') }}" class="btn btn-primary float-end">Add Student</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Course</th>
                                <th scope="col">Section</th>
                                <th scope="col">Email</th>
                                <th scope="col">View</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($student as $student)
                                    <tr>
                                        <th scope="row">{{ $student->id }}</th>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->course }}</td>
                                        <td>{{ $student->section }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>
                                            <a href="{{ url('students/'.$student->id) }}" class="btn btn-primary">View</a>
                                        </td>
                                        <td>
                                            <a href="{{ url('students/'.$student->id.'/edit') }}" class="btn btn-success">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ url('students/'.$student->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                            
                                        </td>
                                    </tr>  
                                @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>



@endsection
