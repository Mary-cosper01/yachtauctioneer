<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/author', function () {
    return view('author');
});
Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/ghostwriting-services', function () {
    return view('ghostwriting-services');
});
Route::get('/book-editing', function () {
    return view('book-editing');
});
Route::get('/book-publishing', function () {
    return view('book-publishing');
});
Route::get('/book-marketing', function () {
    return view('book-marketing');
});
Route::get('/audio-book', function () {
    return view('audio-book');
});
Route::get('/book-video', function () {
    return view('book-video');
});
Route::get('/book-cover-design', function () {
    return view('book-cover-design');
});
Route::get('/author-website', function () {
    return view('author-website');
});
Route::get('/childrens-book', function () {
    return view('childrens-book');
});
Route::get('/fiction-book', function () {
    return view('fiction-book');
});
Route::get('/non-fiction-book', function () {
    return view('non-fiction-book');
});
Route::get('/autobiography-memoir', function () {
    return view('autobiography-memoir');
});
Route::get('/business-book', function () {
    return view('business-book');
});
Route::get('/self-help-book', function () {
    return view('self-help-book');
});
Route::get('/medicine-it-computer-science-book', function () {
    return view('medicine-it-computer-science-book');
});
Route::get('/mystery-thriller-crime-book', function () {
    return view('mystery-thriller-crime-book');
});
Route::get('/horror-comic-fantasy-adventure-book', function () {
    return view('horror-comic-fantasy-adventure-book');
});
Route::get('/cook-book', function () {
    return view('cook-book');
});
Route::get('/history-poetry-literary-writing-religion-book', function () {
    return view('history-poetry-literary-writing-religion-book');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions');
});
Route::get('/thank-you', function () {
    return view('thanku-page');
})->name('thanku');

Route::get('/prices', function () {
    return view('price');
})->name('prices');
Route::post('/application-process','App\Http\Controllers\MailController@basic_email')->name('process-application');
