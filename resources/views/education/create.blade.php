@extends('layouts.admin')

@section('main-content')
    <div class="container">
        <h1>Create Education</h1>

        <form action="{{ route('education.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="start_date">Start Date</label>
                <input type="number" name="start_date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="end_date">End Date</label>
                <input type="number" name="end_date" class="form-control">
            </div>
            <div class="form-group">
                <label for="field_of_study">Field Of Study</label>
                <input type="text" name="field_of_study" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="institution">Institution</label>
                <input type="text" name="institution" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
