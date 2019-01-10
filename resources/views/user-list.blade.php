







@extends('layouts.admin')

@section('content')

          


        
          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">user table</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Active Users</h6>
                  </div>
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr style="background-color: black">
                          <th scope="col" class="border-0">#</th>
                          <th scope="col" class="border-0">First Name</th>
                          <th scope="col" class="border-0">Last Name</th>
                          <th scope="col" class="border-0">Country</th>
                          <th scope="col" class="border-0">City</th>
                          <th scope="col" class="border-0">Phone</th>
                          <th scope="col" class="border-0">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach(App\User::where('role',0)->get() as $user)
                        <tr>
                          <td>
                            <div class="card-post__author d-flex">
                              <a href="/users/{{$user->id}}" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('/{{$user->image}}');">Written by Anna Kunis</a>
                            </div>
                          </td>
                          <td>{{$user->name}}</td>
                          <td>{{$user->name}}</td>
                          <td>{{$user->country}}</td>
                          <td>{{$user->city}}</td>
                          <td>{{$user->mobile}}</td>
                          <td><form action="/users/delete/{{$user->id}}" method="post">@csrf<button type="submit">delete</button></form></td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Default Light Table -->
            
          </div>
          
        
            
        @endsection