<?php 
	include "connection.php";

	$ddd = $_POST['ddd'];

	if(strlen($ddd) != 2)
	{
		$ddd = $_POST['ddd2'];
	}

	$sql = "insert into `candidates` (`cpf`, `email`, `password`, `name`, `cell`, `gender`, `birth date`, `post id`, `salary range id`, `cep`) value ('" . $_POST['cpf'] . "', '" . $_POST['email'] . "', md5('" . $_POST['password'] . "'), '" . $_POST['name'] . "', '" . $ddd . $_POST['cell'] . "', '" . $_POST['gender'] . "', '" . $_POST['birthDate'] . "', '" . $_POST['post'] . "', '" . $_POST['salaryRange'] . "', '" . $_POST['cep'] . "');";

	if($conn->query($sql))
	{
		session_start();
		$_SESSION['candidatoEmail'] = $_POST['email'];

		echo "<script> window.location.href = \"index.php\"; </script>";
	}
	else
	{
		$code = $conn->errno;

		if($code == 1062)
		{
			echo $conn->error;

			if(strpos($conn->error, "for key 'PRIMARY'"))
			{
				echo "<script>alert('CPF já cadastrado.');</script>";
			}
			else
			{
				echo "<script>alert('Email já cadastrado.');</script>";
			}

			echo "<script> window.location.href = \"registrarcandidato.php\"; </script>";
		}
	}
?>