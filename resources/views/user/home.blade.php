@extends('user/app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
          <ul>
            
                  <a href="{{ route('posts.index')}}">
                    <h2 class="post-title">
                      <!--title-->Title
                    </h2>
                  </a>
                  <span><!--date--> Date - <!--Author-->Author</span>
                  <!--feature-image-->
                  <p><img src="#" alt="post-image"></p>
    
                  <h6 class="post-subtitle">
                    <!--subtitle-->Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                  </h6>
              </li>

          <ul>
        </div>
        <hr>
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <hr>
@endsection
