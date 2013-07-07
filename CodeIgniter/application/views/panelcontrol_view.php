<!DOCTYPE html>
<html>
	<head> 
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.10.1.min.js"></script>
	    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.mobile-1.3.0.min.js"></script>
        <link type="text/css" href="<?php echo base_url(); ?>css/jquery.mobile-1.3.0.min.css" rel="stylesheet" />    
        <link type="text/css" href="<?php echo base_url(); ?>css/jquery.mobile.theme-1.3.0.min.css" rel="stylesheet" />
		<!--<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.dataTables.min.js"></script>-->
		<script src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>	    
		<!--<link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery.dataTables.css" type="text/css" />-->
		<link rel="stylesheet" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css" type="text/css" />  
		<script type="text/javascript" src="<?php echo base_url(); ?>js/funciones_home.js" ></script>        
	</head>
	<body>  
		<div data-role="page">
			<div data-role="header">
				<div data-role="controlgroup" data-type="horizontal">			
					<a href="<?php echo base_url(); ?>index.php/principal" data-role="button" rel="external">Volver a Blog</a>
				</div>
			</div>
			<div data-role="content">
				<table id="example"  cellpadding="0" cellspacing="0" border="0" class="display">
					<thead>
						<tr>
							<th>Titulo</th>
							<th>Autor</th>
							<th>Editar</th><th>Eliminar</th>
							<th>Descripcion del post</th>
						</tr>
					</thead>
					<tbody>
					<?php
						if($query->num_rows() > 0)
						{
							foreach($query->result() as $row)
							{ 			
								echo '<tr>
								<td>'.$row->titulo.'</td>
								<td>'.$row->autor.'</td>
								<td><a href="'.base_url().'index.php/editpost/index/'.$row->cod_post.'/1" data-role="button" data-rel="dialog">Editar</a></td>
								<td><a href="'.base_url().'index.php/eliminar/index/'.$row->cod_post.'/1" data-role="button" data-rel="dialog">Eliminar</a></td>								
								<td>'.$row->desc.'</td></tr>';
							 }
						}
						else
						{
							echo '<tr><td>No hay ninguna categor&iacute;a creada</td></tr>';	
						} 
					?>			
					</tbody>
				</table>	
			</div>
		</div>                        	
	</body>
</html>