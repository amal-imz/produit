@extends ('layouts.exp')

@section('content')



<!DOCTYPE html>
<html>
<head>
	<title></title>

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

   @if(count($errors))
    <div class="alert alert-danger" role="alert">
    <ul>
      @foreach($errors->all() as $message)
    <li>{{$message}}</li>
      @endforeach
    </ul>
    </div>

@endif



       <div id="wrapper" class="container">
            <section class="navbar main-menu">
                <div class="navbar-inner main-menu">    
                     <h1>modifer</h1>  
                              </div>

                        </section><br>
 <div class="cadre"> 

      

 <form action="{{url('cvs/'.$cv->id)}}" method="post" enctype="multipart/form-data"﻿>
  
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


 
</body>
</html>

@endsection













