<!DOCTYPE html5>
	<head>
		<title>Mascara Telefone</title> 

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	</head>
	<body>
		
		<form action="registrardados.php" method="post">
			
			<div class="row" style="margin: 2px">
			
				<div class="col-lg-4" style="" >
			        <label> Nome completo: * </label>
			        <input type="text" name="name" class="form-control" required>
				</div>

				<div class="col-lg-4">
			        <label> CPF (apenas números) * </label>
			        <input type="text" name="cpf" pattern="[0-9]{11}" maxlength="11" class="form-control" required>
				</div>

				<div class="col-lg-2">
			        <label> Sexo: * </label>
			        <select name="gender" class="form-control" required>
			        	<option value="F">Feminino</option>
			        	<option value="M">Masculino</option>
			        </select>
				</div>
				
				<div class="col-lg-2">
			        <label> Data de Nascimento: * </label>
			        <input type="date" name="birthDate" class="form-control" required>
				</div>

			</div>

			<div class="row" style="margin: 2px">
				<div class="col-lg-1">
			        <label> DDD: </label>
			        <input type="text" name="ddd" placeholder="Ex.: 11" pattern="[0-9]{2}" maxlength="2" class="form-control">
				</div>

				<div class="col-lg-2">
			        <label>Celular: (apenas números) * </label>
			        <input type="text" name="cell" pattern="[0-9]{9}" maxlength="9" class="form-control" placeholder="Ex.: 947265732" required>
				</div>

				<div class="col-lg-3">
			        <label> Email: * </label>
			        <input type="email" name="email" class="form-control" placeholder="Ex.: Pedro@gmail.com" required>
				</div>

				<div class="col-lg-3">
			        <label> Senha: * </label>
			        <input type="password" name="password" class="form-control" required>
				</div>

				<div class="col-lg-3">
			        <label> Confirmar senha: * </label>
			        <input type="password" name="???" class="form-control" required>
				</div>
			</div>
			
			<div class="row" style="margin: 2px">
				
				<div class="col-lg-3">
			        <label> Cargo desejado * </label>
			        <select type="text" name="post" list="cargos" id="cargo" class="form-control" required>
			        	<?php
				        	include 'connection.php';

				        	$query = mysqli_query($conn, "select `id`, `name` from `posts`;");

				        	while($result = mysqli_fetch_array($query))
				        	{
				        ?>
				       	  		<option value="<?= $result[0] ?>"> <?= $result[1] ?> </option>
				        <?php
				    		}
				    	?>
			    	</select>
				</div>

				<div class="col-lg-2">
			        <label> Pretensão salarial * </label>
			        <select name="salaryRange" class="form-control" required>
			        	<option value="1">Indiferente</option>
			        	<option value="2">A partir de R$1000,00</option>
			        	<option value="3">A partir de R$2000,00</option>
			        	<option value="4">A partir de R$3000,00</option>
			        	<option value="5">A partir de R$4000,00</option>
			        	<option value="6">A partir de R$5000,00</option>
			        	<option value="7">A partir de R$6000,00</option>
			        	<option value="8">A partir de R$7000,00</option>
			        	<option value="9">A partir de R$8000,00</option>
			        	<option value="10">A partir de R$9000,00</option>
			        	<option value="11">A partir de R$10000,00</option>
			        	<option value="12">A partir de R$15000,00</option>
			        	<option value="13">A partir de R$20000,00</option>
			        </select>
				</div>

				<div class="col-lg-3">
			        <label> CEP (apenas números) * </label>
			        <input type="text" name="cep" id="cep" placeholder="Ex.: 07010010" pattern="[0-9]{8}" maxlength="8" class="form-control"  required>

			      	<script>
			      		const input = document.getElementById("cep");

			      		input.onchange = function()
			      		{
			      			const CEP = document.querySelector('#cep');
				      		const value = CEP.value;

				      		const url = `https://viacep.com.br/ws/${value}/json/`;

			      			fetch(url).then(response =>
			      			{
			      				return response.json();
			      			}).then(data =>
			      			{
			      				if(data.erro)
			      				{
			      					document.getElementById("button").disabled = true
			      					alert("CEP not found");
			      					return;
			      				}else
			      				{
			      					document.getElementById("button").disabled = false
			      				}

			      				fill(data);
			      			})
			      		}

			      		function fill(data)
		      			{
		      				const cidade = document.querySelector("#cidade");
		      				const estado = document.querySelector("#estado");
		      				const ddd = document.querySelector("#ddd");

		      				cidade.value = data.localidade;
		      				estado.value = data.uf;
		      				ddd.value = data.ddd;
		      			}
			      	</script>
				</div>

				<input type="hidden" name="ddd2" id="ddd" class="form-control">
				
				<div class="col-lg-1">
			        <label> Estado </label>
			        <input type="text" name="region" id="estado" placeholder="Estado" disabled class="form-control">
				</div>

				<div class="col-lg-2">
			        <label> Cidade </label>
			        <input type="text" id="cidade" placeholder="Cidade" disabled class="form-control">
				</div>
			</div>

			<div class="row" style="margin: 2px">
				<div class="col-lg-12">	
					<button type="submit" name="button" id="button" class="form-control" style="width: 200px; margin-left: auto; margin-right: auto; margin-top: 30px"> Confirmar </button>

				</div>
			</div>
		</form>
	</body>
</html>