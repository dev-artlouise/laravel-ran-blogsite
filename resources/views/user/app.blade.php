<!DOCTYPE html>
<html lang="en">

<head>
  @include('user/layouts/head')
</head>

<body>
  
  <header class="masthead" style="background-image: url('{{ asset('user/img/home-bg.jpg') }}')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Blogs</h1>
          </div>
        </div>
      </div>
    </div>
</header>

  @include('user/layouts/navbar')

  <!--Header-->
  <div class="container">
    @yield('header')
  </div>

  <!--Contents-->
  <div class="container">
    @yield('content')
  </div>

  <!-- Footer -->
  @include('user/layouts/footer')
</body>

</html>
