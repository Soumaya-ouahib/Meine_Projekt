<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    

  <body>
      
  <div class="top_container sub_pages">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="">
            <span>
              Adward
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="/"> Home </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{route ('about.page')}}"> About </a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="{{route ('teachers')}}"> Teacher </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{route ('vehicle.page')}}"> vehicle </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{route ('contact.page')}}">Contact Us</a>
                </li>

              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
        </nav>
      </div>
    </header>

  </div>
  <!-- end header section -->

  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container">
      <h2 class="main-heading ">
        About School
      </h2>
      <p class="text-center">
       {{ $about->content}}
      </p>
      <div class="about_img-box ">
        <img src="images/kids.jpg" alt="" class="img-fluid w-100">
      </div>
      <div class="d-flex justify-content-center mt-5">
        <a href="" class="call_to-btn  ">

          <span>
            Read More
          </span>
          <img src="images/right-arrow.png" alt="">
        </a>
      </div>
    </div>
  </section>


  <!-- about section -->





  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2019 All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- progreesbar script -->

  </script>
</body>
 
  

</html>
