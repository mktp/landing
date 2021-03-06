﻿
<!DOCTYPE html>
<html lang="en">

<head>

<!-- 
META
-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

<!-- 
SEO
-->	
	<title>Marketing Publico | De la idea a la acción</title>    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="content-language" content="es" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="Somos una agencia con una fuerte orientación de ejecución al Marketing de contenidos." />
	<meta name="keywords" content="marketing,publico,mktp,estrategia,campañas,publicitarias,diseño,branding,digital,btl" />

<!--    
    <link rel="alternate" href="http://www.undertrail.com/en" hreflang="x-default" />
    <link rel="alternate" href="http://www.undertrail.com/en" hreflang="en" />
    <link rel="alternate" href="http://www.undertrail.com/es" hreflang="es" />
    <meta property='og:title' content="Undertrail - La forma más fácil de viajar, compara pasajes de bus y avión en Colombia y Latinoamérica" />
    <meta property='og:description' content="Undertrail ofrece a los viajeros interesados en viajar por Colombia la posibilidad de buscar, comparar y comprar pasajes de bus y avión con una sola búsqueda" />
    <meta property='og:image' content="http://cdn.undertrail.com/img/facebook.png" />
    <meta property='og:type' content='website' />
    <meta property='og:url' content='http://www.undertrail.com' />
	<meta property="og:site_name" content="Laspartes.com: Todo para tu vehículo">    

-->	

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<style type="text/css">





.intro {
    height: 100%;
    padding-top: 180px;
    padding-bottom: 250px;
    text-align: center;
    background: #fff;
}





.contento {
    height: 100%;
    padding-top: 12px;
    text-align: center;
    background: #fff;
}





.texto {
    height: 100%;
    padding-top: 60px;
    text-align: center;
    background: #fff;
    font-family: 'Questrial', sans-serif, bold;
    font-size: 19px;
}





.nav.pull-right {
     float: right;
  }



.item{
    background: #333;    
    text-align: center;
    max-width: 100%;
    height: 750px !important;
}
.carousel{
    margin-top: 7px;
}
.bs-example{
	margin: 7px;
}  

</style>
</head>
<body>





<!-- 
BOOTSTRAP
-->	
	<link rel="stylesheet" href="api/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="api/bootstrap/css/bootstrap-responsive.css">
	<link rel="stylesheet" href="api/bootstrap/css/docs.css">
	<link rel="stylesheet" href="api/bootstrap/css/prettify.css">
	<link rel="stylesheet" href="api/animate/css/animate.min.css">
	<link rel="stylesheet" href="api/animate/css/style.css">





<!-- 
JQUERY
-->	
    <script src="api/jquery/jquery.easing.min.js"></script>
    <script src="api/jquery/scrolling-nav.js"></script>





<!-- javascript -->	
		<script type="text/javascript">

  function testAnim(x) {
  	
  	var none = "";
  	var block = "";
  	if ( $('#mktpMenu').is(':visible') ) {
  	
  		none = '#mktpMenu';
  		block = '#mktpLogo';
  	} else {
  	
  		none = '#mktpLogo';
  		block = '#mktpMenu';
  	}
  	
    /*$('#mktpLogo').removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      
      $(this).removeClass();
      if ( x == "fadeOutUp") {
      
      	$(this).hide();
      }    
    });
    
	$('#mktpMenu').show();
	$('#mktpMenu').removeClass().addClass("fadeInDown" + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
	  
	  $(this).removeClass();
	});
  };*/

    $(none).removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      
      $(this).removeClass();
      if ( x == "fadeOutUp") {
      
      	$(this).hide();
	$(block).show();
	$(block).removeClass().addClass("fadeInDown" + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
	  
	  $(this).removeClass();
	});

      }    
    });
    
  };
  
			$( document ).ready(function() { 
			
				$('.js--triggerAnimation').click(function(e){
				  e.preventDefault();
				  var anim = "fadeOutUp"; //$('.js--animations').val();
				  testAnim(anim);
				  //alert("listo para animar");
				});
				$('#mktpMenu').hide();
			});
		</script>





<!-- 
MENU
-->	
<?php include('template/menu.html'); ?>






	
<!-- 
CAROUSEL
-->	    
<div class="bs-example">
    <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
    	<!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
       <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="active item" style="background-image:url('http://tour-pragenses.com/userfiles/Old_Town_Square_and_Tyn_Church_Prague_Czech_Republic.jpg'); background-repeat: no-repeat; background-size: cover;">
                <div class="carousel-caption" >
                  <h1>“De la idea a la acción”.</h1><br/>
                  <p></p>
                </div>
            </div>
        </div>
        <!-- Carousel nav -->
    </div>

    
</p>
</div>





<!-- 
MAIN TITLE
-->	
    <section id="cover" class="intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
					
					
					
<span id="mktpLogo" style="display: block;" class=""><h1 class="site__title mega">Este es el logo</h1></span>
<span id="mktpMenu" style="display: block;" class=""><h1 class="site__title mega">Este es el menu</h1></span>
<button class="butt js--triggerAnimation">Animar Animate</button>



                </div>
            </div>
        </div>
    </section>





<!-- 
ABOUT
-->	

<?php

	foreach( $posts as $post) {
	
		echo $post->post_content . "tu<br/>";
	}
?>
    <section id="about" class="contento">
        <div class="container">
            <div class="row-fluid">
                <div class="span12 texto">
                	<span style="font-family: 'Questrial', sans-serif, bold;">PERFIL</span>
					<h1 style="">Marketing Publico, esta ensayando su pagina de prueba de gianpiero a produccion y ahora hacia gianpiero y compañia</h1>
                </div>
            </div>
        </div>
    </section>





<!-- 
FOOTER
-->	
<?php include('template/footer.html'); ?>





</body>
</html>                                		
