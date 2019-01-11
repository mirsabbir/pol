
<!DOCTYPE html>
<html>
<head>
    <title>Personal Profile Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/lib/bootstrap/css/bootstrap.min.css" type="text/css">
    <script src="/lib/jquery-3.2.0.min.js"></script>
    <script src="/lib/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="lib/bootstrap-switch/css/bootstrap-switch.min.css">
    <script src="/lib/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <script src="/js/lazy-load.min.js"></script>
    <script src="/js/socialyte.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="style_2.css" type="text/css">
</head>
<body id="personal">
    <!--Header with Nav -->
    <header class="text-right">
        <form class="text-left search" method="GET">
            <input name="q" type="text" placeholder="Search..">
        </form>
        <div class="second-icon menu-icon">
            <form action="/logout" method="post">
            <span> <button type="submit" style="background:transparent;border:0;"><span class="hidden-xs hidden-sm">Logout</span> <i class="fa fa-sign-out" aria-hidden="true"></i></button>
            </span>
            @csrf
            </form>
        </div>
       <!--  <div class="menu-icon">
            <div class="dropdown">
                <span class="dropdown-toggle" role="button" id="dropdownSettings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  <span class="hidden-xs hidden-sm">Settings</span> <i class="fa fa-cogs" aria-hidden="true"></i>
                </span>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownSettings">
                    
                    <li>
                        <a href="#" title="Settings">
                            <div class="col-xs-4">
                                <i class="fa fa-question" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-8 text-left">
                                <span>FAQ</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="login.html" title="Settings">
                            <div class="col-xs-4">
                                <i class="fa fa-sign-out" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-8 text-left">
                                <span>Logout</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div> -->
        <div class="second-icon dropdown menu-icon">
            <span class="dropdown-toggle" role="button" id="dropdownNotification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <span class="hidden-xs hidden-sm">Notifications</span> <i class="fa fa-bell-o" aria-hidden="true"></i> <span class="badge">2</span>
            </span>
            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownNotification">
                <li class="new-not">
                    <a href="#" title="User name comment"><img src="/img/user2.jpg" alt="User name" class="img-circle img-user-mini"> Formalin Likes your post</a>
                </li>
                <li class="new-not">
                    <a href="#" title="User name comment"><img src="/img/user3.jpg" alt="User name" class="img-circle img-user-mini"> Lima comments your post</a>
                </li>
                <li>
                    <a href="#" title="User name comment"><img src="/img/user4.jpg" alt="User name" class="img-circle img-user-mini"> Shamim Likes your post</a>
                </li>
                <li role="separator" class="divider"></li>
                <li><a href="#" title="All notifications">All Notifications</a></li>
            </ul>
        </div>
        
        <div class="second-icon menu-icon">
            <span><a href="/wall" title="Wall"><span class="hidden-xs hidden-sm">Wall</span> <i class="fa fa-database" aria-hidden="true"></i></a>
            </span>
        </div>
        
        <div class="second-icon menu-icon">
            <span><a href="/" title="Home"><span class="hidden-xs hidden-sm">Home</span> <i class="fa fa-home" aria-hidden="true"></i></a>
            </span>
        </div>
    </header>
    <!--Left Sidebar with info Profile -->
    <div class="sidebar-nav">
        <a href="/profile" title="Profile">
            <img src="{{asset($user->image)}}" alt="User name" class="img-circle img-user">
        </a>
        <h2 class="text-center hidden-xs"><a href="/users/{{$user->id}}" title="Profile">{{$user->name}}</a></h2>
        <p class="text-center user-description hidden-xs">
            <i>{{$user->details}}</i>
        </p>

        <div class="well">
            <form action="/dpupload" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image" />
            <button style="border-radius: 4px ; width: 190px; margin-top: 5px"> <i class="fa fa-pencil" aria-hidden="true"></i> Update Photo </button>
            </form>
        </div>
    </div>
    <div class="content-posts profile-content">
        <div class="banner-profile">
        </div>
        <!-- Tab Panel -->
        
        <ul class="nav nav-tabs" role="tablist">
            @if($user->role==1)
            <li class="active"><a href="#posts" role="tab" id="postsTab" data-toggle="tab" aria-controls="posts" aria-expanded="true">Last posts</a></li>
            @endif
            <li <?php if($user->role!=1) echo 'class="active"' ?>><a href="#profile" role="tab" id="profileTab" data-toggle="tab" aria-controls="profile" aria-expanded="true">Profile</a></li>

        </ul>
        <!--Start Tab Content-->
        <div class="tab-content">
            <!-- Tab Posts -->
            
            <div class="tab-pane fade <?php if($user->role==1) echo 'active in' ?>" role="tabpanel" id="posts" aria-labelledby="postsTab">
                <div id="posts-container" class="container-fluid container-posts">
                 @if($user->role==1)
                    @foreach($posts as $post)
                    <br>
                    
                    <div class="card-post">
                        <div class="row">
                            <div class="col-xs-3 col-sm-2">
                                <a href="/users/{{$post->user->id}}" title="Profile">
                                    <img src="{{asset($post->user->image)}}" alt="My User" class="img-circle img-user">
                                </a>
                            </div>
                            <div class="col-xs-9 col-sm-10 info-user">
                                <h3><a href="/users/{{$post->user->id}}" title="Profile">{{$post->user->name}}</a></h3>
                                <p><i>{{$post->created_at}}</i></p>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class=" col-sm-8 col-sm-offset-2 data-post">
                            <form action="/posts/{{$post->id}}/delete" method="post" style="float:right;">
                            @csrf
                            <button class="btn btn-danger"> Delete Post </button>
                            </form>
                            <!-- <img src="/{{$post->image}}" alt="" > -->
                            <a href="/posts/{{$post->id}}"> <h2  style="text-align:center;border-bottom:3px solid yellow;">{{$post->title}}</h2></a>
                                {!! $post->body !!}
                                <div class="reaction">
                                    &#x2764; 1234 &#x1F603; 54
                                </div>
                                <div class="comments">
                                            <div class="more-comments">View more comments</div>
                                            <ul>
                                                @foreach($post->comments as $comment)
                                                <li><b>{{$comment->user->name}}</b> {{$comment->body}}</li>
                                                @if(\Auth::id()==$comment->user->id)
                                                <form action="/comments/{{$comment->id}}/delete">
                                                    <button class="btn btn-danger">Delete comment</button>
                                                </form>
                                                @endif
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

                    <br>
                    <br>
                    
                    @endforeach
                @endif
                </div>
                <div id="loading">
                    <img src="/img/load.gif" alt="loader">
                </div>
            </div><!-- end Tab Posts -->
            
            <!--Start Tab Profile-->
            <div class="tab-pane <?php if($user->role!='1') echo 'active in'?> fade" role="tabpanel" id="profile" aria-labelledby="profileTab">
                <div class="container-fluid container-posts">
                    <div class="card-post">
                        <ul class="profile-data">
                            <li><b>Name : </b> {{$user->name}}</li>
                            <li><b>Username:</b> {{$user->username}}</li>
                            <li><b>Age : </b> {{$user->age}}</li>
                            <li><b>National ID : </b> {{$user->nid}} </li>
                            <li><b>Sex : </b> {{$user->sex}} </li>
                            <li><b>Email : </b> {{$user->email}} </li>
                            <li><b>Mobile : </b> {{$user->mobile}} </li>
                            <!-- <li><b>Address : </b> Jalal Nagor, Sylhet. </li> -->
                            <li><b>Description : </b> {{$user->details}}</li>
                        </ul>
                        <p><a href="/edit-profile" title="edit profile"> <button style="border-radius: 4px ; width: 200px;"> <i class="fa fa-pencil" aria-hidden="true"></i> Edit profile </button> </a></p>
                    </div>
                </div>
            </div><!-- end tab Profile -->
            
        </div><!-- Close Tab Content-->
    </div><!--Close content posts-->
    <!-- Modal container for settings--->
    <div id="settingsmodal" class="modal fade text-center">
        <div class="modal-dialog">
            <div class="modal-content">
            </div>
        </div>
    </div>
</body>
<script src="/lib/jquery-3.2.0.min.js"></script>
</html>
