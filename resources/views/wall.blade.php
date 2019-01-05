
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
    <!-- ==== HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries ==== -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- <link rel="stylesheet" href="/lib/bootstrap/css/bootstrap.min.css" type="text/css"> -->
    <script src="/lib/jquery-3.2.0.min.js"></script>
    <script src="/lib/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="..html/lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/lib/bootstrap-switch/css/bootstrap-switch.min.css">
    <script src="/lib/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <script src="/twemoji.maxcdn.com/twemoji.min.js"></script>
    <script src="/js/lazy-load.min.js"></script>
    <script src="/js/socialyte.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700" rel="stylesheet">
    <!-- <link rel="stylesheet" href="style_2.css" type="text/css"> -->

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
                                    <a href="/">
                                        <span>Home</span>
                                        <!-- <i class="fa fa-caret-down"></i> -->
                                    </a>

                                </li>
                                <li class="dropdown  active">
                                    <a href="/wall">
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
                                        <li><a href="/missings"><span>Missing Person</span></a></li>
                                        <li><a href="/wanteds"><span>Wanted Person</span></a></li>
                                        <li><a href="/criminal_records"><span>Criminal Record</span></a></li>
                                        <li><a href="/contact"><span>Contact with Journalist</span></a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="/notices">
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
            <section class="page--wrapper  pb--20">
                <div class="container">
                    <div class="row">                   

                        <div class="content-posts active well" id="posts" style="background-color: #1B2631; border: none;">

                            <!-- <div class="row"> -->
                                <div class="col-md-12 " id="form_container">
                                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(\Auth::user()->role==1)
                                    <form role="form" method="post" id="reused_form" method="post" action="/create-post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-sm-12 form-group">

                                                <h2 style="color: white"> Your post:</h2>

                                                <div class="form-group">
                                                  
                                                  <input style="border-radius: 10px;" type="text" class="form-control"  placeholder="Post Headline" name="title">
                                              </div>

                                              <!-- post -->

                                              <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<textarea name="body" class="form-control my-editor"></textarea>
<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea.my-editor",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>




                                              <!-- /post -->
                                          </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-sm-12 form-group">

                                            <div class="col-sm-6 upload-btn-wrapper">
                                                <button type="button" class="btn btn-default" >File Upload</button>
                                                <input type="file" name="image" />

                                            </div>
                                            <div class="col-sm-6 form-group">

                                                <button type="submit" class="btn btn-lg btn-default pull-right" >Post &rarr;</button>

                                            </div>
                                        </div>
                                    </div>
                                    @csrf
                                </form>
                                @endif
                            </div>
                            <!-- </div> -->



                            <div class="filter--nav pb--50 clearfix" style="margin-right: 50px">
                                <div class="filter--options float--right">
                                    <label>
                                        <span class="fs--14 ff--primary fw--500 text-darker">Show By :</span>
                                        <select name="membersfilter" class="form-control form-sm" data-trigger="selectmenu">
                                            <option value="last-active" selected>Todays Post</option>
                                            <option value="new-registered">Last Month</option>
                                            <option value="alphabetical">Last Year</option>
                                        </select>
                                    </label>
                                </div>
                            </div>

                            @foreach($posts as $post)
                            <div class="card-post well" style="background: white; border-radius: 18px">
                                <div class="row">
                                    <div class="col-xs-3 col-sm-2">
                                        <a href="/users/{{$post->user->id}}" title="Profile">
                                            <img src="{{$post->user->image}}" alt="User name" class="img-circle img-user">
                                        </a>
                                    </div>
                                    <div class="col-xs-9 col-sm-10 info-user">
                                        <h3><a href="/users/{{$post->user->id}}" title="Profile">{{$post->user->name}}</a></h3>
                                        <p><i>{{$post->created_at}}</i></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2 data-post">
                                        <img src="/{{$post->image}}" alt="">
                                        <a href="/posts/{{$post->id}}"><h4 style="text-align: center; border-bottom:5px solid yellow;">  {{$post->title}} </h4></a>
                                        {!! $post->body !!}
                                        <div class="reaction">
                                            &#x2764; 156 &#x1F603; 54
                                        </div>
                                        <div class="comments">
                                            <div class="more-comments">View more comments</div>
                                            <ul>
                                                @foreach($post->comments as $comment)
                                                <li><b>{{$comment->user->name}}</b> {{$comment->body}}t</li>
                                                @endforeach
                                            </ul>
                                            <form action="/add-comment" method="post">
                                                <input type="text" class="form-control" placeholder="Add a comment" name="body">
                                                <button type="submit">Comment</button>
                                                <input type="hidden" name="id" value="{{$post->id}}">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                           

                            <!--Close #posts-container-->
                            <div id="loading">
                                <img src="img/load.gif" alt="loader">
                            </div>
                        </div>

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
