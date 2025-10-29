@extends('layout')

@section('content')
<h3>Edit Student</h3>

<form action="{{ route('students.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" value="{{ $student->name }}" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="{{ $student->email }}" class="form-control">
    </div>
    <div class="mb-3">
        <label>Course</label>
        <input type="text" name="course" value="{{ $student->course }}" class="form-control">
    </div>
    <button class="btn btn-primary">Update</button>
</form>
@endsection
