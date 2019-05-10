@extends ('layouts.exp')

@section('content')


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

	<div class="cadre">
<div class="container" id="app">
	<h1> @{{mess}} </h1>
	 	<div class="panel panel-primary">
                <div class="panel-heading">
                	  <div class="row">
                	  	<div class="col-md-10"> <h3 class="panel-title">prix</h3></div>
                	  	<div class="col-md-2"> <button class="btn btn-success">ajouter</button></div>
                	  </div>	
                
                </div>
                <div class="panel-body">

                	    <ul class="list-group">
                	    	
                        <li class="list-group-item">1220dh
                             <div class="pull-right">
                	    		<button class ="btn btn-warning btn-sm">editer</button>
                	        </div></li>
                       <li class="list-group-item">20dh</li>
           
                       </ul>

                </div>
        </div>


        <div class="panel panel-primary">
              <div class="panel-heading">
              	   	  <div class="row">
                <div class="col-md-10"><h3 class="panel-title">style</h3></div>
              <div class="col-md-2"> <button class="btn btn-success">ajouter</button></div>
          </div>
        </div>
           <div class="panel-body">
                 <ul class="list-group">
                	    	
                        <li class="list-group-item">Sport
                             <div class="pull-right">
                	    		<button class ="btn btn-warning btn-sm">editer</button>
                	        </div></li>
                       <li class="list-group-item">tres cheque</li>
           
                       </ul>

                </div>
           </div>
      

          <div class="panel panel-primary">
              <div class="panel-heading">
              	   	  <div class="row">
                <div class="col-md-10"><h3 class="panel-title">Marque</h3></div>
              <div class="col-md-2"> <button class="btn btn-success">ajouter</button></div>
          </div>
        </div>

           <div class="panel-body">
                 <ul class="list-group">
                	    	
                        <li class="list-group-item">Zara
                             <div class="pull-right">
                	    		<button class ="btn btn-warning btn-sm">editer</button>
                	        </div></li>
                       <li class="list-group-item">nike</li>
         
                       </ul>

                </div>


      

           </div>
        

 <!--<form action="{{url('cvs/'.$cv->id)}}" method="post" enctype="multipart/form-data"﻿>
  
  <input type="hidden" name="_method" value="PUT">
           {{ csrf_field()}}
<input type="text" placeholder="CIN" class="form-control" name="cin" value="{{$cv->cin}}"  style="width:400px"><p><p>

<input type= "text" placeholder="Nom" class="form-control" name="nom" value="{{$cv->nom}}" style="width:400px"><p>

<input type= "text" name="prenom" value="{{$cv->prenom}}" placeholder="Prénom" class="form-control"
style="width:400px"><p>
  
 <select name="type" type="text" value="{{$cv->type}}" placeholder="Type" class="form-control"
style="width:400px"  >
<option>achat
<option>vendre
<option>louer
</select><p>   

 <input type= "text" name="produit" value="{{$cv->produit}}" placeholder="Produit" class="form-control"
style="width:400px"><p>

  <input type= "text" name="tel" value="{{$cv->tel}}" placeholder="Telephone" class="form-control"
style="width:400px"><p>

<input type="text" name="mesage" value="{{$cv->mesage}}" placeholder="Caracteristique" class="form-control" style="width:400px" ></textarea> <p>

   <div class="form-group">
    <input class="form-control" type="file" name="photo" value="{{$cv->photo}}" style="width:400px">
</div>  

   <!--<input type= "submit"value="Annuler" ><br> -->
 <button type="submit" class="form-control btn btn-danger" style="width:400px">
    modifier
  </button>





</form>




       </div>



</div>




</body>
</html>

@endsection


<!--@section('javascript')

<script src="js/app.js"></script>

 
      <script>
        var app = new Vue(
        {
          el:'#app',
          data:{
            message:"amal"
          }
        });
      </script>

@endsection-->


























































