
@extends('layouts.nav')
@section('content')

      <!-- Page Wrapper Start -->
      <section class="page--wrapper pt--80 pb--20">
        <div class="container">
          <div class="row-form">
            <!-- Form start -->


            <div class="col-sm-10 card card-small mb-4 well missing_form" style="margin-bottom: 10px ; margin-left: 90px">

              <form action="/add-missing" style="padding: 10px" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row-form">
                  <div class="col-25-form">
                    <label for="fname">Full Name :</label>
                  </div>
                  <div class="col-75-form">
                    <input type="text" name="fn" id="fname" name="firstname" placeholder="Full name..">
                  </div>
                </div>

                <div class="row-form">
                  <div class="col-25-form">
                    <label for="age">Sex :</label>
                  </div>
                  <div class="col-75-form">
                    <input type="radio" name="sex" value="male"> Male
                    <input type="radio" name="sex" value="female"> Female
                    <input type="radio" name="sex" value="other"> Other
                  </div>
                </div>

                <div class="row-form">
                  <!-- <div class="col-25-form">
                    <label for="age">Date of Birth :</label>
                  </div> -->
                  <!-- <div class="col-75-form">
                    <input type="text" id="lname" name="lastname" placeholder="DD/MM/YEAR">
                  </div> -->
                </div>

                <div class="row-form">
                  <div class="col-25-form">
                    <label for="age">Age :</label>
                  </div>
                  <div class="col-75-form">
                    <input type="text" name="age" id="lname" placeholder="Age..">
                  </div>
                </div>

                <div class="row-form">
                  <div class="col-25-form">
                    <label for="fname">Height :</label>
                  </div>
                  <div class="col-75-form">
                    <input type="text" name="height" id="fname"placeholder="Height..">
                  </div>
                </div>

                <div class="row-form">
                  <div class="col-25-form">
                    <label for="fname">Skin Color :</label>
                  </div>
                  <div class="col-75-form">
                    <input type="text" id="fname" name="skin"  placeholder="Skin Color..">
                  </div>
                </div>

                <div class="row-form">
                  <div class="col-25-form">
                    <label for="fname">Eye Color :</label>
                  </div>
                  <div class="col-75-form">
                    <input type="text" id="fname" name="eye"  placeholder="Eye Color..">
                  </div>
                </div>

                

                <div class="row-form">
                  <div class="col-25-form">
                    <label for="country">City</label>
                  </div>
                  <div class="col-75-form">
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


                <div class="row-form">
                  <div class="col-25-form">
                    <label for="fname">Email Address :</label>
                  </div>
                  <div class="col-75-form">
                    <input type="text" id="fname" name="email" placeholder="Email..">
                  </div>
                </div>

                <div class="row-form">
                  <div class="col-25-form">
                    <label for="fname">Mobile no :</label>
                  </div>
                  <div class="col-75-form">
                    <input type="text" id="fname" name="phone" placeholder="Mobile..">
                  </div>
                </div>

                <div class="row-form">
                  <div class="col-25-form">
                    <label for="fname">Address :</label>
                  </div>
                  <div class="col-75-form">
                    <input type="text" id="fname" name="address" placeholder="Address..">
                  </div>
                </div>

                <div class="row-form">
                  <div class="col-25-form">
                    <label for="fname">Reward :</label>
                  </div>
                  <div class="col-75-form">
                    <input type="text" id="fname" name="dsc" placeholder="Reward...">
                  </div>
                </div>

                <div class="row-form">
                  <div class="col-25-form">
                    <label for="fname">Photo :</label>
                  </div>
                  <div class="col-75-form">
                    <input type="file" name="image" />
                  </div>
                </div>

                <div class="row-form">
                  <input style="align: center" type="submit" value="Submit">
                </div>
              </form>

            </div>



            <!-- Form Ends -->

          </div>
        </div>
      </section>
      <!-- Page Wrapper End -->
      @endsection