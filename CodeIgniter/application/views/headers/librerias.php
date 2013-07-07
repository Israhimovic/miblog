<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Foro Israel Mayayo</title>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.10.1.min.js"></script>        
	    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.mobile-1.3.0.min.js"></script>        
        <link type="text/css" href="<?php echo base_url(); ?>css/jquery.mobile-1.3.0.min.css" rel="stylesheet" />    
        <link type="text/css" href="<?php echo base_url(); ?>css/jquery.mobile.theme-1.3.0.min.css" rel="stylesheet" />   
        <link type="text/css" href="<?php echo base_url(); ?>css/misestilos.css" rel="stylesheet" />   
    </head>
    <body>	  		
    	<div data-role="page" id="home" data-theme="c" data-content-theme="E">
	   		<div data-role="header">
	   			<div data-role="controlgroup" data-type="horizontal">
					<a href ="<?php echo base_url(); ?>index.php/principal/index" id= "btinicio" data-role="button" data-icon="home">Inicio</a>
					<a href ="<?php echo base_url(); ?>index.php/nuevopost/index" id="btnuevopost" data-role="button"  data-icon="plus" data-rel="dialog">Nuevo Post</a>
				</div>
			</div>