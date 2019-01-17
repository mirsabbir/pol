@extends('layouts.nav')
@section('content')



@foreach($msgs as $m)    
<div class="row">
    <div class="col">{{$m->body}}</div>
    <div class="col"><a href="/{{$m->file}}" target="blank">{{$m->file}}</a> </div>
</div>    

@endforeach
@endsection