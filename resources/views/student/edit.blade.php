@extends('welcome')

@section('main')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="h4">
                        Edit Student
                        <a href="{{ url('students') }}" class="btn btn-primary">BACK</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ url('students/'.$student->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        {{-- if csrf token is not given then it will "419 page expired." --}}
                        <div class="form-group mb-3">
                            <label for="">Student name</label>
                            <input type="text" name="name" class="form-control" value="{{ $student->name }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student course</label>
                            <input type="text" name="course" class="form-control" value="{{ $student->course }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student section</label>
                            <input type="text" name="section" class="form-control" value="{{ $student->section }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student email</label>
                            <input type="email" name="email" class="form-control" value="{{ $student->email }}">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

