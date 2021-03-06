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
