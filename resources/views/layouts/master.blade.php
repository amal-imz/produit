<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- Styles -->

        <link href="assets/css/bootstrap.min.css" rel="stylesheet">      
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
        
        <link href="themes/css/bootstrappage.css" rel="stylesheet"/>
        
        <!-- global styles -->
        <link href="themes/css/flexslider.css" rel="stylesheet"/>
        <link href="themes/css/main.css" rel="stylesheet"/>
        <script src="assets/js/bootstrap.min.js"></script>    
        <!-- scripts -->
      <!--<script src="themes/js/jquery-1.7.2.min.js"></script>
              
        <script src="themes/js/superfish.js"></script>  
        <script src="themes/js/jquery.scrolltotop.js"></script> -->
        <style >
         .cadre	{
		background-image:radial-gradient(black);
		border: 10px solid white;
		width: 1100px;
		margin: auto;
		padding: 5px 30px 30px 30px;
		border-radius: 30px;
		
	     }

        </style>

</head>
<body>
   


            
<!-- <div id="top-bar" class="container">-->

         
       <div id="wrapper" class="container">
            <section class="navbar main-menu">
                <div class="navbar-inner main-menu">    

             <nav id="menu" class="pull-right">
                        <ul>

                           <li><a href="./products.html">Femme</a>                 
                                <ul>
                                    <li><a href="./products.html">Lacinia nibh</a></li>                              
                                    <li><a href="./products.html">Eget molestie</a></li>
                                    <li><a href="./products.html">Varius purus</a></li>
                                </ul>
                            </li>                                                           
                            <li><a href="./products.html">Homme</a></li>          
                            <li><a href="./products.html">Sport</a>
                                <ul>                                    
                                    <li><a href="./products.html">Gifts and Tech</a></li>
                                    <li><a href="./products.html">Ties and Hats</a></li>
                                    <li><a href="./products.html">Cold Weather</a></li>
                                </ul>
                            </li>                           
                            <li><a href="./products.html">Hangbag</a></li>
                            <li><a href="./products.html">Best Seller</a></li>
                            <li><a href="./products.html">produit</a></li>
                             <li><a href="{{url('cvs/create')}}">addProduit</a></li>
                          <!--  <a href=""class="btn btn-success">nouveau produit </a>
                            <a href=""class="btn btn-primary">Afficher details</a>
                            <a href=""class="btn btn-default">modifer produit </a>
        <button type="submit" class="btn btn-danger">effacer produit</button><br><br>-->
                        </ul>

                    </nav>
                              </div>

                        </section><br>
 <div class="cadre"> 
<div class="pull-right">
  	  <a href=""class="btn btn-success" style="width:100px">nouveau  </a><br><br><br><br>
  	  <a href=""class="btn btn-primary" style="width:100px">Afficher </a><br><br><br><br>
      <a href=""class="btn btn-default" style="width:100px">modifer  </a><br><br><br><br>
        <button type="submit" class="btn btn-danger" style="width:100px">effacer</button><br><br>

</div>

                       
<form>



<input type="text" placeholder="CIN" class="form-control" name="cin" style="width:400px"><p><p>

<input type= "text" placeholder="Nom" class="form-control" name="nom" style="width:400px"><p>

<input type= "text" name="prenom" placeholder="Prénom" class="form-control"
style="width:400px"><p>
  
 <select name="type" type="text" placeholder="Type" class="form-control"
style="width:400px"  >
<option>achat
<option>vendre
<option>louer
</select><p>   

 <input type= "text" name="produit" placeholder="Produit" class="form-control"
style="width:400px"><p>

  <input type= "text" name="tel" placeholder="Telephone" class="form-control"
style="width:400px"><p>

<textarea type="text" name="mesage" placeholder="Caracteristique" class="form-control" style="width:400px" ></textarea> <p>
<!--<label for="dn">date  </label><input type="date" id="dn" name="date"><br>-->

<!--<input type="text" name="image" >-->
<div class="form-group">
 
    <input class="form-group" type="file" name="photo" style="width:400px">
</div>    


	 
  <!--<input type= "submit"value="Annuler" ><br> -->
 <button type="submit" class="btn btn-primary" style="width:400px">
 	    Envoyer
  </button>

  <div class="pull-right">

    <!--<img src="themes/images/carousel/banner-3.jpg" width="500" height="100">-->
        <img src="themes/images/carousel/banner-3.jpg"  class="img-rounded" alt="Cinque Terre" >
</div>

</form>
     

  @yield('content')

</div>






 <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>

       