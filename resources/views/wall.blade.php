
@extends('layouts.nav')
@section('content')

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
                                        
                                    <div class="comments" id="cm">
                                        <div class="more-comments">View more comments</div>
                                        <ul v-for="comment in comments">
                                            
                                            <li><b>@{{comment.user.name}}</b> @{{comment.body}}</li>
                                            <input type="text" v-model="compose">
                                            <button class="btn btn-primary">Edit</button> <button class="btn btn-danger"></button>
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
                                                'comments':{!! json_encode($post->comments) !!},
                                                'comment' : '',
                                                'id' : {{$post->id}}
                                            },
                                            methods:{
                                                submit(){
                                                    axios.post('/add-comment', {
                                                        body: x.comment,
                                                        id: x.id,
                                                    })
                                                    .then(function (response) {
                                                        var d = {
                                                            user :{
                                                                name: '{{Auth::user()->name}}'
                                                            },
                                                            body: x.comment
                                                        };

                                                        x.comments.push(d)
                                                    })
                                                    .catch(function (error) {
                                                        console.log(error);
                                                    });
                                                }
                                            },
                                            mounted(){
                                                
                                                console.log({!! json_encode ($post->comments) !!});
                                            }
                                           
                                        })
                                    </script>
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
@endsection