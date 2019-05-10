
<!DOCTYPE html>
<html>
<head>
  <title>AmalShop</title>

        <meta charset="utf-8">
        <title>AmalShop</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
        <!-- bootstrap -->
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
        <script src="themes/js/jquery.scrolltotop.js"></script>

  <style>
form {
  /* Pour le centrer dans la page */
  margin: 0 auto;
  width: 400px;

  /* Pour voir les limites du formulaire */
  padding: 1em;
  border: 1px solid #CCC;
  border-radius: 1em;
}

div + div {
  margin-top: 1em;
}

label {
  /* Afin de s'assurer que toutes les étiquettes aient la même dimension et soient alignées correctement */
  display: inline-block;
  width: 90px;
  text-align: right;
}

input, textarea {
  /* Afin de s'assurer que tous les champs textuels utilisent la même police
     Par défaut, textarea utilise une police à espacement constant */
  font: 1em sans-serif;

  /* Pour donner la même dimension à tous les champs textuels */
  width: 300px;

  -moz-box-sizing: border-box;
       box-sizing: border-box;

  /* Pour harmoniser l'apparence des bordures des champs textuels */
  border: 1px solid #999;
}

input:focus, textarea:focus {
  /* Afin de réhausser les éléments actifs */
  border-color: #000;
}

textarea {
  /* Pour aligner correctement les champs multilignes et leurs étiquettes */
  vertical-align: top;

  /* Pour donner assez d'espace pour entrer du texte */
  height: 5em;

  /* Pour permettre aux utilisateurs de redimensionner un champ textuel horizontalement
     Cela ne marche pas avec tous les navigateurs  */
  resize: vertical;
}

.button {
  /* Pour positionner les boutons de la même manière que les champs textuels */
  padding-left: 90px; /* même dimension que les étiquettes */
}

button {
  /* Cette marge représente approximativement le même espace
     que celui entre les étiquettes et les champs textuels */
  margin-left: .5em;
}
</style>
</head>







<body>
    <div id="top-bar" class="container">
            <!--<div class="row">-->
                <div class="span4">
 
                           <a href="index.html" class="logo pull-left"><img src="themes/images//logo.png" class="site_logo" alt=""></a>
                </div>
    
                    <div class="account pull-right">
                        <ul class="user-menu">              
                            <li><label><a href="{{ url('/test') }}">contact</a></li></label>
                            <li><label><a href="{{ url('/login') }}">login</a></li></label>
                        </ul>
                  
                    </div>
            </div>
        </div>


 <div id="wrapper" class="container">
                     
             <section class="header_text sub">
                <img class="pageBanner" src="themes/images/carousel/banner-1.jpg" alt="New products" >
        <label>Connectez Vous!!</label>
            </section>  

 <form action="http://www.cs.tut.fi/cgi-bin/run/~jkorpela/echo.cgi" method="post">
  <div>
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="user_name">
  </div>

  <div>
    <label for="courriel">Courriel :</label>
    <input type="email" id="courriel" name="user_email">
  </div>

  <div>
    <label for="message">Message :</label>
    <textarea id="message" name="user_message"></textarea>
  </div>
 
  <div class="button">
    <button type="submit">Envoyer le message</button>
  </div>
</form>


</div>

     <script src="themes/js/common.js"></script>
        <script>
            $(document).ready(function() {
                $('#checkout').click(function (e) {
                    document.location.href = "checkout.html";
                })
            });
        </script> 


















</body>
</html>








 