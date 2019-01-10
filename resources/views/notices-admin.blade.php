@extends('layouts.admin')

@section('content')  
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">

          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">Notice</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">List : </h6>
                  </div>
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr style="background-color: black">
                          <th scope="col" class="border-0">#</th>
                          <th scope="col-md-9" class="border-0">Name of Files</th>
                          <th scope="col-md-3" class="border-0">Action-Delete</th>
                          
                        </tr>
                      </thead>

                      <tbody>


                        <tr>
                          <td>1</td>
                          <td>First Notice</td>
                          <td><i class="material-icons">delete_forever</i></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Second Notice</td>
                          <td><i class="material-icons">delete_forever</i></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Third Notice</td>
                          <td><i class="material-icons">delete_forever</i></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Fourth Notice</td>
                          <td><i class="material-icons">delete_forever</i></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Fifth Notice</td>
                          <td><i class="material-icons">delete_forever</i></td>
                        </tr>
                        <tr>
                          <td>#</td>
                          <td> <input type="file" name="image" /> </td>
                          <td> <button> Upload File </button> </td>
                        </tr>
                      </tbody>
                      
                    </table>

                    <!-- <div class="row">
                      <div class="col-25">
                        <button> Upload File </button>
                      </div>
                      <div class="col-75">
                        <input type="file" name="image" />
                      </div>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
            <!-- End Default Light Table -->
            
          </div>
          
        </main>
   @endsection('content')