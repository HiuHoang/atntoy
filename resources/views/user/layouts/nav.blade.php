<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.theairgunexpo.com%2Fwp-content%2Fuploads%2F2021%2F04%2FATN_flat_2015_rgb_bg.png&imgrefurl=https%3A%2F%2Fwww.theairgunexpo.com%2Fae21-virtual-show-floor%2Fatn-corp%2F&tbnid=dsuAVRLDVaSw-M&vet=10CAsQxiAoAWoXChMIwKe_sYmZ9wIVAAAAAB0AAAAAEAY..i&docid=CzbCRACV1K0cSM&w=2540&h=2211&itg=1&q=atn%20brands&ved=0CAsQxiAoAWoXChMIwKe_sYmZ9wIVAAAAAB0AAAAAEAY" alt="" width="30" height="24" class="d-inline-block align-text-top">
    </a>
  </div>
    {{-- <a class="navbar-brand" href="#">ATN</a> --}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      <ul class="navbar-nav ml-auto">
        @if (Auth::check())
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->username }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu" aria-labelledby="navbarDropdown">
                @if(Auth::user()->role==='admin')
                <li><a href="{{ url('/manage') }}" class="dropdown-item">Dashboard</a></li>
                @endif
                <li><a href="{{ url('/logout') }}" class="dropdown-item">Logout</a></li>
            </ul>
              @else
              <li><a href="login" target="_self" class="dropdown-item">Login</a></li>
              @endif
      </ul>
    </div>
  </nav>

  <!-- Navbar -->

