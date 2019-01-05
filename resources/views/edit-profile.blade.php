
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
                    <div id="headerNav" class="navbar-collapse collapse float--right">

                        <div class="navbar-header">

                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav">
                                <span class="sr-only">Toggle Navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="header--navbar-logo navbar-brand">
                                <h2><span style="color: #C7C7C9">Peal To</span>
                                    <span style="color: #1DA1F2">Police</span></h2>
                            </div>

                        </div>



                        <!-- Header Nav Links Start -->
                        <ul class="header--nav-links style--1 nav ff--primary homenavfloat">
                            
                            <li class="dropdown">
                                <a href="admin_components-blog-posts.html">
                                    <span>Admin</span>
                                    <i class="fa fa-user"></i>
                                </a>
                                
                            </li>

                            <li class="dropdown">
                                <a href="/">
                                    <span>Home</span>
                                    <!-- <i class="fa fa-caret-down"></i> -->
                                </a>
                                
                            </li>
                            <li class="dropdown">
                                <a href="/wall">
                                    <span> Wall </span>
                                    <!-- <i class="fa fa-caret-down"></i> -->
                                </a>
                                
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span>Find People</span>
                                    <!-- <i class="fa fa-caret-down"></i> -->
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="missing-person.html"><span>Missing Person</span></a></li>
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
                            
                            <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span>Contact</span>
                                </a>
                                
                            </li> -->

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span>Crime Statistics</span>
                                    <!-- <i class="fa fa-caret-down"></i> -->
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Monthly</a></li>
                                    <li><a href="#">Yearly</a></li>
                                    <li><a href="#">Daily</a></li>
                                </ul>
                            </li>
                            
                            @if(!Auth::check())
                            <li><a href="/login"><span>Login</span></a></li>
                            @else
                            <li><a href="/profile"><span>Profile</span></a></li>
                            @endif
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
                            <input type="number" id="fname" name="mobile" value="{{$user->mobile}}">
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