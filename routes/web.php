<?php
 
/*
|--------------------------------------------------------------------------
|Created by RYD
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
return view('home');
})->name('home');

Route::get('/koekishadanhojin', function() {
return view('pages.koekishadanhojin');
})->name('koekishadanhojin');

Route::get('/clubhistory', function() {
return view('pages.clubhistory');
})->name('clubhistory');

Route::get('/membership', function() {
return view('pages.membership');
})->name('membership');

Route::get('/dining', function() {
return view('pages.dining');
})->name('dining');

//* ding sub menu *//
    Route::get('/mollison', function() {
    return view('pages/sub/dining.mollison');
    })->name('mollison');

    Route::get('/membersbar', function() {
    return view('pages/sub/dining.membersbar');
    })->name('membersbar');

    Route::get('/sporsbar', function() {
    return view('pages.sub/dining.sportsbar');
    })->name('sporstbar');

    Route::get('/catering & Party', function() {
    return view('pages/sub/dining.cateringParty');
    })->name('cateringparting');
//* ding sub menu *//

Route::get('/sports', function() {
return view('pages.sports');
})->name('sports');

//* sports sub menu *//
    Route::get('/ycac yports', function() {
    return view('pages/sub/sports.ycacsports');
    })->name('ycacsports');

    Route::get('/tenis tcedemy', function() {
    return view('pages/sub/sports.tennisaccademy');
    })->name('tennisaccademy');
//* sports sub menu *//

Route::get('/activities', function() {
return view('pages.activities');
})->name('activities');

Route::get('/community', function() {
return view('pages.community');
})->name('community');

//* community sub menu *//
    Route::get('/friends', function() {
    return view('pages/sub/community.friends');
    })->name('friends');

    Route::get('/reciprocal club network', function() {
    return view('pages/sub/community.rpn');
    })->name('rpn');

    Route::get('/child care', function() {
    return view('pages/sub/community.childcare');
    })->name('childcare');
//* community sub menu *//
Route::get('/access', function() {
return view('pages.access');
})->name('access');

Route::get('/contact', function() {
return view('pages.contact');
})->name('contact');

Route::get('/career', function() {
return view('pages.career');
})->name('career');



Route::get('/login', function() {
return view('pages/register.login');
})->name('login');



Route::get('/register', function() {
return view('pages/register.register');
})->name('register');
