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

Route::get('/profile', function () {
    return view('profile')->with(['user'=>\Auth::user(), 'posts'=>\Auth::user()->posts()->orderBy('created_at', 'desc')->get()]);

})->middleware('auth');


Route::get('/home', 'HomeController@index')->name('home');

Route::post('/dpupload', function(\Illuminate\Http\Request $request){
    $file = $request->image;
    if(!$request->hasFile('image')) abort(404);
    $name = time() .'.'. $file->getClientOriginalExtension();
    $img = \Image::make($file);
    $img->save($name);
    $user = \Auth::user();
    $user->image = $name;
    $user->save();
    return redirect()->back();
})->middleware('auth');

Auth::routes();

Route::get('/edit-profile',function(){
    return view('edit-profile')->with(['user'=>\Auth::user()]);
})->middleware('auth');


Route::post('/edit-profile',function(\Illuminate\Http\Request $request){
    $user = \Auth::user();
    $user->sex = $request->sex;
    $user->age = $request->age;
    $user->mobile = $request->mobile;
    $user->details = $request->details;
    $user->username = $request->username;
    $user->name = $request->name;
    $user->nid = $request->nid;
    $user->email = $request->email;
    $user->city = $request->city;
    $user->save();
    return redirect()->back();
})->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/wall', function(){
    $posts = App\Post::orderBy('created_at', 'desc')->with('comments.user')->get();
    return view('wall')->with(['posts'=>$posts]);
})->middleware('auth');


Route::post('/create-post', function(\Illuminate\Http\Request $request){
    $post = new App\Post ;
    $validatedData = $request->validate([
        'title' => 'required|unique:posts|max:255',
        'body' => 'required',
        'image' => 'required',
    ]);
    if(!$request->hasFile('image')) abort(404);
    $file = $request->image;
    if(!$request->hasFile('image')) abort(404);
    $name = time() .'.'. $file->getClientOriginalExtension();
    $img = \Image::make($file);
    $img->save($name);
    $post->image = $name;
    $post->title = $request->title;
    $post->body = $request->body;
    \Auth::user()->posts()->save($post);
    return  redirect('profile');
});

Route::post('/add-comment', function(\Illuminate\Http\Request $request){
    
    $validatedData = $request->validate([
        
        'body' => 'required',
        
    ]);
    $comment = new App\Comment;
    $comment->body = $request->body;
    $comment->user_id = \Auth::id();
    $comment->post_id = $request->id;
    $comment->save();
    return $comment->load('user');

});


Route::post('/comment/edit/{comment}', function(\Illuminate\Http\Request $request,\App\Comment $comment){
    
    $validatedData = $request->validate([
        
        'body' => 'required',
        
    ]);
    
    $comment->body = $request->body;
    
    $comment->save();
    return $comment->load('user');

});

Route::post('/comment/delete/{comment}', function(\Illuminate\Http\Request $request,\App\Comment $comment){
    
   
    
    $comment->delete();
});

Route::get('/posts/{post}', function(\App\Post $post){
    return view('post')->with(['post'=>$post]);
});

Route::get('/users/{user}', function(\App\User $user){
    if(\Auth::id()==$user->id) return redirect('/profile');
    return view('user')->with(['user'=>$user,'ok'=> \Auth::id()==$user->id, 'posts'=>$user->posts()->orderBy('created_at', 'desc')->get()]);
});

Route::get('/missings',function(){
    return view('missings');
});

Route::get('/wanteds',function(){
    return view('wanteds');
});

Route::get('/add-missing',function(){
    return view('add-missing');
});
Route::post('/posts/{post}/delete',function(\App\Post $post){
    $post->delete();
    return redirect()->back();
});

Route::post('/comments/{comment}/delete',function(\App\Comment $comment){
    $comment->delete();
    return redirect()->back();
});

Route::get('/admin',function(){
    return view('admin');
});

Route::get('/admin-profile',function(){
    return view('admin-profile');
});
Route::get('/wanted-list',function(){
    return view('wanted-list');
});
Route::get('/missing-list',function(){
    return view('missing-list');
});
Route::get('/missing-list',function(){
    return view('missing-list');
});
Route::get('/journalists',function(){
    return view('journalists');
});
Route::get('/user-list',function(){
    return view('user-list');
});
Route::get('/notices-admin',function(){
    return view('notices-admin');
});

// user delete
Route::post('/users/delete/{user}',function(App\User $user){
    $user->delete();
    return redirect()->back();
});
// wanted approve hide
Route::post('/wanteds/approve/{u}',function(App\Wanted $u){
    $u->status = 1;;
    $u->save();
    return redirect()->back();
});
Route::post('/wanteds/delete/{u}',function(App\Wanted $u){
    $u->status = 0;;
    $u->save();
    return redirect()->back();
});

// --------------------------------
// missing approve hide
Route::post('/missings/approve/{u}',function(App\Missing $u){
    $u->status = 1;;
    $u->save();
    return redirect()->back();
});
Route::post('/missings/delete/{u}',function(App\Missing $u){
    $u->status = 0;;
    $u->save();
    return redirect()->back();
});
// -----------------------------------
// notices delete

Route::post('/notices/delete/{u}',function(App\Notice $u){
    $u->delete();
    return redirect()->back();
});

// --------------------------


// add notices
Route::post('/notices/add',function(\Illuminate\http\Request $r){
    $file = $r->file('notice');
    $file->move(public_path(''),$file->getClientOriginalName());
    $n = new App\Notice;
    $n->file = $file->getClientOriginalName();
    $n->save();
    return redirect()->back();
});
// ---------------------------


// criminal record admin

Route::get('criminal-record-admin',function(){
    return view('criminal-record-admin');
});

// -------------------------


Route::post('/add-wanted',function(Illuminate\Http\Request $request){
    $w = new App\Wanted ;
    $w->fn = $request->fn;
    $w->age = $request->age;
    $w->country = $request->country;
    $w->city = $request->city;
    $w->phone = $request->phone;
    $w->sex = $request->sex;
    $w->dsc = $request->dsc;
    $w->eye = $request->eye;
    $w->skin = $request->skin;
    $w->height = $request->height;
    $w->email = $request->email;

    if(!$request->hasFile('image')) abort(404);
    $file = $request->file('image');
    $name = time() .'.'. $file->getClientOriginalExtension();
    $img = \Image::make($file);
    $img->resize(50,50);
    $img->save($name);
    $w->image = $name;

    $w->save();
    return redirect()->back();
});



Route::get('/wanteds/{w}',function(App\Wanted $w){
    
    return view('member')->with(['w'=>$w]);
});
Route::get('/missings/{m}',function(App\Wanted $m){
    
    return view('member')->with(['w'=>$m]);
});

// user make journalists
Route::post('/users/make/{user}',function(App\User $user){
    $user->role = 1;
    $user->save();
    return redirect()->back();
});
// ----------------------------
// notices

Route::get('notices',function(){
    return view('notices');
});

// ----------------------------