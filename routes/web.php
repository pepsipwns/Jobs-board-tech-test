<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\JobsController;
use App\Models\Job;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    $jobs = Job::all();

    $publishedJobs = 0;
    foreach ($jobs as $job){
        $publishedJobs += $job['published'];
    }

    return view('index')
    ->with('jobs', $jobs)
    ->with('publishedJobs', $publishedJobs);
});

Route::group(['prefix' => 'cms'], function () {
    Route::resource('jobs', JobsController::class);
});