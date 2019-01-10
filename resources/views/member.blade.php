<!DOCTYPE html>
<html>
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
    <!-- <link rel="icon" href="/favicon.png" type="image/png"> -->
    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700%7CRoboto:300,400,400i,500,700">
    <!-- ==== Plugins Bundle ==== -->
    <link rel="stylesheet" href="/css/plugins.min.css">
    <!-- ==== Main Stylesheet ==== -->
    <link rel="stylesheet" href="/style.css">
    <!-- ==== Responsive Stylesheet ==== -->
    <link rel="stylesheet" href="/css/responsive-style.css">
    <!-- ==== Color Scheme Stylesheet ==== -->
    <link rel="stylesheet" href="../../css/colors/color-1.css" id="changeColorScheme">
    <!-- ==== Custom Stylesheet ==== -->
    <link rel="stylesheet" href="/css/custom.css">
    <!-- ==== HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries ==== -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- <link rel="stylesheet" href="/lib/bootstrap/css/bootstrap.min.css" type="text/css"> -->
    <script src="/lib/jquery-3.2.0.min.js"></script>
    <script src="/lib/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/lib/bootstrap-switch/css/bootstrap-switch.min.css">
    <script src="/lib/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <script src="//twemoji.maxcdn.com/twemoji.min.js"></script>
    <script src="/js/lazy-load.min.js"></script>
    <script src="/js/socialyte.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700" rel="stylesheet">
    <!-- <link rel="stylesheet" href="style_2.css" type="text/css"> -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                                    <li><a href="/missings"><span>Missing Person</span></a></li>
                                    <li><a href="/wanteds"><span>Wanted Person</span></a></li>
                                    <li><a href="criminal_record.html"><span>Criminal Record</span></a></li>
                                    <li><a href="contact_with_journalist.html"><span>Contact with Journalist</span></a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="/notices">
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
                            <li>
                                <form action="/logout" method = "post">
                                @csrf
                                    <button type="submit" style="background:transparent;border:0;margin-top:26px;">Logout</button>
                                </form>
                            </li>
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
                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-12 pb--60" data-trigger="stickyScroll">

                        <div class="col-md-4">
                            <div>
                                    <img src="/{{$w->image}}" alt="Image">
                            </div>
                            <div>
                                <h2 class="h3 fw--600" style="color: white">{{$w->fn}}{{$w->ln}}</h2>
                            </div>
                        </div>


                        <div class="main--content-inner drop--shadow col-md-8">

                            <!-- Content Nav Start -->
                            <div class="content--nav pb--30">
                                <ul class="nav ff--primary fs--14 fw--500 bg-lighter">
                                    
                                    <li class="active"><a href="">Profile</a></li>
                                    
                                </ul>
                            </div>
                            <!-- Content Nav End -->
                            <!-- Profile Details Start -->
                            <div class="profile--details fs--14">
                                <!-- Profile Item Start -->
                                <div class="profile--item">
                                    
                                    <div class="profile--info" style="color: white">
                                        <table class="table">
                                            <tr>
                                                <th>Full Name</th>
                                                <td>{{$w->fn}}{{$w->ln}}</td>
                                            </tr>
                                            <tr>
                                                <th>Sex</th>
                                                <td>{{$w->sex}}</td>
                                            </tr>
                                            
                                            <tr>
                                                <th>Age</th>
                                                <td> {{$w->age}} </td>
                                            </tr>
                                            <tr>
                                                <th>Height</th>
                                                <td>{{$w->height}}</td>
                                            </tr>
                                            <tr>
                                                <th>Skin Color</th>
                                                <td>{{$w->skin}}</td>
                                            </tr>
                                            <tr>
                                                <th>Eye Color</th>
                                                <td> {{$w->eye}} </td>
                                            </tr>
                                            
                                        </table>
                                    </div>
                                </div>
                                <!-- Profile Item End -->
                                <!-- Profile Item Start -->
                                
                                    
                                    <div class="profile--info" style="color: white">
                                       
                                        <h3 style="color: white">Description & Reward</h3>
                                    
                                        <p>{{$w->dsc}}</p>
                                    </div>
                               
                                <!-- Profile Item End -->
                                
                                <!-- Profile Item Start -->
                                <div>
                                    <div class="profile--info" style="color: white">
                                        <h3 style="color: white">Contact</h3>
                                        <table class="table">
                                            <tr>
                                                <th>Phone</th>
                                                <td>{{$w->phone}}</a></td>
                                            </tr>
                                            <tr>
                                                <th>E-mail</th>
                                                <td>{{$w->email}}</td>
                                            </tr>
                                            <tr>
                                                <th>Address</th>
                                                <td>{{$w->address}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!-- Profile Item End -->
                            </div>
                            <!-- Profile Details End -->
                        </div>
                    </div>
                    <!-- Main Content End -->
                    
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
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="/js/plugins.min.js"></script>

    <!-- ==== Main Script ==== -->
    <script src="/js/main.js"></script>
</body>
</html>