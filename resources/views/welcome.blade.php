<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
 
 <style>

           @import url(https://fonts.googleapis.com/css?family=Lato);
           @import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css);
           body { 
           font-family: 'Lato', sans-serif;
           color: #FFF;
          background: #322f30;
         -webkit-font-smoothing: antialiased;
                }
         a {
         text-decoration: none;
         color: #fff;
           }
        p > a:hover{
         color: #d9d9d9;
         text-decoration:  underline;
                    }
         h1,
         h2,
         h3,
         h4,
         h5,
         h6 {
        margin:  1% 0 1% 0 }
     ._12 {
       font-size: 1.2em;
       }
     ._14 {
    font-size: 1.4em;
          }
      ul {
    padding:0;
    list-style: none;
         }
    .footer-social-icons {
    width: 350px;
    display:block;
    margin: 0 auto;
      }
     .social-icon {
     color: #fff;
      }
ul.social-icons {
    margin-top: 10px;
}
.social-icons li {
    vertical-align: top;
    display: inline;
    height: 100px;
}
.social-icons a {
    color: #fff;
    text-decoration: none;
}
.fa-facebook {
    padding:10px 14px;
    -o-transition:.5s;
    -ms-transition:.5s;
    -moz-transition:.5s;
    -webkit-transition:.5s;
    transition: .5s;
    background-color: #322f30;
}
.fa-facebook:hover {
    background-color: #3d5b99;
}
.fa-twitter {
    padding:10px 12px;
    -o-transition:.5s;
    -ms-transition:.5s;
    -moz-transition:.5s;
    -webkit-transition:.5s;
    transition: .5s;
    background-color: #322f30;
}
.fa-twitter:hover {
    background-color: #00aced;
}
.fa-rss {
    padding:10px 14px;
    -o-transition:.5s;
    -ms-transition:.5s;
    -moz-transition:.5s;
    -webkit-transition:.5s;
    transition: .5s;
    background-color: #322f30;
}
.fa-rss:hover {
    background-color: #eb8231;
}
.fa-youtube {
    padding:10px 14px;
    -o-transition:.5s;
    -ms-transition:.5s;
    -moz-transition:.5s;
    -webkit-transition:.5s;
    transition: .5s;
    background-color: #322f30;
}
.fa-youtube:hover {
    background-color: #e64a41;
}
.fa-linkedin {
    padding:10px 14px;
    -o-transition:.5s;
    -ms-transition:.5s;
    -moz-transition:.5s;
    -webkit-transition:.5s;
    transition: .5s;
    background-color: #322f30;
}
.fa-linkedin:hover {
    background-color: #0073a4;
}
.fa-google-plus {
    padding:10px 9px;
    -o-transition:.5s;
    -ms-transition:.5s;
    -moz-transition:.5s;
    -webkit-transition:.5s;
    transition: .5s;
    background-color: #322f30;
}
.fa-google-plus:hover {
    background-color: #e25714;
}

</style>


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

        <div class="footer-social-icons">

    <ul class="social-icons">
        <li><a href="https://www.facebook.com/" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
        <li><a href="https://twitter.com/login" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
        <li><a href="https://rss.com/" class="social-icon"> <i class="fa fa-rss"></i></a></li>
        <li><a href="https://www.youtube.com/" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
        <li><a href="https://www.linkedin.com/" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
        <li><a href="https://www.google.com" class="social-icon"> <i class="fa fa-google-plus"></i></a></li>
    </ul>
</div>






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
       
    </body>

</html>
