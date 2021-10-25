@extends('layouts.app')

@section('content')

    <div class="row px-4">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Job</h2>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $job_title }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $department }}
            </div>
        </div>

        <div class="pt-2">
            <a class="btn btn-primary" href="{{ route('jobs.index') }}"> Back</a>
        </div>
    </div>
@endsection