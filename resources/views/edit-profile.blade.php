
@extends('layouts.nav')
@section('content')
        
        <!-- Page Wrapper Start -->
        <section class="page--wrapper pt--80 pb--20">
            <div class="container">
                <div class="row-form">
                    <!-- Form start -->


                      <div class="col-sm-10 card card-small mb-4 well missing_form" style="margin-bottom: 10px ; margin-left: 90px">
                        
                        <form action="/edit-profile" style="padding: 10px" method="post"> 
                        @csrf
                        <div class="row-form">
                          <div class="col-25-form">
                            <label for="fname">Name :</label>
                          </div>
                          <div class="col-75-form">
                            <input type="text" id="fname" name="name" value="{{$user->name}}">
                          </div>
                        </div>

                        <div class="row-form">
                          <div class="col-25-form">
                            <label for="fname">Username :</label>
                          </div>
                          <div class="col-75-form">
                            <input type="text" id="fname" name="username" value="{{$user->username}}">
                          </div>
                        </div>

                        <div class="row-form">
                          <div class="col-25-form">
                            <label for="age">Age :</label>
                          </div>
                          <div class="col-75-form">
                            <input type="number" id="lname" name="age" value="{{$user->age}}">
                          </div>
                        </div>

                        <div class="row-form">
                          <div class="col-25-form">
                            <label for="age">National ID :</label>
                          </div>
                          <div class="col-75-form">
                            <input type="number" id="lname" name="nid" value="{{$user->nid}}">
                          </div>
                        </div>



                        <div class="row-form">
                          <div class="col-25-form">
                            <label for="age">Sex :</label>
                          </div>
                          <div class="col-75-form">

                            <input type="radio" name="sex" checked="checked" value="male"> Male
                            <input type="radio" name="sex" value="female"> Female
                            
                          </div>
                        </div>

                        <div class="row-form">
                          <div class="col-25-form">
                            <label for="fname">Email Address :</label>
                          </div>
                          <div class="col-75-form">
                            <input type="text" id="fname" name="email" value="{{$user->email}}">
                          </div>
                        </div>

                        <div class="row-form">
                          <div class="col-25-form">
                            <label for="fname">Mobile no :</label>
                          </div>
                          <div class="col-75-form">
                            <input type="text" id="fname" name="mobile" value="{{$user->mobile}}">
                          </div>
                        </div>

                        <!-- <div class="row-form">
                          <div class="col-25-form">
                            <label for="fname">Address :</label>
                          </div>
                          <div class="col-75-form">
                            <input type="text" id="fname" name="Address" value="Jalal Nagor, Sylhet.">
                          </div>
                        </div> -->

                        <div class="row-form">
                          <div class="col-25-form">
                            <label for="subject">Description</label>
                          </div>
                          <div class="col-75-form">
                            <textarea id="subject" name="details" placeholder="Write something.." style="height:200px"></textarea>
                          </div>
                        </div>
                        <div class="row-form">
                          <input style="align: center" type="submit" value="Update">
                        </div>
                      </form>

                      </div>



                    <!-- Form Ends -->
                    
                </div>
            </div>
        </section>
        <!-- Page Wrapper End -->
        @endsection