@extends('partials.main')
@section('content')
<h1 class="text text-center">Student Form</h1>

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
    <div class="alert alert-info">Please fill out the form below:</div>
    <form action="" method="post" class="form-control bg-dark ">
        @csrf
        <h2 class="text-center text-white">Student Registration</h2>
       <div class="mb-3"> 
        <input type="text" name="name" class="form-control" placeholder="Enter your name">
    </div>
    <div class="mb-3">
        <input type="email" name="email" class="form-control" placeholder="Enter your email">
    </div>
    <div class="mb-3">
        <select name="course" id="courses">
            <option value="">Select Course</option>
            <option value="Python">Python</option>
            <option value="Java">Java</option>
            <option value="C++">C++</option>
        </select>
    </div>
    <div class="mb-3">
        <input type="password" class="form-control" name="password" placeholder="Enter your password">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-3">Confirm </button>
          </div>
    </form>
</div>
    </div>
</div>
@endsection