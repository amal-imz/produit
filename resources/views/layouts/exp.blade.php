<!--<!DOCTYPE html>
<html>
<head>
	<title>SHOP</title>
	<link rel="stylesheet" href="{{asset('css/theme.css')}}">
 
        <title>SHOP</title>


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

        <!-- scripts -->
        <script src="themes/js/jquery-1.7.2.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>              
        <script src="themes/js/superfish.js"></script>  
</head>
</head>
<body>


<nav class="navbar navbar-default">
  <div class="menu">


  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
   
    </div>


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       <!--<ul class="nav navbar-nav">

           <li><a href="{{url('home')}}"> Home</a></li>
            <li><a href="{{url('contact')}}"> Contact</a></li>
            <li><a href="{{url('form')}}"> Ajouter Produit</a></li>
            <li><a href="{{url('cvs')}}"> Produits</a></li>
   
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>-->
      </form>
      <ul class="nav navbar-nav navbar-right">
        

         @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                            
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
      </ul>

    </div><!-- /.navbar-collapse -->
     
    
  </div><!-- /.container-fluid -->
</div>


       <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                       
    </div>                </ul>
  </nav>   
 

  <div id="wrapper" class="container">
            <section class="navbar main-menu">
                <div class="navbar-inner main-menu">                
                    <a href="index.html" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
                    <nav id="menu" class="pull-right">
                        <ul>
                             <li><a href="{{url('home')}}">produits</a></li>   
                               <li><a href="{{url('cvs')}}">add.produit</a></li>   
                            <li><a href="./products.html">Woman</a>                 
                                <ul>
                                    <li><a href="./products.html">Lacinia nibh</a></li>                                 
                                    <li><a href="./products.html">Eget molestie</a></li>
                                    <li><a href="./products.html">Varius purus</a></li>                                 
                                </ul>
                            </li>                                                           
                            <li><a href="./products.html">Man</a></li>          
                            <li><a href="./products.html">Sport</a>
                                <ul>                                    
                                    <li><a href="./products.html">Gifts and Tech</a></li>
                                    <li><a href="./products.html">Ties and Hats</a></li>
                                    <li><a href="./products.html">Cold Weather</a></li>
                                </ul>
                            </li>                           
                            <li><a href="./products.html">Hangbag</a></li>
                            <li><a href="./products.html">Best Seller</a></li>
                            <li><a href="./products.html">Top Seller</a></li>
                        </ul>
                    </nav>
                </div>
            </section>
      

























@yield('content')





















<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}">	</script>
<script src="{{asset('assets/img.jpg')}}">	</script>

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




</div>


</body>
</html>          
