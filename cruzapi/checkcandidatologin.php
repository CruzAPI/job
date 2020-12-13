<?php 
	include "connection.php";

	$rs = mysqli_query($conn, "select `email`, `password` from `candidates` where `email` = '" . $_POST['email'] . "' and `password` = '" . md5($_POST['password']) . "';");
	
	if($row = mysqli_fetch_array($rs))
	{
		session_start();
		$_SESSION['candidatoEmail'] = $_POST['email'];

		echo "<script>

		alert('sucessfully');
		window.location.href = \"index.php\";
		
		</script>";
	}
	else
	{
		echo "<script>

			alert('Suas credenciais de login não coincidem com uma conta em nosso sistema.');
			window.location.href = \"logincandidato.php\";

		</script>";
	}
?>