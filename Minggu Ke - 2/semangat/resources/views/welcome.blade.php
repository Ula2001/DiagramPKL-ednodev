<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

        <!-- Font Awesome -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">        

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <!-- <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
        
            .full-height {
                height: 100vh;
            }
        
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
        
            .position-ref {
                position: relative;
            }
        
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
        
            .content {
                text-align: center;
            }
        
            .title {
                font-size: 84px;
            }
        
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        
            .m-b-md {
                margin-bottom: 30px;
            }
        </style> -->

    </head>
    <body>
        <!--<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
        </div>-->

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p style="font-size: 65px"><span style="color: deeppink">Kulan</span>Company</p>     
                </div> 
                <div class="col-md-6 text-right">
                    @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <br>
                        <a href="{{ url('/home') }}" class="btn btn-danger">Home</a>
                    @else
                        <br>
                        <a href="{{ route('login') }}" class="btn btn-primary">Login </a>
                        <br>
                        <a href="{{ route('register') }}" class="btn btn-danger">Register</a>
                    @endauth
                </div>
            @endif
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</div>
</nav>





<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('img/img1.jpg')}}" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <p style="color: deeppink; font-size: 50px; font-weight: bold;">Naon we lah kumaha si etaa</p>
        <button class="btn btn-danger btn-lg">KNOW MORE</button>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img/img3.jpg')}}" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <p style="color: deeppink; font-size: 50px; font-weight: bold;">Naon we lah kumaha si etaa</p>
        <button class="btn btn-danger btn-lg">KNOW MORE</button>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img/img5.jpg')}}" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <p style="color: deeppink; font-size: 50px; font-weight: bold;">Naon we lah kumaha si etaa</p>
        <button class="btn btn-danger btn-lg">KNOW MORE</button>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="about container mt-5">
    <div class="row text-center">
        <div class="col-md-12">
            <h1 style="color: dodgerblue">About Us</h1>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-md-6">
            <img src="{{ asset('img/img2.jpg')}}" class="img-fluid" alt="img">
        </div>

        <div class="col-md-6">
            <p style="margin: 0px 10px">
                Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren '60 populair gew
            </p>
        </div>
    </div>
