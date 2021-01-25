<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EL CHURO</title>
    
    <!--Fuete pagina, tomado de google fonts, funete: poppins, Ref:https://fonts.google.com/specimen/Poppins?query=pop&sidebar.open=true&selection.family=Poppins:wght@300-->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/inicio2.css">



    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmfDaD7EG_0FmVnWD3h9NbbjEifR3qXhs"></script>

	<script type="text/javascript" src="codigo.js"></script>
	<style type="text/css">
		#mapa
		{
			width: 100%;
			height: 80%;
		}
		html,body
		{
			height: 100%;
			margin: 0;
			padding: 0;
		}
	</style>
    
  
</head>
<body>
<header class="titulo"> 
    
</header>


<!--contenedor-->
<div class="contenedor">
    
    <!--ENCABEZADO-->
    <header class=logo>
        <div align="center"><img src="../img/logo.jpeg" width="500" height="250"></div>
        
    <!--  <h1>EL CHURO</h1>-->
    </header>
    <br>
    <!--NAVEGADOR PRINCIPAL-->
    <div class=naveuno> 
    <div><a href="index.php">INICIO</a></div>
        <div><a href="mapa.php">UBICACIÓN</a></div>
        <div><a href="#pies">CONTACTANOS</a></div>
        <div><a href="">PROTOCOLOS</a></div>
        <div><a href="php_crud_mysql/index_II.php">LOGIN</a></div>
    </div>
    
    <br>
 <!--NAVEGADOR SECUNDARIO, TIPO ASIDE-->
  
        
    <!--CONTENIDO-->

    

    <div class="mapi">
    <h1>UBICAME</h1>
	<div id="mapa"></div>
	<div id="ubicacion"></div>
    </div>  
     
  

    <!--FOOTER

    <footer class="footer">
        <h4>pies</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem nihil consequuntur voluptate impedit natus mollitia voluptatem eveniet minus, repellendus facere? Alias quidem officiis delectus sed magnam aliquam at necessitatibus perferendis?</p>
    </footer>-->
</div>



</body>
</html>
    