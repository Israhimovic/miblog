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
    	<div data-role="page" id="eliminarpage" data-theme="c" data-content-theme="b">
		   	<div data-role="content">
		   		<center>
		   		<div  data-theme="b">
		    		<p>Esta seguro de que desea eliminar este post ?</p>
		    		<a href ="<?php echo base_url(); ?>index.php/eliminar/eliminarpost/<?php echo $codigo.'/'.$pantalla; ?>" id="sieliminar" data-role="button"  data-ajax="false" data-inline="true">Eliminar</a>
		    		<a onclick="history.back()" id="noeliminar" data-role="button" data-inline="true">Cancelar</a>
		    	</div>	
		   		</center>
		    </div>
		</div>
	</body>
</html>
