<!DOCTYPE html>          
<html lang="{{ app()->getLocale() }}"> 
   <head>   
      
  <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
        <title>AmalShop</title>
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
        <style >

            img {
  height: 200px;
  width: 60%;
  background-color: powderblue;
               }



            h3 {
  height: 200px;
  width: 60%;
  color:black;
  font-style : italic;font-weight : bold;
               }

        </style>
</head>
<body>

   <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                
                </div>

              <!--  <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
              <!--    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>-->

                    <!-- Right Side Of Navbar -->
                   <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
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
                </div>
            </div>
        </nav>

<div id="wrapper" class="container">
            <section class="navbar main-menu">
                <div class="navbar-inner main-menu">                
                  
                    <nav id="menu" class="pull-right">
                       <ul>
                             
                            <li> <a href="{{url('cvs')}}">produits</a>
                                 <ul>
                             <li><a href="{{url('cvs')}}">MyProduits</a></li>
                             <li><a href="{{url('cvs/create')}}">Ajouter le Produit</a></li>        
                              </ul>
                            </li>     

                             <li><a href="{{url('objet')}}">Shopping</a></li>

                             <li><a href="{{ url('/test') }}">contacte</a></li>                                 
                               
                            <li><a href="info">info</a> </li>                 
                            
                           
                        </ul>
                    </nav>
                    
                </div>
            </section>

<div class="container">
  <div class="row">
   <div class="col-md-12">
    @if (session()->has('success'))
    <div class="alert alert-success" >
       {{session()->get('success')}}
    </div>
    @endif 
 
  
   <!-- <div class="container">

    <div class="row">

     <div class="col-md-12">

<div class="pull-right">
    <a href="{{url('cvs/create')}}"class="btn btn-success">nouveau cv</a>
</div>-->


   @foreach($cvs as $cv)

  <div class="col-sm-6 col-md-4">
         
    <div class="thumbnail" >
     <div class='img'> <img src="{{ asset('storage/'.$cv->photo) }}">

 <div class="pull-right">

    <a href="{{url('cvs/'.$cv->id.'/edit')}}" class="fa fa-edit">editer</a>

      <button type="submit" class="glyphicon glyphicon-trash"></button>
   <!-- <h1><span class="label label-success"> {{$cv->produit}}</span></h1>-->
      <h3> {{$cv->produit}}<br><br>
     <!-- <a href="{{url('cvs/'.$cv->id.'/edit')}}" class="fa fa-edit">editer</a></h3>-->



</div>
</div>
     
      <div class="caption" >
       {{$cv->mesage}}<br>

     <label> tel:{{$cv->tel}}</label><br>
        <span class="label label-info">
         user:{{$cv->user->name}} 
        </span>



      <form action="{{url('cvs/'.$cv->id)}}" method="post">
        {{csrf_field()}}
        {{ method_field('DELETE')}}



       <!-- <p><a href="{{url('cvs/show')}}" class="btn btn-primary" role="button">show</a>-->
       <!-- <a href="{{url('cvs/'.$cv->id.'/edit')}}" class="btn btn-warning" role="button">editer</a>
        <a href="{{url('cvs/'.$cv->id.'/edit')}}">editer</a>-->
     
      <!-- <span><button type="submit" class="btn btn-danger" >Supprimer</button></span>
  
      <button type="submit" class="glyphicon glyphicon-trash"></button>
     
    <a href="{{url('cvs/'.$cv->id.'/edit')}}" class="fa fa-edit">editer</a>-->

     </div>
      
    </div>
  </div>

@endforeach
</div>
 
     


















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

    
<script src="{{ asset('js/app.js') }}"></script>
    </div>
   
   @yield('content')

</body>
</html>





















