<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function contact(){
        return view('contact');
    }
    public function inbox(\App\User $u){
        return view('inbox')->with(['user'=>$u]);
    }
    public function messageSave(\Illuminate\Http\Request $r,\App\user $u){
        $msg = new \App\Message;
        $msg->body = $r->body;
        $file = $r->f;
        if($r->f){
            $name = time().'.'.$file->getClientOriginalExtension();
            $file->storeAs('',$name,'public');
            $msg->file = $name;
        }
        $msg->name = $r->name;
        $msg->address = $r->address;
        $msg->mobile = $r->mobile;
        
        $msg->user_id = $u->id;
        $msg->save();
        return redirect()->back();
    }
    public function gd(){
        return view('gd');
    }
    public function gdSubmit(\Illuminate\Http\Request $r){
        $g = new \App\GD;
        $g->name = $r->name;
        $g->address = $r->address;
        $g->phone = $r->phone;
        $g->details = $r->details;
        $g->save();
        return redirect()->back();
    }
}
