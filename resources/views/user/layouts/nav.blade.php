<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #75baec;">
  <a class="navbar-brand" href="{{ url('/') }}">ATN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <ul class="navbar-nav ml-auto">
      @if (Auth::check())
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              {{ Auth::user()->username }} <span class="caret"></span>
          </a>

          <ul class="dropdown-menu" role="menu">
              @if(Auth::user()->role==='admin')
              <li><a href="{{ url('/manage') }}" class="text-dark">Dashboard</a></li>
              @endif
              <li><a href="{{ url('/logout') }}" class="text-dark">Logout</a></li>
          </ul>
      @else
    <div class="form-inline">
      <li><a href="login" target="_self" class="btn btn-info">Login</a></li>
      <li><a href="register" target="_self" class="btn btn-dark ml-2">Register</a></li>
    </div>
      @endif
    </ul>
  </div>
</nav>

<!-- Navbar -->
  <!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade pt-4" data-ride="carousel">

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
  
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
  
      <!--First slide-->
      <div class="carousel-item active">
        <div class="view" style="background-image: url('https://thumbs.dreamstime.com/b/background-movie-cartoon-superheroes-action-figures-toys-beautiful-colourful-wallpaper-image-film-dolls-memorabilia-121851724.jpg'); background-repeat: no-repeat; background-size: cover;">
  
          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
  
            <!-- Content -->
            <div class="text-center text-white mx-5 wow fadeIn">
              <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg text-white">Explore now
              </a>
            </div>
            <!-- Content -->
  
          </div>
          <!-- Mask & flexbox options-->
  
        </div>
      </div>
      <!--/First slide-->
  
      <!--Second slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('https://wallpaperaccess.com/full/1657858.jpg'); background-repeat: no-repeat; background-size: cover;">
  
          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
  
            <!-- Content -->
            <div class="text-center text-white mx-5 wow fadeIn">
              <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg text-white">Explore now
              </a>
            </div>
            <!-- Content -->
  
          </div>
          <!-- Mask & flexbox options-->
  
        </div>
      </div>
      <!--/Second slide-->
  
      <!--Third slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('https://wallpaperaccess.com/full/1164874.jpg'); background-repeat: no-repeat; background-size: cover;">
  
          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
  
            <!-- Content -->
            <div class="text-center text-white mx-5 wow fadeIn">
              <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg text-white">Explore now
              </a>
            </div>
            <!-- Content -->
  
          </div>
          <!-- Mask & flexbox options-->
  
        </div>
      </div>
      <!--/Third slide-->
  
    </div>
    <!--/.Slides-->
  
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  
  </div>
  <!--/.Carousel Wrapper-->
