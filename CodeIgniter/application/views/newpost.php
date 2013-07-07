<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link type="text/css" href="<?php echo base_url(); ?>css/jquery.mobile-1.3.0.min.css" rel="stylesheet" />    
        <link type="text/css" href="<?php echo base_url(); ?>css/jquery.mobile.theme-1.3.0.min.css" rel="stylesheet" />
        <link type="text/css" href="<?php echo base_url(); ?>css/misestilos.css" rel="stylesheet" />   
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.mobile-1.3.0.min.js"></script>  
    </head>
    <body>
	    	<div data-role="page" id="nuevopost" data-theme="c" data-content-theme="b">
		   		<div data-role="content">
		   			<h3>Introduzca el nuevo post</h3>
		   			<form name="tabla" action="<?php echo base_url(); ?>index.php/nuevopost/guardarpost" method="POST">
		   				<label for="titulo">Titulo:</label>
			   			<input type="text" id="titulo" name="titulo" value=""/>
			   			<label for="autor">Autor:</label>
						<input type="text" id="autor" name="autor" value=""/>		
						<label for="descripcion">Post:</label>	   			
			   			<textarea id="descripcion" name="textareadesc"></textarea>
 						<input type="submit" value="Guardar" />
 						<input type="button" value="Salir" onclick="history.back()" />
		   			</form>
		   		</div>
		   	</div>
	</body>
</html>
