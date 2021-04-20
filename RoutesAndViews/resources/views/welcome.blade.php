
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
        <div class="container"><a class="navbar-brand" href="#page-top">Uriel's Drywall Repair</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto text-uppercase">
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/services')}}">Services</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/gallery')}}">GALLeRY</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/quote')}}">Get Quote</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <header class="masthead">
        <div class="container">
            <div class="intro-text" style="background: url(&quot;assets/img/knockdown-texture-paint-zoomed.jpg&quot;);">
                <div class="intro-lead-in"><span style="color: rgb(0,0,0);font-family: 'Droid Serif';">WELCOME</span></div>
                <div class="intro-heading text-uppercase"><span style="color: rgb(18,18,18);">It's Nice To Meet You</span></div>
            </div>
        </div>
    </header>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="color: rgb(102,115,129);">
                    <h2 class="text-uppercase section-heading" style="color: var(--gray-dark);">Services</h2>
                    <h3 class="text-muted section-subheading">Free Quotes and Estimares</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <h4 class="section-heading">-Drywall Renovation</h4>
                    <h4 class="section-heading">-Water Damage&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h4>
                </div>
                <div class="col-md-4">
                    <h4 class="section-heading">-Popcorn Removal</h4>
                    <h4 class="section-heading">-Tape and Texture&nbsp;</h4>
                </div>
                <div class="col-md-4">
                    <h4 class="section-heading">-Any Drywall Services</h4>
                    <h4 class="section-heading">-Patches&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</h4>
                </div>
            </div>
        </div>
        <section class="about-us" style="padding-bottom: 15px;">
            <div class="row">
                <div class="col">
                    <h2 class="text-uppercase section-heading" style="color: var(--gray-dark);text-align: center;">About us</h2>
                </div>
            </div>
            <div class="container">
                <div class="row padding-content" style="background: rgba(174,172,172,0);">
                    <div class="col-md-4 no-padding">
                        <div id="wowslider-container1">
                            <div class="ws_images">
                                <ul>
                                    <li><img id="wows1_0" src="assets/img/200-2002586_drywall-sheet-rock-wallpapering-service-drywall-clipart.png" style="width: 375px;"></li>
                      
                                </ul>
                            </div>
                            <div class="ws_script" href="http://wowslider.net" style="position:absolute;left:-99%"><a href="http://wowslider.net">javascript image slider</a><strong>Bold</strong></div>
                            <div class="ws_shadow"></div>
                        </div>
                    </div>
                    <div class="col-md-8 abt-right" style="background: rgb(255,255,255);color: rgb(252,245,245);padding-right: 30px;">
                        <h1 class="text-center" style="width: 500px;"></h1>
                        <p style="width: 700px;color: rgb(0,0,0);">We are located in the West Valley of Arizona. Uriel has 20 years + of experience in construction. You will have a finished result that looks great! Our team will stop at nothing to ensure that you come away with 100% satisfaction. If your project has to do with home improvements, we are here to handle your construction needs. So when you want quality work at affordable prices, give us a call for a free estimate and consultation.<br></p>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section id="contact" style="background: #3a3a3a;border-right-color: rgb(147,188,230);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading" style="border-right-color: rgb(255, 255, 255);">Contact Us</h2>
                    <h3 class="text-muted section-subheading">Fill out for a quote</h3>
                </div>
            </div>
     
            <div class="row">
                <div class="col-lg-12">
                    <form method="post" action="{{url('sendemail/send')}}" name="contactForm"  id="contactForm">
              
                     {{ csrf_field() }}
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group"><input class="form-control" type="text" id="name" placeholder="Your Name *"  name="name" ><small class="form-text text-danger flex-grow-1 help-block lead"></small></div>
                                <div class="form-group"><input class="form-control" type="email" id="email" placeholder="Your Email *"  name="email" ><small class="form-text text-danger help-block lead"></small></div>
                                <div class="form-group"><input class="form-control" type="tel" placeholder="Your Phone *"  name="number" ><small class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><textarea class="form-control" id="message" placeholder="Your Message *" required="" name="message"></textarea><small class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div><button class="btn btn-primary btn-sm btn-xl text-uppercase" id="sendMessageButton" value="Send" type="submit">Send Message</button>
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