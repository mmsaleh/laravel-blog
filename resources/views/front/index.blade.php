@extends('frontpage')
@section('content')
<!-- content -->
                        
  
                        
                        
         <!--/stories-->
         @foreach($posts as $post)
          <div class="row">    
             <div class="col-sm-10">
             @if($post->image)
              <img src="{{asset('/images/' . $post->image)}}" width="800" height="400" />
            @endif
                <a href="{{ url('blog/'.$post->slug) }}" ><h3>{{ $post->title }}</h3></a>
                 <p>{{ substr(strip_tags($post->body), 0, 300) }}{{ strlen(strip_tags($post->body)) > 300 ? "..." : "" }}</p>
                     <small class="text-muted">{{ $post->updated_at->diffForHumans() }} • <a href="{{ url('blog/'.$post->slug) }}" class="text-muted">Read More</a></small>
                 </h4>
           </div> 
            </div>
                        
             <div class="row divider">    
                 <div class="col-sm-12"><hr></div>
              </div>
            @endforeach

          <div class="col-sm-12">
              <div class="page-header text-muted divider text-center">
                  {!! $posts->links(); !!}
              </div>
          </div>
          <div class="row" id="footer">    
              <div class="col-sm-6">
                            
              </div>
              <div class="col-sm-6">
                <p>
                <a href="#" class="pull-right">©2016 Mayada's Blog</a>
                </p>
              </div>
          </div>
                        
@stop
                      