<?php

use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

// Home
Route::get( '/', function () {
    return view( 'home' );
} );

//About
Route::get( '/about', function () {
    return view( 'about' );
} );

//Contact
Route::get( '/contact', function () {
    return view( 'contact' );
} );

// Jobs

Route::get( '/jobs', function () {
    //Job::all()
//    $jobs = Job::with('employer')->get();
//    $jobs = Job::with('employer')->paginate(4);
//    $jobs = Job::with('employer')->simplePaginate(4); // simple pagination
    $jobs = Job::with( 'employer' )->latest()->simplePaginate( 4 );

    return view( 'jobs.index',
        [
            'jobs' => $jobs
        ] );
} );

Route::get( '/jobs/create', function ( Job $job ) {
    return view( 'jobs/create', [] );
} );

Route::post( '/jobs', function () {
    Job::create( [
        'title'       => request( 'title' ),
        'salary'      => request( 'salary' ),
        'employer_id' => 1
    ] );
    return redirect( '/jobs' );
} );
Route::get( '/jobs/{id}', function ( $id ) {

//    \Illuminate\Support\Arr::first( $jobs, function ( $job ) use ($id) {
//       return $job['id'] === $id;
//    });

    $job = Job::find( $id );

    return view( 'jobs.show', [ 'job' => $job ] );
} );


