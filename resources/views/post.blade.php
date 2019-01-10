
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
        <section class="page--wrapper  pb--20">
            <div class="container">
                <div class="row">                   

                    <div class="content-posts active well" id="posts" style="background-color: #1B2631; border: none;">

                        <div class="card-post well" style="background: white; border-radius: 18px">
                            <div class="row">
                                <div class="col-xs-3 col-sm-2">
                                    <a href="/users/{{$post->user->id}}" title="Profile">
                                        <img src="/{{$post->user->image}}" alt="User name" class="img-circle img-user">
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
                                    <h2  style="text-align:center;border-bottom:3px solid yellow;">{{$post->title}}</h2>

                                    {!! $post->body !!}
                                    <div class="reaction">
                                        &#x2764; 156 &#x1F603; 54
                                    </div>
                                    @if(\Auth::check())
                                    <!-- <div class="comments">
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
                                    </div> -->
                                
                                    <div class="comments" id="cm">
                                        <div class="more-comments">View more comments...</div>
                                        <ul v-for="comment in comments">
                                            
                                            <li :class="'comment-body'+comment.id"><b>@{{comment.user.name}}</b> @{{comment.body}}</li>
                                            
                                            <button  class="btn btn-primary" :class="'edt'+comment.id" @click="edit(comment.id,comment.body)">Edit</button> 
                                            <button class="btn btn-danger" :class="'dlt'+comment.id" @click="dlt(comment.id)">Detete</button>
                                            
                                        </ul>
                                        <!-- <form action="/add-comment" method="post"> -->
                                            <input v-model="comment" type="text" class="form-control" placeholder="Add a comment" name="body">
                                            <button @click="submit">Comment</button>
                                            <!-- <input type="hidden" name="id" value="{{$post->id}}"> -->
                                            <!-- @csrf -->
                                        <!-- </form> -->
                                    </div>
                                    <script src="{{asset('_js/app.js')}}"></script>
                                    <script>
                                        var x = new Vue({
                                            el:'#cm',
                                            data:{
                                                'comments':{!! json_encode ($post->comments) !!},
                                                'comment' : '',
                                                'id' : {{$post->id}},
                                                'compose': ''
                                            },
                                            methods:{
                                                submit(){
                                                    axios.post('/add-comment', {
                                                        body: x.comment,
                                                        id: x.id,
                                                    })
                                                    .then(function (response) {
                                                        var d = response.data;
                                                        console.log(d);
                                                        x.comments.push(d);
                                                    })
                                                    .catch(function (error) {
                                                        console.log(error);
                                                    });
                                                },
                                                edit(id,body){
                                                    var e = '.comment-body'+id;
                                                    var f = '.edt'+id;
                                                    var g = '.dlt'+id;
                                                    var y = '<input type="text" class="box'+id+'" v-model="compose" value="'+body+'">';
                                                    var xo = '<button class="btn btn-primary '+'upd'+id+'" onclick="x.update('+id+')">Update</button>';
                                                    $(e).after(xo);
                                                    $(e).after(y);
                                                    $(e).hide();
                                                    $(f).hide();
                                                    $(g).hide();
                                                    console.log(x.compose);
                                                    // $('#edit-btn').hide();

                                                },
                                                dlt(id){
                                                    var e = '.upd'+id;
                                                    var f = '.edt'+id;
                                                    var g = '.dlt'+id;
                                                    var h = '.box'+id;
                                                    var i = '.comment-body'+id;
                                                    $(e).hide();
                                                    $(h).hide();
                                                    $(f).hide();
                                                    $(g).hide();
                                                    $(i).hide();
                                                    axios.post('/comment/delete/'+id, {
                                                    
                                                    })
                                                    .then(function (response) {
                                                        
                                                        // x.comments.push(d);
                                                    })
                                                    .catch(function (error) {
                                                        console.log(error);
                                                    });
                                                },
                                                update(id){
                                                    var e = '.upd'+id;
                                                    var f = '.edt'+id;
                                                    var g = '.dlt'+id;
                                                    var h = '.box'+id;
                                                    var i = '.comment-body'+id;
                                                    $(e).hide();
                                                    $(h).hide();
                                                    $(f).show();
                                                    $(g).show();
                                                    $(i).show();
                                                    axios.post('/comment/edit/'+id, {
                                                        body: $(h).val(),
                                                    })
                                                    .then(function (response) {
                                                        var d = response.data;
                                                        console.log(d);
                                                        $(i).text(d.body);
                                                        // x.comments.push(d);
                                                    })
                                                    .catch(function (error) {
                                                        console.log(error);
                                                    });
                                                    console.log();
                                                }
                                            },
                                            mounted(){
                                                console.log({!! json_encode ($post->comments) !!});
                                            }
                                           
                                        })
                                    </script>

                                    @endif
                                </div>
                            </div>
                        </div>

                        <!--Close #posts-container-->
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
