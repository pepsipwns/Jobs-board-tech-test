@extends ('layouts.app')

@section('meta-title', 'Latest Jobs')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Add New Job</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('jobs.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('jobs.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Job Title:</strong>
                <input type="text" class="form-control" name="job_title" placeholder="Job Title">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Department:</strong>
                <input type="text" class="form-control" name="department" placeholder="Department">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
              <strong>Salary From:</strong>
                <input type="text" class="form-control" name="salary_from" placeholder="Salary From">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
              <strong>Salary To:</strong>
                <input type="text" class="form-control" name="salary_to" placeholder="Salary To">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Description:</strong>
                <textarea class="form-control" name="job_description" placeholder="Description..." style="height: 150px"></textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Location:</strong>
                <input type="text" class="form-control" name="job_location" placeholder="Location">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Seniority Level:</strong>
                <input type="text" class="form-control" name="seniority_level" placeholder="Seniority Level">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Employment Type:</strong>
                <input type="text" class="form-control" name="employment_type" placeholder="Employment Type">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection