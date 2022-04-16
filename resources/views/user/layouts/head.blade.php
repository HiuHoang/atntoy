<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>BLap - Home page</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Your custom styles (optional) -->
  <link href="{{asset('css/style.min.css')}}" rel="stylesheet">
  <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

  </style>
</head>
<body>

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

