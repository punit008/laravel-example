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
    return view( 'jobs',
        [
            'jobs' => Job::all()
        ] );
} );
Route::get( '/jobs/{id}', function ( $id ) {

//    \Illuminate\Support\Arr::first( $jobs, function ( $job ) use ($id) {
//       return $job['id'] === $id;
//    });

    $job = Job::find( $id );

    return view( 'job', [ 'job' => $job ] );
} );


