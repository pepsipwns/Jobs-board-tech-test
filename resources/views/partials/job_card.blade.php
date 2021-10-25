<div class="row">
    @foreach ($jobs as $job)
        @if ($job['published'])
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="job-card p-2">
                    <div class="brand-icon my-2" style=" background: {{ $colours[array_rand($colours)] }}">
                    </div>
                    <h5 class="py-2">{{$job['job_title']}}</h5>
                    <p class="preview-text">{{$job['job_description']}}</p>
                        <ul class="inline-list p-0">
                            <li class="filter-tag">{{$job['seniority_level']}}</li>
                            <li class="filter-tag">{{$job['employment_type']}}</li>
                            <li class="filter-tag">{{$job['experience']}}</li>
                        </ul>
                    <div class="row g-2">
                        <div class="col-6">
                            <a class="btn btn-primary w-100 float-start" href="">Apply Now</a>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-secondary w-100 float-end" href="">Messages</a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
</div>
