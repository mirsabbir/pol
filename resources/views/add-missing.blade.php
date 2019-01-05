
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- ==== Document Title ==== -->
  <title> Peal To Police </title>
  <!-- ==== Document Meta ==== -->
  <meta name="author" content="ThemeLooks">
  <meta name="description" content="Multipurpose Social Network HTML5 Template">
  <meta name="keywords" content="social media, social network, forum, shop, bootstrap, html5, css3, template, responsive, retina ready">
  <!-- ==== Favicon ==== -->
  <link rel="icon" href="/favicon.png" type="image/png">
  <!-- ==== Google Font ==== -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700%7CRoboto:300,400,400i,500,700">
  <!-- ==== Plugins Bundle ==== -->
  <link rel="stylesheet" href="/css/plugins.min.css">
  <!-- ==== Main Stylesheet ==== -->
  <link rel="stylesheet" href="/style.css">
  <!-- ==== Responsive Stylesheet ==== -->
  <link rel="stylesheet" href="css/responsive-../..//style.css">
  <!-- ==== Color Scheme Stylesheet ==== -->
  <link rel="stylesheet" href="../..//css/colors/color-1.css" id="changeColorScheme">
  <!-- ==== Custom Stylesheet ==== -->
  <link rel="stylesheet" href="/css/custom.css">

</head>
<body>
  <!-- Preloader Start -->
  <div id="preloader">
    <div class="preloader--inner"></div>
  </div>
  <!-- Preloader End -->
  <!-- Wrapper Start -->
  <div class="wrapper">
    <!--Header Section Start-->
    <header class="header--section style--1">

      <!-- Header Navbar Start -->
      <div class="header--navbar navbar bg-black" data-trigger="sticky">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav">
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Header Navbar Logo Start -->
            <div class="header--navbar-logo navbar-brand">
              <h2><span style="color: #C7C7C9">Peal To</span>
                <span style="color: #1DA1F2">Police</span></h2>
              </div>
              <!-- Header Navbar Logo End -->
            </div>
            <div id="headerNav" class="navbar-collapse collapse float--right">
              <!-- Header Nav Links Start -->
              <ul class="header--nav-links style--1 nav ff--primary">
                <li class="dropdown">
                  <a href="home.html">
                    <span>Home</span>
                    <!-- <i class="fa fa-caret-down"></i> -->
                  </a>

                </li>
                <li class="dropdown">
                  <a href="wall.html">
                    <span> Wall </span>
                    <!-- <i class="fa fa-caret-down"></i> -->
                  </a>

                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span>Find People</span>
                    <i class="fa fa-caret-down"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="active" ><a href="missing-person.html"><span>Missing Person</span></a></li>
                    <li><a href="wanted-person.html"><span>Wanted Person</span></a></li>
                    <li><a href="criminal_record.html"><span>Criminal Record</span></a></li>
                    <li><a href="contact_with_journalist.html"><span>Contact with Journalist</span></a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="notice.html">
                    <span>Notices</span>
                    <!-- <i class="fa fa-caret-down"></i> -->
                  </a>

                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span>Contact</span>
                    <!-- <i class="fa fa-caret-down"></i> -->
                  </a>

                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span>Crime Statistics</span>
                    <i class="fa fa-caret-down"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Monthly</a></li>
                    <li><a href="#">Yearly</a></li>
                    <li><a href="#">Daily</a></li>
                  </ul>
                </li>
                <li><a href="user_profile.html"><span>Profile</span></a></li>
                <li><a href="login.html"><span>Login</span></a></li>
              </ul>
              <!-- Header Nav Links End -->
            </div>
          </div>
        </div>
        <!-- Header Navbar End -->
      </header>
      <!-- Header Section End -->

      <!-- Page Wrapper Start -->
      <section class="page--wrapper pt--80 pb--20">
        <div class="container">
          <div class="row-form">
            <!-- Form start -->


            <div class="col-sm-10 card card-small mb-4 well missing_form" style="margin-bottom: 10px ; margin-left: 90px">

              <form action="/action_page.php" style="padding: 10px">
                <div class="row-form">
                  <div class="col-25-form">
                    <label for="fname">Full Name :</label>
                  </div>
                  <div class="col-75-form">
                    <input type="text" id="fname" name="firstname" placeholder="Full name..">
                  </div>
                </div>

                <div class="row-form">
                  <div class="col-25-form">
                    <label for="age">Sex :</label>
                  </div>
                  <div class="col-75-form">
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female
                    <input type="radio" name="gender" value="other"> Other
                  </div>
                </div>

                <div class="row-form">
                  <div class="col-25-form">
                    <label for="age">Date of Birth :</label>
                  </div>
                  <div class="col-75-form">
                    <input type="text" id="lname" name="lastname" placeholder="DD/MM/YEAR">
                  </div>
                </div>

                <div class="row-form">
                  <div class="col-25-form">
                    <label for="age">Age :</label>
                  </div>
                  <div class="col-75-form">
                    <input type="text" id="lname" name="lastname" placeholder="Age..">
                  </div>
                </div>

                <div class="row-form">
                  <div class="col-25-form">
                    <label for="fname">Height :</label>
                  </div>
                  <div class="col-75-form">
                    <input type="text" id="fname" name="firstname" placeholder="Height..">
                  </div>
                </div>

                <div class="row-form">
                  <div class="col-25-form">
                    <label for="fname">Skin Color :</label>
                  </div>
                  <div class="col-75-form">
                    <input type="text" id="fname" name="firstname" placeholder="Skin Color..">
                  </div>
                </div>

                <div class="row-form">
                  <div class="col-25-form">
                    <label for="fname">Eye Color :</label>
                  </div>
                  <div class="col-75-form">
                    <input type="text" id="fname" name="firstname" placeholder="Eye Color..">
                  </div>
                </div>

                <div class="row-form">
                  <div class="col-25-form">
                    <label for="fname">Notable sign :</label>
                  </div>
                  <div class="col-75-form">
                    <input type="text" id="fname" name="firstname" placeholder="Notable sign..">
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
                    <input type="text" id="fname" name="mobile" placeholder="Mobile..">
                  </div>
                </div>

                <div class="row-form">
                  <div class="col-25-form">
                    <label for="fname">Address :</label>
                  </div>
                  <div class="col-75-form">
                    <input type="text" id="fname" name="Address" placeholder="Address..">
                  </div>
                </div>

                <div class="row-form">
                  <div class="col-25-form">
                    <label for="fname">Reward :</label>
                  </div>
                  <div class="col-75-form">
                    <input type="text" id="fname" name="Reward" placeholder="Reward...">
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
      <!-- Footer Section Start -->
      <footer class="footer--section">           
        <!-- Footer Copyright Start -->
        <div class="footer--copyright pt--30 pb--30 bg-darkest">
          <div class="container">
            <div class="text fw--500 fs--14 text-center">
              <p>Copyright &copy; Peal To<span>Police</span>. All Rights Reserved.</p>
            </div>
          </div>
        </div>
        <!-- Footer Copyright End -->
      </footer>
      <!-- Footer Section End -->
    </div>
    <!-- Wrapper End -->
    <!-- Back To Top Button Start -->
    <div id="backToTop">
      <a href="#" class="btn"><i class="fa fa-caret-up"></i></a>
    </div>
    <!-- Back To Top Button End -->
    <!-- ==== Plugins Bundle ==== -->
    <script src="/js/plugins.min.js"></script>

    <!-- ==== Main Script ==== -->
    <script src="/js/main.js"></script>
  </body>
  </html>