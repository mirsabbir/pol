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

Route::get('/profile', function (\Illuminate\Http\Request $r) {
    $user = Auth::user();
    if($r->q){
        return view('profile')->with(['r'=>$r,'user'=>$user,'ok'=> \Auth::id()==$user->id, 'posts'=>$user->posts()->orderBy('created_at', 'desc')->where('title','like','%'.$r->q.'%')->with('comments.user')->get()]);
    }
    return view('profile')->with(['r'=>$r,'user'=>$user,'ok'=> \Auth::id()==$user->id, 'posts'=>$user->posts()->orderBy('created_at', 'desc')->with('comments.user')->get()]);
    return view('profile')->with(['user'=>\Auth::user(), 'posts'=>\Auth::user()->posts()->orderBy('created_at', 'desc')->with('comments.user')->get()]);

})->middleware(['auth','verified']);


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
})->middleware(['auth','verified']);

Auth::routes();

Route::get('/edit-profile',function(){
    return view('edit-profile')->with(['user'=>\Auth::user()]);
})->middleware(['auth','verified']);


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
    $user->address = $request->address;
    
    $user->save();
    return redirect('profile');
})->middleware(['auth','verified']);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/wall', function(){
    $posts = App\Post::orderBy('created_at', 'desc')->with('comments.user')->get();
    return view('wall')->with(['posts'=>$posts]);
})->middleware(['auth','verified']);


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
})->middleware(['auth','verified']);;

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

})->middleware(['auth','verified']);;


Route::post('/comment/edit/{comment}', function(\Illuminate\Http\Request $request,\App\Comment $comment){
    
    $validatedData = $request->validate([
        
        'body' => 'required',
        
    ]);
    
    $comment->body = $request->body;
    
    $comment->save();
    return $comment->load('user');

})->middleware(['auth','verified']);;

Route::post('/comment/delete/{comment}', function(\Illuminate\Http\Request $request,\App\Comment $comment){
    
   
    
    $comment->delete();
})->middleware(['auth','verified']);;

Route::get('/posts/{post}', function(\App\Post $post){
    $r = $post->load('comments.user');
    return view('post')->with(['post'=>$r]);
})->middleware(['auth','verified']);;

Route::get('/users/{user}', function(Illuminate\Http\Request $r,\App\User $user){
    if(\Auth::id()==$user->id) return redirect('/profile');
    if($r->q){
        return view('user')->with(['r'=>$r,'user'=>$user,'ok'=> \Auth::id()==$user->id, 'posts'=>$user->posts()->orderBy('created_at', 'desc')->where('title','like','%'.$r->q.'%')->with('comments.user')->get()]);
    }
    return view('user')->with(['r'=>$r,'user'=>$user,'ok'=> \Auth::id()==$user->id, 'posts'=>$user->posts()->orderBy('created_at', 'desc')->with('comments.user')->get()]);
})->middleware(['auth','verified']);;

Route::get('/missings',function(Illuminate\Http\Request $r){
    
    $res = App\Missing::where('status',1)->where('fn','like','%'.$r->qn.'%');
    
    if($r->qc){
        $res = $res->where('city','like','%'.$r->qc.'%');   
    }
    if($r->qs){
        $res = $res->where('sex','like','%'.$r->qs.'%');
    }
    if($r->qa){
        $res = $res->where('age','=',$r->qa);
    }
    if($r->qd){
        $res = $res->where('dob','=',$r->qd);
    }
    
    return view('missings')->with(['r'=>$r,'ms'=>$res->get()]);
});

Route::get('/wanteds',function(Illuminate\Http\Request $r){
    $res = App\Wanted::where('fn','like','%'.$r->qn.'%');
    if($r->qc){
        $res = $res->where('city','like','%'.$r->qc.'%');   
    }
    if($r->qs){
        $res = $res->where('sex','like','%'.$r->qs.'%');
    }
    if($r->qa){
        $res = $res->where('age','=',$r->qa);
    }
    if($r->qd){
        $res = $res->where('dob','=',$r->qd);
    }
    return view('wanteds')->with(['r'=>$r,'ms'=>$res->paginate(1)]);
    
});

Route::get('/add-missing',function(){
    return view('add-missing');
})->middleware(['auth','verified']);;
Route::post('/posts/{post}/delete',function(\App\Post $post){
    $post->delete();
    return redirect()->back();
})->middleware(['auth','verified']);;

Route::post('/comments/{comment}/delete',function(\App\Comment $comment){
    $comment->delete();
    return redirect()->back();
})->middleware(['auth','verified']);;

Route::get('/admin',function(){
    return view('admin');
})->middleware(['auth','verified']);;

Route::get('/admin-profile',function(){
    return view('admin-profile');
})->middleware(['auth','verified']);;
Route::get('/wanted-list',function(){
    return view('wanted-list');
})->middleware(['auth','verified']);;
Route::get('/missing-list',function(){
    return view('missing-list');
})->middleware(['auth','verified']);;
Route::get('/missing-list',function(){
    return view('missing-list');
})->middleware(['auth','verified']);;
Route::get('/journalists',function(){
    return view('journalists');
})->middleware(['auth','verified']);;
Route::get('/user-list',function(){
    return view('user-list');
})->middleware(['auth','verified']);;
Route::get('/notices-admin',function(){
    return view('notices-admin');
})->middleware(['auth','verified']);;

