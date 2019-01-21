<?php
	session_start();
	require_once 'dbconfig.php';

	if(isset($_POST['btn-login']))
	{
		//$user_name = $_POST['user_name'];
		$user_email = trim($_POST['user_email']);
		$user_password = trim($_POST['password']);
		$name = trim($_POST['name']);
		$name2 = trim($_POST['name2']);
		$apellidos = trim($_POST['apellidos']);
		$f_n = trim($_POST['f_n']);		
		$password = md5($user_password);
		$id=trim($_POST['id']);
		try
		{	

		
			$stmt = $db_con->exec("INSERT INTO tbl_users (user_id,user_email,user_password,p_name, s_name,apellidos,Birth_Date) VALUES ('".$id."','".$user_email."','".$password."','".$name."','".$name2."','".$apellidos."','".$f_n."')");	

			echo "ok";			
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>