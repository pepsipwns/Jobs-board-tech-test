<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;
use Carbon\Carbon;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::all();

        return view('jobs.index')
        ->with('jobs', $jobs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'job_title' => 'required',
            'department' => 'required',
            'salary_from' => 'required',
            'salary_to' => 'required',
            'job_description' => 'required',
            'job_location' => 'required',
            'seniority_level' => 'required',
            'employment_type' => 'required',
        ]);

        Job::create($request->all());

        return redirect()->route('jobs.index')
        ->with('success', 'Job created succesfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        return view('jobs.show', $job);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        return view('jobs.edit', $job);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        
        $request->validate([
            'job_title' => 'required',
            'department' => 'required',
            'salary_from' => 'required',
            'salary_to' => 'required',
            'job_description' => 'required',
            'job_location' => 'required',
            'seniority_level' => 'required',
            'employment_type' => 'required',
        ]);

        $job->update($request->all());

        return redirect()->route('jobs.index')
        ->with('success', 'Job updated succesfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        $job->delete();

        return redirect()->route('jobs.index')
        ->with('success', 'Job deleted succesfully.');
    }

    public function filter(Request $request){
        return Job::filter($request)->get();
    }
}
