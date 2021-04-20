<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Uriel's Drywall Repair</title>
    <meta name="description" content="Drywall Renovation
PopCorn removal">
   <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
       <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}">
</head>

<body id="page-top" style="margin: 5px;">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="{{url('/welcome')}}">Uriel's Drywall Repair</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto text-uppercase">
                  <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/services')}}">Services</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/gallery')}}">GALLERY</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/quote')}}">Get Quote</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('header-bg.jpg');">
        <div class="container"></div>
    </header>
    <section id="contact" style="background: rgb(122,124,126);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Quote</h2>
                    <h3 class="text-muted section-subheading" style="color: rgb(245,247,251);"></h3>
                </div>
            </div>
                  @if (count($errors) > 0)
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
            <div class="row">
                <div class="col-lg-12">
                 <form method="post" action="{{url('sendemail/send')}}" name="contactForm"  id="contactForm">
                  {{ csrf_field() }}
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group"><input class="form-control" type="text" id="name" placeholder="Your Name *"  name="name" ><small class="form-text text-danger flex-grow-1 help-block lead"></small></div>
                                <div class="form-group"><input class="form-control" type="email" id="email" placeholder="Your Email *"  name="email" ><small class="form-text text-danger help-block lead"></small></div>
                                <div class="form-group"><input class="form-control" type="tel" placeholder="Your Phone *" name="number" ><small class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><textarea class="form-control" id="message" placeholder="Your Message *" name="message"></textarea><small class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div><button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Get Quote</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4"><span class="copyright">Copyright&nbsp;© Uriel's Drywall Repair 2021</span></div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>
