<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin');
    }
    public function adminProfile(){
        return view('admin-profile');
    }
    public function wantedList(){
        return view('wanted-list');
    }
    public function missingList(){
        return view('missing-list');
    }
    public function journalists(){
        return view('journalists');
    }
    public function userList(){
        return view('user-list');
    }
    public function noticesAdmin(){
        return view('notices-admin');
    }
    public function deleteNotice(\App\Notice $u){
        $u->delete();
        return redirect()->back();
    }
    public function addNotice(\Illuminate\http\Request $r){
        $file = $r->file('notice');
        $file->move(public_path(''),$file->getClientOriginalName());
        $n = new \App\Notice;
        $n->file = $file->getClientOriginalName();
        $n->save();
        return redirect()->back();
    }
    public function criminalRecord(){
        return view('criminal-record-admin');
    }
    public function addCr(\Illuminate\Http\Request $request){
        $w = new \App\Criminal ;
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
        $w->dob = $request->dob;
    
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
    public function makeJournalist(\App\User $user){
        $user->role = 1;
        $user->save();
        return redirect()->back();
    }
    public function showCriminal(\Illuminate\Http\Request $r){
        $res = \App\Criminal::where('fn','like','%'.$r->qn.'%');
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
    }
    public function deleteCriminal(Illuminate\Http\Request $r,App\Criminal $c){
        $c->delete();
        return redirect()->back();
    }
    public function criminal(\Illuminate\Http\Request $r,\App\Criminal $c){
    
        return view('member')->with(['w'=>$c]);
    }
    public function gd(){
        return view('gd-admin');
    }
}
