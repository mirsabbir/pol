@extends('layouts.nav')
@section('content')

<div class="wrapper">
<section class="page--wrapper  pb--20">
                <div class="container">
                    <div class="row">                   

                        <div class="content-posts active well" id="posts" style="background-color: #1B2631; border: none;">

                            <!-- <div class="row"> -->
                                <div class="col-md-12 " id="form_container">

                                    <form role="form" method="post" id="reused_form">
                                        <div class="row">
                                            <div class="col-sm-12 form-group">
                                                <h3 style="color: white"> Post Details:</h3>
                                                <textarea class="form-control" style="border-radius: 20px;" type="textarea" id="message" name="message" placeholder="Write something. . ." rows="2"></textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12 form-group">

                                                <div class="col-sm-6 upload-btn-wrapper">
                                                    <button type="button" class="btn btn-default" >File Upload</button>
                                                    <input type="file" name="image" />

                                                </div>
                                                <div class="col-sm-6 form-group">

                                                    <button type="submit" class="btn btn-lg btn-default pull-right" >Sent &rarr;</button>

                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- Page Wrapper End -->
            </div>
            <!-- Wrapper End -->


@endsection