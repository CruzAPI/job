<?php 
/*<html>
	<head>
		<title>Site de Vagas</title>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	    
	</head>
	<body>
		
			<div style="margin: 20px;" class="row">
				<div class="col-lg-4">
					<a style="text-decoration: none; color: blue;" href="index.php">Para candidatos</a>
		       		
		        	<a style="text-decoration: none; color: green; font-weight: bold; margin: 20px;" href="empresas.php">Para empresas</a>
		        </div>
		        <div class="col-lg-8">
		        	<a style="text-decoration: none; color: green; 	float: right;" href="">ENTRAR</a>
		        </div>
	        </div>
			
			
				<div style="background-color: green; height: 100%; width: 100%;">
					
				</div>
			
	</body>
</html>*/ 
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
					<a style="text-decoration: none; color: blue;" href="index.php">Para candidatos</a>
		       		
		        	<a style="text-decoration: none; color: green; font-weight: bold; margin: 20px;" href="empresas.php">Para empresas</a>
		        </div>
		        <div class="col-lg-8">
		        	<a style="text-decoration: none; color: green; 	float: right;" href="">ENTRAR</a>
		        </div>
	        </div>
			
			
				<div style="background-color: green; height: 100%; width: 100%;">
                  <div align="center" class="contaier"> 
                      <label> Nome do Candidato: </label> <br>
                      <label> Cargo desejado: </label> <br>
                      <form method="get" action="infocandidatos.php">
                          <button type="submit">+Informações sobre o Candidato</button>
                      </form>
                  </div>
                  
                  <div class="card-group">
                    <div class="card text-white bg-info mb-3" style="max-width: 18rem;" >
                      <div class="card-header">Candidate</div>
                      <div class="card-body">
                        <h5 class="card-title">Cargo Pretendido</h5>
                        <p class="card-text">Informaçãoes candidate</p>
                     </div>
                  </div>
           

<?php
	
	for($i=0; $i<10; $i++) {
		# code...

	?>
                <div class="card text-white bg-info mb-3" style="max-width: 18rem;" >
                     <div class="card-header">Candidate</div>
                     <div class="card-body">
                     <h5 class="card-title">Cargo Pretendido</h5>
                      <p class="card-text">Informaçãoes candidate</p>

                </div>
<?php                  
	}
?>
                  
				</div>

			
	</body>
</html>