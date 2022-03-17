@extends('welcome')

@section('main')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="h4">
                        Add Student
                        <a href="{{ url('students') }}" class="btn btn-primary">BACK</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ url('students') }}" method="POST">
                        @csrf
                        {{-- if csrf token is not given then it will "419 page expired." --}}
                        <div class="form-group mb-3">
                            <label for="">Student name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student course</label>
                            <input type="text" name="course" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student section</label>
                            <input type="text" name="section" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student email</label>
                            <input type="email" name="email" class="form-control">
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

