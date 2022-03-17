@extends('welcome')

@section('main')
    <div class="container">
        <div class="row"></div>
        <div class="justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="h4">
                            Show Student Data
                            <a href="{{ url('students') }}" class="btn btn-primary">BACK</a>
                        </div>
                    </div>
                    <div class="card-body">
                            <label for="">Student Name</label>
                            <h4>{{ $student->name }}</h4>
                            <label for="">Student Course</label>
                            <h4>{{ $student->course }}</h4>
                            <label for="">Student Email</label>
                            <h4>{{ $student->email }}</h4>
                            <label for="">Student Section</label>
                            <h4>{{ $student->section }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
