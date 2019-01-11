@extends('layouts.admin')

@section('content')
          
          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">Add a Criminal's Record:</h3>
              </div>
            </div>
            <!-- End Page Header -->


            <!-- Form start -->


          <div class="col-sm-10 card card-small mb-4 well " style="margin-bottom: 10px ; margin-left: 90px">
            
            <form action="/action_page.php" style="padding: 10px">
            <div class="row">
              <div class="col-25">
                <label for="fname">Full Name :</label>
              </div>
              <div class="col-75">
                <input type="text" id="fname" name="firstname" placeholder="Full name..">
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="age">Sex :</label>
              </div>
              <div class="col-75">
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female
                <input type="radio" name="gender" value="other"> Other
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="age">Date of Birth :</label>
              </div>
              <div class="col-75">
                <input type="text" id="lname" name="lastname" placeholder="DD/MM/YEAR">
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="age">Age :</label>
              </div>
              <div class="col-75">
                <input type="text" id="lname" name="lastname" placeholder="Age..">
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="fname">Height :</label>
              </div>
              <div class="col-75">
                <input type="text" id="fname" name="firstname" placeholder="Height..">
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="fname">Skin Color :</label>
              </div>
              <div class="col-75">
                <input type="text" id="fname" name="firstname" placeholder="Skin Color..">
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="fname">Eye Color :</label>
              </div>
              <div class="col-75">
                <input type="text" id="fname" name="firstname" placeholder="Eye Color..">
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="fname">Notable sign :</label>
              </div>
              <div class="col-75">
                <input type="text" id="fname" name="firstname" placeholder="Notable sign..">
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="country">City</label>
              </div>
              <div class="col-75">
                <select id="country" name="country">
                  <option value="australia">Chadpur</option>
                  <option value="canada">Dhaka</option>
                  <option value="usa">Comilla</option>
                  <option value="usa">Chittagong</option>
                  <option value="usa">Sylhet</option>
                  <option value="usa">Khulna</option>
                  <option value="usa">Borisal</option>
                  <option value="usa">Sunamgonj</option>
                </select>
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="fname">Address :</label>
              </div>
              <div class="col-75">
                <input type="text" id="fname" name="Address" placeholder="Address..">
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="subject">Crime History :</label>
              </div>
              <div class="col-75">
                <textarea id="subject" name="subject" placeholder="Description.." style="height:150px"></textarea>
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="fname">Photo :</label>
              </div>
              <div class="col-75">
                <input type="file" name="image" />
              </div>
            </div>

            <div class="row">
              <input style="align: center" type="submit" value="Submit">
            </div>
          </form>

          </div>



            <!-- Form Ends -->





            <!-- Default Light Table -->
            <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Criminal list:</h6>
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
          
      @endsection