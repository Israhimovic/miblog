<div data-role="content"  id="contenido" data-theme="b" >
	<?php
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				echo '<div class="post">';
				echo '<div class="titulodiv">';				
				echo '<h3>'.$row->titulo.'</h3>';
				echo '</div>';
				echo '<div class="desc">';	
				echo '<p>'.$row->desc.'</p>';
				echo '</div>';
				echo '<div class="wurfldiv">';			
				echo '<p>Post escrito desde '.$row->marca.' y modelo '.$row->modelo.', con fecha: '.date("d-m-Y H:i",strtotime($row->date)).'</p>';
				echo '</div>';
				echo '</div>';
			}
		}
		else
		{
			echo '<p>No hay ninguna categor&iacute;a creada</p>';	
		}
	?>
</div>