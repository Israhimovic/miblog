<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link type="text/css" href="<?php echo base_url(); ?>css/jquery.mobile-1.3.0.min.css" rel="stylesheet" />    
        <link type="text/css" href="<?php echo base_url(); ?>css/jquery.mobile.theme-1.3.0.min.css" rel="stylesheet" />  
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.mobile-1.3.0.min.js"></script>
    </head>
    <body>
    	<?php
			if($query->num_rows() > 0)
			{
				foreach($query->result() as $row)
				{ ?>
	    	<div data-role="page" id="modificarpage" data-theme="c" data-content-theme="b">
		   		<div data-role="content">
		   			<form name="tabla" action="<?php echo base_url(); ?>index.php/editpost/guardarpost/<?php echo $row->cod_post; ?>" data-ajax="false" method="POST">
		   				<label for="titulo">Titulo:</label>
			   			<input type="text" id="titulo" name="titulo" value="<?php echo $row->titulo;?>"/>
			   			<label for="textareadesc">Descripcion del Post:</label>
			   			<textarea id="descripcion" name="textareadesc"><?php echo $row->desc; ?></textarea>
			   			<input type="hidden" name="id" value="<?php echo $row->cod_post; ?>"/>
			   			<input type="hidden" name="pantalla" value="<?php echo $pantalla; ?>"/>			   			
 						<input type="submit" value="Guardar Cambios" />
 						<input type="button" value="Salir" onclick="history.back()" />
		   			</form>
		   		</div>
		   	</div>
	  	<?php 	
				}
			}
			else
			{
				echo '<p>No hay ninguna categor&iacute;a creada</p>';	
			}
		?>
	</body>
</html>
