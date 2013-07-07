<!DOCTYPE html>
<html>
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.mobile-1.3.0.min.js"></script>        
        <link type="text/css" href="<?php echo base_url(); ?>css/jquery.mobile-1.3.0.min.css" rel="stylesheet" />    
        <link type="text/css" href="<?php echo base_url(); ?>css/jquery.mobile.theme-1.3.0.min.css" rel="stylesheet" />
        <link type="text/css" href="<?php echo base_url(); ?>css/misestilos.css" rel="stylesheet" />   
        <script type="text/javascript">
        $(document).ready(function(){
        	$('#loginpage').modal({
	            modal: true,
	            autoOpen: true,
	        });
        });
        </script>
	</head>
	<body>
		<div data-role="page" id="loginpage" data-theme="c" data-content-theme="b">
		   	<div data-role="content">
			    <h3>Login Adiministrador</h3>
			    <?php echo validation_errors(); ?>
			    <?php echo form_open('verifylogin'); ?>
			    	<label for="username">Username:</label>
			    	<input type="text" size="20" id="username" name="username"/>
			    	<br/>
			    	<label for="password">Password:</label>
			    	<input type="password" size="20" id="passowrd" name="password"/>
			    	<br/>
			    	<div align="center">
				    	<input type="submit" value="Login" data-inline="true"/>
	 					<input type="button" value="Salir" data-inline="true" onclick="history.back()" />			    		
			    	</div>
				</form>
			</div>
		</div>
	</body>
</html>
