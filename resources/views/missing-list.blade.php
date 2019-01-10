
@extends('layouts.admin')

@section('content') 
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          
          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">Missing Person Lists</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">List given below:</h6>
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
                        <tr>
                          <td>
                            <div class="card-post__author d-flex">
                              <a href="member-profile.html" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('img/people.jpg');">Written by Anna Kunis</a>
                            </div>
                          </td>
                          <td>Ali</td>
                          <td>Kerry</td>
                          <td>Russian Federation</td>
                          <td>Gdańsk</td>
                          <td>107-0339</td>
                          <td><i class="material-icons">delete_forever</i></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="card-post__author d-flex">
                              <a href="member-profile.html" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('img/people.jpg');">Written by Anna Kunis</a>
                            </div>
                          </td>
                          <td>Clark</td>
                          <td>Angela</td>
                          <td>Estonia</td>
                          <td>Borghetto di Vara</td>
                          <td>1-660-850-1647</td>
                          <td><i class="material-icons">delete_forever</i></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="card-post__author d-flex">
                              <a href="member-profile.html" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('img/people.jpg');">Written by Anna Kunis</a>
                            </div>
                          </td>
                          <td>Jerry</td>
                          <td>Nathan</td>
                          <td>Cyprus</td>
                          <td>Braunau am Inn</td>
                          <td>214-4225</td>
                          <td><i class="material-icons">delete_forever</i></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="card-post__author d-flex">
                              <a href="member-profile.html" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('img/people.jpg');">Written by Anna Kunis</a>
                            </div>
                          </td>
                          <td>Colt</td>
                          <td>Angela</td>
                          <td>Liberia</td>
                          <td>Bad Hersfeld</td>
                          <td>1-848-473-7416</td>
                          <td><i class="material-icons">delete_forever</i></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Default Light Table -->
            
          </div>
          
        </main>
        @endsection