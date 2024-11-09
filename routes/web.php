<?php

use App\Http\Controllers\JobController;
use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

// Home
/*Route::get( '/', function () {
    return view( 'home' );
} );

//About
Route::get( '/about', function () {
    return view( 'about' );
} );

//Contact
Route::get( '/contact', function () {
    return view( 'contact' );
} );*/

Route::view('/', 'home');
Route::view('/contact', 'contact');
Route::view('/about', 'about');
// Jobs
Route::resource('jobs', JobController::class);

//Route::get( '/jobs', [JobController::class, 'index'] );
/*Route::get( '/jobs', function () {
    //Job::all()
//    $jobs = Job::with('employer')->get();
//    $jobs = Job::with('employer')->paginate(4);
//    $jobs = Job::with('employer')->simplePaginate(4); // simple pagination
    $jobs = Job::with( 'employer' )->latest()->simplePaginate( 4 );

    return view( 'jobs.index',
        [
            'jobs' => $jobs
        ] );
} );*/

/*Route::get( '/jobs/create', function ( Job $job ) {
    return view( 'jobs/create', [] );
} );

Route::post( '/jobs', function () {
    request()->validate( [
        'title'  => [ 'required', 'min:3' ],
        'salary' => 'required',
    ] );
    Job::create( [
        'title'       => request( 'title' ),
        'salary'      => request( 'salary' ),
        'employer_id' => 1
    ] );
    return redirect( '/jobs' );
} );
Route::get( '/jobs/{job}', function (Job $job ) {

//    \Illuminate\Support\Arr::first( $jobs, function ( $job ) use ($id) {
//       return $job['id'] === $id;
//    });

//    $job = Job::find( $id );
//
    return view( 'jobs.show', [ 'job' => $job ] );


} );

Route::get( '/jobs/{job}/edit', function (Job $job ) {
//    $job = Job::find( $id );

    return view( 'jobs.edit', [ 'job' => $job ] );
} );

Route::patch( '/jobs/{id}', function ( $id ) {
    request()->validate( [
        'title'  => [ 'required', 'min:3' ],
        'salary' => 'required',
    ] );

    $job = Job::findOrFail( $id );

    $job->update( [ 'title' => request( 'title' ), 'salary' => request( 'salary' ) ] );
    return redirect( '/jobs/' . $job->id );
} );

Route::delete( '/jobs/{id}', function ( $id ) {
     Job::findOrFail($id)->delete();
     return redirect( '/jobs' );
} );*/