// user delete
Route::post('/users/delete/{user}',function(App\User $user){
    $user->delete();
    return redirect()->back();
})->middleware(['auth','verified']);;
// wanted approve hide
Route::post('/wanteds/approve/{u}',function(App\Wanted $u){
    $u->status = 1;;
    $u->save();
    return redirect()->back();
})->middleware(['auth','verified']);;
Route::post('/wanteds/delete/{u}',function(App\Wanted $u){
    $u->status = 0;;
    $u->save();
    return redirect()->back();
})->middleware(['auth','verified']);;

// --------------------------------
// missing approve hide
Route::post('/missings/approve/{u}',function(App\Missing $u){
    $u->status = 1;;
    $u->save();
    return redirect()->back();
})->middleware(['auth','verified']);;
Route::post('/missings/delete/{u}',function(App\Missing $u){
    $u->status = 0;;
    $u->save();
    return redirect()->back();
})->middleware(['auth','verified']);;
// -----------------------------------
// notices delete

Route::post('/notices/delete/{u}',function(App\Notice $u){
    $u->delete();
    return redirect()->back();
})->middleware(['auth','verified']);;

// --------------------------


// add notices
Route::post('/notices/add',function(\Illuminate\http\Request $r){
    $file = $r->file('notice');
    $file->move(public_path(''),$file->getClientOriginalName());
    $n = new App\Notice;
    $n->file = $file->getClientOriginalName();
    $n->save();
    return redirect()->back();
})->middleware(['auth','verified']);;
// ---------------------------


// criminal record admin

Route::get('criminal-record-admin',function(){
    return view('criminal-record-admin');
})->middleware(['auth','verified']);;

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
    $w->address = $request->address;

    if(!$request->hasFile('image')) abort(404);
    $file = $request->file('image');
    $name = time() .'.'. $file->getClientOriginalExtension();
    $img = \Image::make($file);
    $img->resize(200,200);
    $img->save($name);
    $w->image = $name;

    $w->save();
    return redirect()->back();
})->middleware(['auth','verified']);;

Route::post('/add-missing',function(Illuminate\Http\Request $request){
    $w = new App\Missing ;
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
    $w->address = $request->address;

    if(!$request->hasFile('image')) abort(404);
    $file = $request->file('image');
    $name = time() .'.'. $file->getClientOriginalExtension();
    $img = \Image::make($file);
    $img->resize(200,200);
    $img->save($name);
    $w->image = $name;

    $w->save();
    return redirect('missings');
})->middleware(['auth','verified']);;

Route::post('/add-criminal-record',function(Illuminate\Http\Request $request){
    $w = new App\Criminal ;
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
    $w->address = $request->address;

    if(!$request->hasFile('image')) abort(404);
    $file = $request->file('image');
    $name = time() .'.'. $file->getClientOriginalExtension();
    $img = \Image::make($file);
    $img->resize(200,200);
    $img->save($name);
    $w->image = $name;

    $w->save();
    return redirect()->back();
})->middleware(['auth','verified']);;



Route::get('/wanteds/{w}',function(App\Wanted $w){
    
    return view('member')->with(['w'=>$w]);
});
Route::get('/missings/{m}',function(App\Missing $m){
    
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


// like

Route::get('like/{p}',function(App\Post $p){
    if(App\Like::where('user_id',Auth::id())->where('post_id',$p->id)->exists()){
        $r = App\Like::where('user_id',Auth::id())->where('post_id',$p->id)->first();
        $r->delete();
        return -1;
    } else {
        $r = new App\Like;
        $r->l = 0;
        $r->post_id = $p->id;
        $r->user_id = Auth::id();
        $r->save();
        return 1;
    }
});


// criminal-record

Route::get('criminal-records', function(Illuminate\Http\Request $r){
    $res = App\Criminal::where('fn','like','%'.$r->qn.'%');
    if($r->qc){
        $res = $res->where('city','like','%'.$r->qc.'%');   
    }
    if($r->qs){
        $res = $res->where('sex','like','%'.$r->qs.'%');
    }
    if($r->qa){
        $res = $res->where('age','=',$r->qa);
    }
    if($r->qd){
        $res = $res->where('dob','=',$r->qd);
    }
    
    return view('criminal-records')->with(['r'=>$r,'ms'=>$res->get()]);
});

Route::post('criminals/delete/{c}', function(Illuminate\Http\Request $r,App\Criminal $c){
    $c->delete();
    return redirect()->back();
});
Route::get('criminals/{c}', function(Illuminate\Http\Request $r,App\Criminal $c){
    
    return view('member')->with(['w'=>$c]);
});

Route::get('contact',function(){
return view('contact');
});

Route::get('inbox/{u}',function(App\User $u){
return view('inbox')->with(['user'=>$u]);
});

Auth::routes(['verify' => true]);

Route::post('/inbox/{u}', function(Illuminate\Http\Request $r,App\user $u){
    $msg = new App\Message;
    $msg->body = $r->body;
    $file = $r->f;
    $name = time().'.'.$file->getClientOriginalExtension();
    $file->storeAs('',$name,'public');
    $msg->file = $name;
    $msg->user_id = $u->id;
    $msg->save();
    return redirect()->back();
});

Route::get('/messages', function(){
    return view('messages')->with(['msgs' => Auth::user()->messages]);
});