<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <a class="navbar-brand" href="#">ATN</a>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
        </li>
      </ul>
        @if (Auth::check())
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->username }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu" aria-labelledby="navbarDropdown">
                @if(Auth::user()->role==='admin')
                <li><a href="{{ url('/manage') }}" class="dropdown-item">Dashboard</a></li>
                @endif
                <li><hr class="dropdown-divider"></li>
                <li><a href="{{ url('/logout') }}" class="dropdown-item">Logout</a></li>
            </ul>
              @else
              <li><a href="login" target="_self" class="dropdown-item">Login</a></li>
              @endif
        </li>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
  </nav>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">ATN</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ Auth::user()->username }} <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  @if(Auth::user()->role==='admin')
                  <li><a href="{{ url('/manage') }}" class="dropdown-item">Dashboard</a></li>
                  @endif
                  <li><hr class="dropdown-divider"></li>
                  <li><a href="{{ url('/logout') }}" class="dropdown-item">Logout</a></li>
              </ul>
                @else
                <li><a href="login" target="_self" class="dropdown-item">Login</a></li>
                @endif
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
