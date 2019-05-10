<!--@extends ('layouts.exp')

@section('content')-->

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
       

       <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- Styles-->

        <link href="assets/css/bootstrap.min.css" rel="stylesheet">      
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
        
        <link href="themes/css/bootstrappage.css" rel="stylesheet"/>
        
        <!-- global styles -->
        <link href="themes/css/flexslider.css" rel="stylesheet"/>
        <link href="themes/css/main.css" rel="stylesheet"/>
        <script src="assets/js/bootstrap.min.js"></script>    
        <!-- scripts -->
     <script src="themes/js/jquery-1.7.2.min.js"></script>
              
        <script src="themes/js/superfish.js"></script>  
        <script src="themes/js/jquery.scrolltotop.js"></script> 



        <style >

         .cadre {
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

<div id="wrapper" class="container">
            <section class="navbar main-menu">
                <div class="navbar-inner main-menu">    
                     <h1>ajouter Produit</h1>  
                              </div>

                        </section><br>
 <div class="cadre"> 
<div class="pull-right">
  	  <a href=""class="btn btn-success" style="width:100px">nouveau  </a><br><br><br><br>
  	  <a href=""class="btn btn-primary" style="width:100px">Afficher </a><br><br><br><br>
      <a href=""class="btn btn-default" style="width:100px">modifer  </a><br><br><br><br>
        <button type="submit" class="btn btn-danger" style="width:100px">effacer</button><br><br>

</div>

                       
 <form action="{{url('objet')}}" method="post" enctype="multipart/form-data"﻿>
      {{ csrf_field()}}

<div class="form-group @if($errors->get('cin'))has-error @endif" >
<input type="text" placeholder="CIN" class="form-control" name="cin" value="{{old('cin')}}" style="width:400px">
  @if($errors->get('cin'))
          @foreach($errors->get('cin') as $message)
          <li>{{ $message }}</li>
          @endforeach
   @endif 
</div>
<p><p>


<div class="form-group @if($errors->get('nom'))has-error @endif" >
<input type= "text" placeholder="Nom" class="form-control" name="nom" value="{{old('nom')}}" style="width:400px">
   @if($errors->get('nom'))
          @foreach($errors->get('nom') as $message)
          <li>{{ $message }}</li>
          @endforeach
   @endif 
   </div> <p>


<div class="form-group @if($errors->get('prenom'))has-error @endif" >
<input type= "text" name="prenom" value="{{old('prenom')}}" placeholder="Prénom" class="form-control"
style="width:400px">  
   @if($errors->get('prenom'))
          @foreach($errors->get('prenom') as $message)
          <li>{{ $message }}</li>
          @endforeach
   @endif
   </div>  <p>



  <div class="form-group @if($errors->get('type'))has-error @endif" >
 <select name="type" type="text" value="{{old('type')}}" placeholder="Type" class="form-control"
style="width:400px"  >
<option>achat
<option>vendre
<option>louer
</select>
   @if($errors->get('type'))
          @foreach($errors->get('type') as $message)
          <li>{{ $message }}</li>
          @endforeach
   @endif 
</div>
  <p>



<div class="form-group @if($errors->get('produit'))has-error @endif" >
 <input type= "text" name="produit" value="{{old('produit')}}" placeholder="Produit" class="form-control"
style="width:400px">
   @if($errors->get('produit'))
          @foreach($errors->get('produit') as $message)
          <li>{{ $message }}</li>
          @endforeach
   @endif
 </div>
   <p>



  <div class="form-group @if($errors->get('tel'))has-error @endif" >  
  <input type= "text" name="tel" value="{{old('tel')}}" placeholder="Telephone" class="form-control"
style="width:400px">
   @if($errors->get('tel'))
          @foreach($errors->get('tel') as $message)
          <li>{{ $message }}</li>
          @endforeach
   @endif
 </div>
   <p>



<div class="form-group @if($errors->get('mesage'))has-error @endif" >
<textarea type="text" name="mesage" value="{{old('mesage')}}" placeholder="Caracteristique" class="form-control" style="width:400px" ></textarea>
   @if($errors->get('mesage'))
          @foreach($errors->get('mesage') as $message)
          <li>{{ $message }}</li>
          @endforeach
   @endif
 </div>
   <p>


<div class="form-group @if($errors->get('photo'))has-error @endif" >
	 <div class="form-group">
    <input class="form-control" type="file" value="{{old('photo')}}" name="photo" style="width:400px"> 
</div> 
       @if($errors->get('photo'))
          @foreach($errors->get('photo') as $message)
          <li>{{ $message }}</li>
          @endforeach
   @endif 
</div>



  <!--<input type= "submit"value="Annuler" ><br> -->
 <button type="submit" class="btn btn-primary" style="width:400px">
 	    Envoyer
  </button>



</form>
     


<!--</div>-->







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
</body>
</html>
<!--@endsection-->