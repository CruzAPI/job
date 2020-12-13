<?php 
	
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

	if(count($_SESSION) == 0)
	{
		echo "<script>alert('11111');</script>";
		$_SESSION['candidatoEmail'] = null;
	}
	else if($_POST != null)
	{
		echo "<script>alert('222222');</script>";
		$_SESSION['candidatoEmail'] = $_POST['email'];
	}

	$email = $_SESSION['candidatoEmail'];

	echo "<script>alert('hello ". $email . "');</script>";
?>

<html>
	<head>
		<title>Site de Vagas</title>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	    
	</head>
	<body>		
		<div style="margin: 20px;" class="row">
			<div class="col-lg-4">
				<a style="text-decoration: none; color: blue; font-weight: bold;" href="">Para candidatos</a>
		       	<a style="text-decoration: none; color: green; margin: 20px;" href="empresa.php">Para empresas</a>
		    </div>
		    <div class="col-lg-8">

		    	<?php 
		    		if($email == null)
		    		{
		    	?>
		    			<a style="text-decoration: none; color: blue; float: right;" href="logincandidato.php">ENTRAR</a>
		    	<?php
		    		}
		    		else
		    		{
		    	?>
		    			<form style="float: right; margin-left: 20px" method="post" action="gambiarra.php">
							<button type="submit">SAIR</button>
		    			</form>
		    			<a style="text-decoration: none; color: blue; float: right;" href="candidatoprofile.php"><?= $email ?></a>
		    	<?php
		    		}
		    	?>
		    </div>
		</div>			
		
		<div style="background-color: blue; height: 100%; width: 100%">
			<div style="background-color: white; margin-top: 200px; margin-left: 10%; height: 20%; width: 50%;  border-radius: 5px; position: fixed;">
				<h5 style="margin-left: 20px; margin-top: 10px"> O que vaga você procura? </h5>
				<input type="text" name="search" style="height: 50px; width: 400px; padding-bottom: 2px; padding-left: 20px; margin-top: 10px; margin-left: 20px; border-radius: 5px; box-shadow: 0 10px 10px 0px #989898;" placeholder="Pesquisa por cargo">
				<button style="background-color: red; color: white; font-weight: bold; height: 50px; margin-bottom: 10px; margin-left: 15px; text-align: center; width: 215px; border-radius: 5px; box-shadow: 0 10px 10px 0px #989898;"> <img src="search.png">  Procurar vagas    </button>
			</div>
		</div>

	</body>
</html>