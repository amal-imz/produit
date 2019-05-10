<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      
        <title>Laravel</title>

        <!-- Fonts -->
        

        <!-- Styles -->
       <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
        <!-- bootstrap -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">      
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
        
        <link href="themes/css/bootstrappage.css" rel="stylesheet"/>
        
        <!-- global styles -->
       <link href="themes/css/flexslider.css" rel="stylesheet"/>
        <link href="themes/css/main.css" rel="stylesheet"/>

        <!-- scripts  -->
        <script src="themes/js/jquery-1.7.2.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>              
        <script src="themes/js/superfish.js"></script>  
        <script src="themes/js/jquery.scrolltotop.js"></script>  
    </head>
    <body>

        <div id="top-bar" class="container">
            <div class="row">
                <div class="span4">
                   <form method="POST" class="search_form">
                      <a href="index.html" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
                    </form>


                </div>

                    <div class="account pull-right">
                    <ul class="user-menu">              

                 <div class="flex-center position-ref full-height">
                    @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <li><label> <a href="{{ url('/login') }}">Login</a></li></label>
         
                        <li> <label><a href="{{ url('/test') }}">Contact</a></li></label>
                    @endif
                </ul>
                </div>

                </div>
                </div>
                  @endif
          


           <div id="wrapper" class="container">
           <section  class="homepage-slider" id="home-slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <img src="themes/images/carousel/banner-1.jpg" alt="" />
                            <div class="intro">
                                <h1>By Amal-imz</h1>
                                <p><span></span></p>
                                <p><span>welcome to shopEnligne</span></p>
                            </div>
                        </li>
                        <li>
                            <img src="themes/images/carousel/banner-2.jpg" alt="" />
                            
                        </li>
                        
                          <li>
                          <img src="themes/images/carousel/banner-4.jpg" alt="" />
                            
                        </li>
                    </ul>
                </div>          
            </section>

           </div>

        <section class="our_client">
              <!--  <h4 class="title"><span class="text">Manufactures</span></h4>-->
              <div class="row">    <center>                 
                 <div class="span2">
              <a href="#"><img alt="" src="themes/images/inst.png" width="20px"></a>
                    </div>
                    <div class="span2">
                        <a href="#"><img alt="" src="themes/images/fc.jpg" width="20px"></a>
                    </div>
                    <div class="span2">
                        <a href="https://www.facebook.com/"><img alt="" src="themes/images/twt.png" width="20px"></a>
                    </div>
                    <div class="span2">
                        <a href="#"><img alt="" src="themes/images/yout.jpg" width="20px"></a>
                    </div>
                    <div class="span2">
                        <a href="#"><img alt="" src="themes/images/vim.png" width="20px"></a>
                    </div>

                     <div class="span2">
                        <a href="#"><img alt="" src="themes/images/map.png" width="20px"></a>
                    </div>
                  </center>
                </div>
                     


            </section>






           <script src="themes/js/common.js"></script>
        <script src="themes/js/jquery.flexslider-min.js"></script>
        <script type="text/javascript">
            $(function() {
                $(document).ready(function() {
                    $('.flexslider').flexslider({
                        animation: "fade",
                        slideshowSpeed: 4000,
                        animationSpeed: 600,
                        controlNav: false,
                        directionNav: true,
                        controlsContainer: ".flex-container" // the container that holds the flexslider
                    });
                });
            });
        </script>      
         @yield('content')
    </body>

</html>
