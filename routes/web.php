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
    $jobs = Job::with('employer')->cursorPaginate(4);

    return view( 'jobs',
        [
            'jobs' => $jobs
        ] );
} );
Route::get( '/jobs/{id}', function ( $id ) {

//    \Illuminate\Support\Arr::first( $jobs, function ( $job ) use ($id) {
//       return $job['id'] === $id;
//    });

    $job = Job::find( $id );

    return view( 'job', [ 'job' => $job ] );
} );


