@extends ('layouts.app')

@section('meta-title', 'Latest Jobs')

@section('content')

    <div class="bg-grey py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 d-none d-lg-block mt-4">
                    @include('partials/filter_list', [
                        'filter' => [
                        [
                            'title' => 'Type of Employment',
                            'checklist' => [ 
                                [
                                    'title' => 'Full Time Jobs',
                                    'results' => '36'
                                ],
                                [
                                    'title' => 'Part Time Jobs',
                                    'results' => '26'
                                ],
                                [
                                    'title' => 'Remote Jobs',
                                    'results' => '33'
                                ],
                                [
                                    'title' => 'Internship Jobs',
                                    'results' => '11'
                                ],
                                [
                                    'title' => 'Contract',
                                    'results' => '5'
                                ],
                                [
                                    'title' => 'Training Jobs',
                                    'results' => '3'
                                ],
                            ]
                        ],
                        [
                            'title' => 'Seniority Level',
                            'checklist' => [ 
                                [
                                    'title' => 'Student Level',
                                    'results' => '36'
                                ],
                                [
                                    'title' => 'Entry Level',
                                    'results' => '26'
                                ],
                                [
                                    'title' => 'Mid Level',
                                    'results' => '33'
                                ],
                                [
                                    'title' => 'Senior Level',
                                    'results' => '11'
                                ],
                                [
                                    'title' => 'Directors',
                                    'results' => '5'
                                ],
                            ]
                        ],
                        [
                            'title' => 'Salary  Range',
                            'checklist' => [ 
                                [
                                    'title' => '$7,000 - $10,000',
                                    'results' => '36'
                                ],
                                [
                                    'title' => '$10,000 - $15,000',
                                    'results' => '26'
                                ],
                                [
                                    'title' => '$15,000 - $20,000',
                                    'results' => '33'
                                ],
                                [
                                    'title' => '$20,000 - $30,000',
                                    'results' => '11'
                                ],
                                [
                                    'title' => '$30,000 - $50,000',
                                    'results' => '5'
                                ],
                            ]
                        ]
                    ],
                    ])
                </div>
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-12 d-md-block d-lg-none mb-2">                            
                            <a class="btn btn-primary w-100 float-start" href="">Filter</a>
                        </div>
                        <div class="col-6 mb-2">
                            <h2>Showing {{$publishedJobs}} Jobs</h2>
                        </div>
                        <div class="col-6">
                            <strong>Sort by: </strong> <a>Newest Post <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-12">
                            @include('partials/job_card', [
                                'colours' => ['purple', 'orange', 'red', 'green'],
                                'contents' => ['\f13d', '\f644', '\f179', '\f420'],
                                 $jobs])
                        </div>
                    </div>                  
                </div>
            </div>
        </div>
    </div>
@endsection