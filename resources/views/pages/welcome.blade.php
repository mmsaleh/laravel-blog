@extends('main')

@section('title', '| Homepage')
@section('scripts')
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
@stop

@section('content')

        
                <div class="jumbotron" style="background-image: url('/img/code.jpeg'); background-size: cover; width:100%; height:auto">
                    <div class="container">
                        <div id="banner">
                            <h1>WebDevArabic</h1>
                            <p class="lead">A blog about web development and some other stuff!</p>
                        </div>
                        <p><a class="btn btn-default btn-lg" href="#" role="button">Start Reading!</a></p>
                    </div>
                </div>

        <div class="row">
            <div class="col-md-8">
                
                @foreach($posts as $post)
                    <div class="post">
                        <a href="{{ url('blog/'.$post->slug) }}" ><h3>{{ $post->title }}</h3></a>
                        <p>{{ substr(strip_tags($post->body), 0, 300) }}{{ strlen(strip_tags($post->body)) > 300 ? "..." : "" }}</p>
                        <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-default">Read More</a>
                    </div>

                    <hr>

                @endforeach

            </div>
            <div class="col-md-4">
            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    <img alt="" src="https://www.gravatar.com/avatar/bad86a41f3575c94c8773bedcc9fdc70">
                </div>
                <div class="info">
                    <div class="title">
                        <a target="_blank" href="/">WebDevArabic</a>
                    </div>
                    <div class="desc">Passionate designer</div>
                    <div class="desc">Curious developer</div>
                    <div class="desc">Tech geek</div>
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-twitter btn-sm btn-icon" href="https://twitter.com/mayadasaleh">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-danger btn-sm btn-icon" rel="publisher"
                       href="https://plus.google.com/+mayadasaleh">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="btn btn-primary btn-sm btn-icon" rel="publisher"
                       href="https://linkedin.com/user/saleh.mayada">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a class="btn btn-warning btn-sm btn-icon" rel="publisher" href="https://github.com/mmsaleh">
                        <i class="fa fa-github"></i>
                    </a>
                </div>
            </div>
            </div>
        </div>
            
@stop