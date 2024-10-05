<?php

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
            'jobs' => [
                [
                    'id'     => 1,
                    'title'  => 'Director',
                    'salary' => '$50,000'
                ],
                [
                    'id'     => 2,
                    'title'  => 'Programmer',
                    'salary' => '$40,000'
                ],
                [
                    'id'     => 3,
                    'title'  => 'Teacher',
                    'salary' => '$20,000'
                ]
            ]
        ] );
} );
Route::get( '/jobs/{id}', function ( $id ) {

    $jobs = [
        [
            'id'     => 1,
            'title'  => 'Director',
            'salary' => '$50,000'
        ],
        [
            'id'     => 2,
            'title'  => 'Programmer',
            'salary' => '$40,000'
        ],
        [
            'id'     => 3,
            'title'  => 'Teacher',
            'salary' => '$20,000'
        ]
    ];

//    \Illuminate\Support\Arr::first( $jobs, function ( $job ) use ($id) {
//       return $job['id'] === $id;
//    });

    $job = Arr::first( $jobs, fn( $job ) => $job['id'] == $id );

    return view( 'job', [ 'job' => $job ] );
} );


