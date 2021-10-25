@extends('layouts.app')

@section('content')

    <div class="row px-3">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Job</h2>
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

    <form action="{{ route('jobs.update',$id) }}" method="POST">
        @csrf

        @method('PUT')
        <div class="row px-3">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Job Title:</strong>
                    <input value="{{ old('job_title', $job_title) }}" type="text" class="form-control" name="job_title" placeholder="Job Title">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Department:</strong>
                    <input value="{{ old('department', $department) }}" type="text" class="form-control" name="department" placeholder="Department">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                <strong>Salary From:</strong>
                    <input value="{{ old('salary_from', $salary_from) }}" type="text" class="form-control" name="salary_from" placeholder="Salary From">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                <strong>Salary To:</strong>
                    <input value="{{ old('salary_to', $salary_to) }}" type="text" class="form-control" name="salary_to" placeholder="Salary To">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Description:</strong>
                    <textarea class="form-control" name="job_description" placeholder="Description..." style="height: 150px">{{ old('job_description', $job_description) }}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Location:</strong>
                    <input value="{{ old('job_location', $job_location) }}" type="text" class="form-control" name="job_location" placeholder="Location">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Seniority Level:</strong>
                    <input value="{{ old('seniority_level', $seniority_level) }}" type="text" class="form-control" name="seniority_level" placeholder="Seniority Level">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Employment Type:</strong>
                    <input value="{{ old('employment_type', $employment_type) }}" type="text" class="form-control" name="employment_type" placeholder="Employment Type">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Published:</strong>
                    <input value="{{ old('published', $published) }}" type="text" class="form-control" name="published" placeholder="Published">
                </div>
            </div>

            <div class="col-6 text-end pt-2">
                <a class="btn btn-primary" href="{{ route('jobs.index') }}"> Back</a>
            </div>
            <div class="col-6 text-start pt-2">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection