<?php

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
Route::group(['middleware' => 'auth'], function () {
    Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
    // list all lfm routes here...
});


Route::get('/', function () {
    return view('welcome')->with(['posts' => \App\Post::orderBy('created_at', 'desc')->take(5)->get()]);
});

Route::get('/profile', 'UserController@profile')->middleware(['auth','verified']);


Route::post('/dpupload', 'UserController@dp')->middleware(['auth','verified']);

Auth::routes();

Route::get('/edit-profile', 'UserController@edit')->middleware(['auth','verified']);


Route::post('/edit-profile', 'UserController@editSave')->middleware(['auth','verified']);


Route::get('/wall', 'PostController@wall')->middleware(['auth','verified']);


Route::post('/create-post', 'PostController@create')->middleware(['auth','verified']);;

Route::post('/add-comment', 'PostController@addComment')->middleware(['auth','verified']);;


Route::post('/comment/edit/{comment}', 'PostController@editComment')->middleware(['auth','verified']);;

Route::post('/comment/delete/{comment}', 'PostController@deleteComment')->middleware(['auth','verified']);;

Route::get('/posts/{post}', 'PostController@post')->middleware(['auth','verified']);;

Route::get('/users/{user}', 'UserController@user')->middleware(['auth','verified']);;

Route::get('/missings', 'MissingController@all');

Route::get('/wanteds', 'WantedController@all');

Route::get('/add-missing', 'MissingController@add')->middleware(['auth','verified']);;
Route::post('/posts/{post}/delete', 'PostController@delete')->middleware(['auth','verified']);;

Route::post('/comments/{comment}/delete','PostCOntroller@deleteComments')->middleware(['auth','verified']);;

Route::get('/admin','AdminController@index')->middleware(['auth','verified']);;

Route::get('/admin-profile','AdminController@adminProfile')->middleware(['auth','verified']);;
Route::get('/wanted-list','AdminController@wantedList')->middleware(['auth','verified']);;
Route::get('/missing-list', 'AdminController@missingList')->middleware(['auth','verified']);;

Route::get('/journalists', 'AdminController@journalists')->middleware(['auth','verified']);;
Route::get('/user-list', 'AdminController@userList')->middleware(['auth','verified']);;
Route::get('/notices-admin','AdminController@noticesAdmin' )->middleware(['auth','verified']);;

// user delete
Route::post('/users/delete/{user}','UserController@delete')->middleware(['auth','verified']);;
// wanted approve hide
Route::post('/wanteds/approve/{u}','UserController@approve')->middleware(['auth','verified']);;
Route::post('/wanteds/delete/{u}','WantedController@delete')->middleware(['auth','verified']);;

// --------------------------------
// missing approve hide
Route::post('/missings/approve/{u}','MissingController@approve')->middleware(['auth','verified']);;
Route::post('/missings/delete/{u}','MissingController@delete')->middleware(['auth','verified']);;
// -----------------------------------
// notices delete

Route::post('/notices/delete/{u}','AdminController@deleteNotice')->middleware(['auth','verified']);;

// --------------------------


// add notices
Route::post('/notices/add','AdminController@addNotice')->middleware(['auth','verified']);;
// ---------------------------


// criminal record admin

Route::get('criminal-record-admin','AdminController@criminalRecord')->middleware(['auth','verified']);;

// -------------------------


Route::post('/add-wanted','WantedController@add')->middleware(['auth','verified']);;

Route::post('/add-missing','MissingController@addMissing')->middleware(['auth','verified']);;

Route::post('/add-criminal-record', 'AdminController@addCr')->middleware(['auth','verified']);;



Route::get('/wanteds/{w}','WantedController@show');
Route::get('/missings/{m}','MissingController@show');

// user make journalists
Route::post('/users/make/{user}','AdminController@makeJournalist');
// ----------------------------
// notices

Route::get('notices', 'NoticeController@show');

// ----------------------------


// like

Route::get('like/{p}', 'PostController@like')->middleware('auth');


// criminal-record

Route::get('criminal-records', 'AdminController@showCriminal');

Route::post('criminals/delete/{c}', 'AdminController@deleteCriminal')->middleware('auth');
Route::get('criminals/{c}', 'AdminController@criminal');

Route::get('contact','WebController@contact');

Route::get('inbox/{u}','WebController@inbox');

Auth::routes(['verify' => true]);

Route::post('/inbox/{u}', 'WebController@messageSave');

Route::get('/messages', 'UserController@messages');

Route::get('gd', function(){
    return view('gd');
});


Route::post('gd/submit', function(Illuminate\Http\Request $r){
    $g = new \App\GD;
    $g->name = $r->name;
    $g->address = $r->address;
    $g->phone = $r->phone;
    $g->details = $r->details;
    $g->save();
    return redirect()->back();
});
Route::get('gd-admin', function(){
    return view('gd-admin');
});