</div>

        <div class="about container mt-5">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1 style="color: dodgerblue">Urang Terbaik</h1>
                </div>
            </div>
            <div class="row text-center mt-5">
                <div class="col-md-3 best-card">
                <div class="card best-card">
                    <p style="font-size: 100px;" class="mb-0; "><i class="fa fa-globe"></i></p>
                    <div class="card-body">
                        <h5 class="card-title">Global Pencarian</h5>
                        <p class="card-text">uwen overleefd maar is ook, vrijwel onveranderd.</p>
                        <button class="btn btn-primary">Know More</button>
                    </div>
                </div>
                </div>

                <div class="col-md-3 best-card">
                <div class="card best-card">
                    <p style="font-size: 100px;" class="mb-0; "><i class="fa fa-lightbulb-o"></i></p>
                    <div class="card-body">
                        <h5 class="card-title">Global Pencarian</h5>
                        <p class="card-text">uwen overleefd maar is ook, vrijwel onveranderd.</p>
                        <button class="btn btn-primary">Know More</button>
                    </div>
                </div>
                </div>

                <div class="col-md-3 best-card">
                <div class="card best-card">
                    <p style="font-size: 100px;" class="mb-0; "><i class="fa fa-cog"></i></p>
                    <div class="card-body">
                        <h5 class="card-title">Global Pencarian</h5>
                        <p class="card-text">uwen overleefd maar is ook, vrijwel onveranderd.</p>
                        <button class="btn btn-primary">Know More</button>
                    </div>
                </div>
                </div>

                <div class="col-md-3 best-card">
                <div class="card best-card">
                    <p style="font-size: 100px;" class="mb-0; "><i class="fa fa-suitcase"></i></p>
                    <div class="card-body">
                        <h5 class="card-title">Global Pencarian</h5>
                        <p class="card-text">uwen overleefd maar is ook, vrijwel onveranderd.</p>
                        <button class="btn btn-primary">Know More</button>
                    </div>
                </div>
                </div>

            </div>
        </div>


        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 no-padding-margin">
                    <div class="media">
                        <div class="media-background best-card mr-4">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">
                                Kumaha Kulan wee urang mah naon ath
                            </h5>
                             Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar 
                        </div>
                    </div>
                </div>

                <div class="col-md-6 no-padding-margin">
                    <div class="media">
                        <div class="media-background best-card mr-4">
                            <i class="fa fa-bell"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">
                                Kumaha Kulan wee urang mah naon ath
                            </h5>
                             Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar 
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-6 no-padding-margin">
                    <div class="media">
                        <div class="media-background best-card mr-4">
                            <i class="fa fa-comments"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">
                                Kumaha Kulan wee urang mah naon ath
                            </h5>
                             Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar 
                        </div>
                    </div>
                </div>

                <div class="col-md-6 no-padding-margin">
                    <div class="media">
                        <div class="media-background best-card mr-4">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">
                                Kumaha Kulan wee urang mah naon ath
                            </h5>
                             Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12 blue-line"></div>
            </div>
        </div>

        <div class="container">
            <div class="row text-center mt-5">
                <div class="col-md-12">
                    <h1 style="color: dodgerblue;">The Best Bussinerss Service</h1>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card no-border">
                        <img src="{{ asset('img/img4.jpg')}}" class="img-fluid" alt="img">
                        <div class="card-body">
                            <h5 class="card-title text-center">Naon we kumaha urang</h5>
                            <p class="card-text">
                                orem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw. 
                            </p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>  
                <div class="col-md-4">
                    <div class="card no-border">
                        <img src="{{ asset('img/img5.jpg')}}" class="img-fluid" alt="img">
                        <div class="card-body">
                            <h5 class="card-title text-center">Naon we kumaha urang</h5>
                            <p class="card-text">
                                orem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw. 
                            </p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>  
                <div class="col-md-4">
                    <div class="card no-border">
                        <img src="{{ asset('img/img6.jpg')}}" class="img-fluid" alt="img">
                        <div class="card-body">
                            <h5 class="card-title text-center">Naon we kumaha urang</h5>
                            <p class="card-text">
                                orem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw. 
                            </p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>  
            </div>

            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card no-border">
                        <img src="{{ asset('img/img7.jpg')}}" class="img-fluid" alt="img">
                        <div class="card-body">
                            <h5 class="card-title text-center">Naon we kumaha urang</h5>
                            <p class="card-text">
                                orem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw. 
                            </p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>  
                <div class="col-md-4">
                    <div class="card no-border">
                        <img src="{{ asset('img/img12.jpg')}}" class="img-fluid" alt="img">
                        <div class="card-body">
                            <h5 class="card-title text-center">Naon we kumaha urang</h5>
                            <p class="card-text">
                                orem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw. 
                            </p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>  
                <div class="col-md-4">
                    <div class="card no-border">
                        <img src="{{ asset('img/img9.jpg')}}" class="img-fluid" alt="img">
                        <div class="card-body">
                            <h5 class="card-title text-center">Naon we kumaha urang</h5>
                            <p class="card-text">
                                orem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw. 
                            </p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>  
            </div>
        </div>

        <div class="container-fluid help mt-5 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-6">
                        <div class="row">
                            <h1>Bade Moal?</h1>
                        </div>
                        <div class="row mt-3">
                            <h5>um is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw.um is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw.</h5>
                        </div>

                        <div class="row mt-3 pb-4">
                            <div class="col-md-6">
                                <ul style="list-style-type: none; margin: 0px; padding: 0px;">
                                    <li><i class="fa fa-check"></i>Present vesnaonwe</li>
                                    <li><i class="fa fa-check"></i>Present vesnaonwe</li>
                                    <li><i class="fa fa-check"></i>Present vesnaonwe</li>
                                    <li><i class="fa fa-check"></i>Present vesnaonwe</li>
                                </ul>
                            </div>

                            <div class="col-md-6">
                                <ul style="list-style-type: none; margin: 0px; padding: 0px;">
                                    <li><i class="fa fa-check"></i>Present vesnaonwe</li>
                                    <li><i class="fa fa-check"></i>Present vesnaonwe</li>
                                    <li><i class="fa fa-check"></i>Present vesnaonwe</li>
                                    <li><i class="fa fa-check"></i>Present vesnaonwe</li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="pt-5 pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="media">
                            <div class="footer-media mr-3"><i class="fa fa-map-maker"></i></div>
                            <div class="media-body">
                                <h5 class="mt-0">Address</h5>
                                0909 Marmora Jalan,Palembnag<br> D02DD_-
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="media">
                            <div class="footer-media mr-3"><i class="fa fa-phone"></i></div>
                            <div class="media-body">
                                <h5 class="mt-0">Call Us</h5>
                                0808080880<br>
                                08080808++
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="media">
                            <div class="footer-media mr-3"><i class="fa fa-facebook-f"></i></div>
                            <div class="media-body">
                                <h5 class="mt-0">Follow Us</h5>
                                ADMIN.com/Facebookna
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



        <!-- JS Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

    </body>
</html>
