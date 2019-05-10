


<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-center">
			<h1> cette page est non autoriser</h1>
			<a href="{{ url('cvs')}}">Retour</a>
		</div>
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

    
    </div>
        @yield('content')

 <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>




