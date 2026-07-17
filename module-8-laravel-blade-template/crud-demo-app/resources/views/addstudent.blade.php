@extends('layout')

@section('title-here')
Home Page
@endsection

@section('content')
<div class="container p-5 mt-5">
    <div class="row rounded">

        <div class="col-md-4 p-5">
            <img src="https://i.pinimg.com/736x/12/29/78/1229780cc8351200e767346c1869fd22.jpg"
                class="img-fluid rounded" alt="Student">
        </div>

        <div class="col-md-8 p-5">
            <h2>Add Student Form</h2>
            <hr>
            <form  method="POST">
            

                <div class="mb-3">
                    <label class="form-label">Student Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter student name" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone Number</label>
                    <input type="text" name="phone" class="form-control" placeholder="Enter phone number">
                </div>

                <div class="mb-3">
                    <label class="form-label">Gender</label><br>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" value="Male">
                        <label class="form-check-label">Male</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" value="Female">
                        <label class="form-check-label">Female</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Course</label>
                    <select name="course" class="form-select">
                        <option value="">Select Course</option>
                        <option>BCA</option>
                        <option>B.Sc IT</option>
                        <option>B.Com</option>
                        <option>BBA</option>
                        <option>MCA</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <textarea name="address" rows="3" class="form-control" placeholder="Enter address"></textarea>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">
                        Add Student
                    </button>

                    <button type="reset" class="btn btn-secondary">
                        Reset
                    </button>
                </div>

            </form>

        </div>

    </div>
</div>
@endsection