    
<!DOCTYPE html>          
<html lang="{{ app()->getLocale() }}"> 
   <head>   
         
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
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

     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<style>

 .cadre {
    background-image:radial-gradient(white, #E6E6FA);  
    width:auto;
    margin: auto;
    padding: 5px 30px 30px 30px;
  
  }
   
.arrow-left.icon {

  color: #000;
  position: absolute;
  margin-left: 3px;
  margin-top: 10px;
  width: 16px;
  height: 1px;
  background-color: currentColor;
}
.arrow-left.icon:before {
  content: '';
  position: absolute;
  left: 1px;
  top: -5px;
  width: 10px;
  height: 10px;
  border-top: solid 1px currentColor;
  border-right: solid 1px currentColor;
  -webkit-transform: rotate(-135deg);
          transform: rotate(-135deg);
 box-sizing: border-box;
}

body {
  margin:20;
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the side navigation */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #FFFAFA;
  overflow-x: hidden;
}


/* Side navigation links */
.sidenav a {
  color: black;
  padding: 16px;
  text-decoration: none;
  display: block;
}

/* Change color on hover */
.sidenav a:hover {
  background-color:   #FA8072;
  color: pink;
}

/* Style the content */
.content {
  margin-left: 200px;
  padding-left: 20px;
}


</style>



<body >

 

<div class="cadre">

     <div class="content">Ajoute le produit.!!</div> 
     </br></br></br></br></br>


  //<a href="{{ url('cvs') }}"><div class="arrow-left icon"></div></a>

  <div id="wrapper" class="container">
    
     <form action="{{url('cvs')}}" method="post" enctype="multipart/form-data" >
        {{ csrf_field()}}

     <center>
     <div class="form-group @if($errors->get('cin'))has-error @endif">
     <input type="text" placeholder="CIN" class="form-control" name="cin" value="{{old('cin')}}" style="width:400px">

            @if($errors->get('cin'))
             @foreach($errors->get('cin') as $message)
              <li>{{ $message }}</li>
             @endforeach
            @endif 
     </div></p></p>


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
    </div> </p>


   <div class="form-group @if($errors->get('type'))has-error @endif" >
         <select name="type" type="text" value="{{old('type')}}" placeholder="Type" class="form-control"
         style="width:400px">
     <option>achat
     <option>vendre
     <option>louer
       </select>
         @if($errors->get('type'))
          @foreach($errors->get('type') as $message)
          <li>{{ $message }}</li>
          @endforeach
        @endif 
    </div> <p>



    <div class="form-group @if($errors->get('produit'))has-error @endif" >
     <input type= "text" name="produit" value="{{old('produit')}}" placeholder="Produit" class="form-control" style="width:400px">
                           
            @if($errors->get('produit'))
               @foreach($errors->get('produit') as $message)
             <li>{{ $message }}</li>
            @endforeach
            @endif
    </div><p>
   



     <div class="form-group @if($errors->get('tel'))has-error @endif" >  
    <input type= "text" name="tel" value="{{old('tel')}}" placeholder="Telephone" class="form-control"
    style="width:400px">
     @if($errors->get('tel'))
          @foreach($errors->get('tel') as $message)
          <li>{{ $message }}</li>
          @endforeach
     @endif
    </div> <p>
  



       <div class="form-group @if($errors->get('mesage'))has-error @endif" >
        <textarea type="text" name="mesage" value="{{old('mesage')}}" placeholder="Caracteristique" class="form-control" style="width:400px" ></textarea>
       @if($errors->get('mesage'))
          @foreach($errors->get('mesage') as $message)
          <li>{{ $message }}</li>
          @endforeach
        @endif
      </div><p>

  

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
</form></center>
 </p></p> 
</div>

h   
        


</div>


 

              

</div>


<div class="sidenav">
 <a href="{{url('cvs')}}">produits</a>
<a href="{{ url('/test') }}">contacte</a>
<a href="contact">info</a>
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
   
</body>
</html>


