@extends ('layouts.app')

@section('meta-title', 'Latest Jobs')

@section('content')

    <div>
        <h1 class="px-3">Job Board</h1>
        <table class="table table-striped">
            <tr>
                <th>#</th>
                <th>Job Title</th>
                <th>Department</th>
                <th>Salary From</th>
                <th>Salary To</th>
                <th>Job Description</th>
                <th>Job Location</th>
                <th>Expiry Date</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Published</th>
                <th>Commands</th>
            </tr>
            <a class="mx-3 btn btn-info" href="{{ route('jobs.create') }}">Create a New Job</a>
            @foreach($jobs as $job)
                <tr>
                    <td>
                        {{$job->id}}
                    </td>
                    <td>
                        {{$job->job_title}}
                    </td>
                    <td>
                        {{$job->department}}
                    </td>
                    <td>
                        {{$job->salary_from}}
                    </td>
                    <td>
                        {{$job->salary_to}}
                    </td>
                    <td>
                        {{$job->job_description}}
                    </td>
                    <td>
                        {{$job->job_location}}
                    </td>
                    <td>
                        {{$job->expiry_date}}
                    </td>
                    <td>
                        {{$job->created_at}}
                    </td>
                    <td>
                        {{$job->updated_at}}
                    </td>
                    <td>
                    @if ($job->published)
                    True @else False
                    @endif
                    </td>
                    <td>
                        <a class="btn btn-info my-2" href="{{ route('jobs.show',$job) }}">Show</a>
                        <a class="btn btn-primary my-2" href="{{ route('jobs.edit',$job) }}">Edit</a>
                       <form action="{{ route('jobs.destroy',$job) }}" method="POST">
          
                           @csrf
                           @method('DELETE')
                           <button type="submit" class="btn btn-danger my-2">Delete</button>
                       </form>
                   </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection