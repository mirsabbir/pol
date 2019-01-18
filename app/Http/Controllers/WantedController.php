<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WantedController extends Controller
{
    public function all(\Illuminate\Http\Request $r){
        $res = \App\Wanted::where('fn','like','%'.$r->qn.'%');
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
        
    }
    public function delete(\App\Wanted $u){
        $u->status = 0;;
        $u->save();
        return redirect()->back();
    }
    public function add(\Illuminate\Http\Request $request){
        $w = new \App\Wanted ;
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
        $img->resize(300,300);
        $img->save($name);
        $w->image = $name;
    
        $w->save();
        return redirect()->back();
    }
    public function show(App\Wanted $w){
    
        return view('member')->with(['w'=>$w]);
    }
}