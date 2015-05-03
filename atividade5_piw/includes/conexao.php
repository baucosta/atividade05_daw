<?php
	
	function conexao_mysql(){
		try{
			$host = 'br-cdbr-azure-south-a.cloudapp.net';
			$usuario = 'bb61691df87f29';
			$senha='bc4dbb4c';
			$banco = 'amaurydAGBIUV4DD';
			#$porta = 3306;
			$charset = "utf8"; 
			$string_conexao = "mysql:host=$host;port=$porta;dbname=$banco;charset=$charset;";
			
			$con = new PDO($string_conexao,$usuario,$senha);
			
			return $con;
		}
		catch(PDOException $e){
			echo 'Erro: '.$e->getMessage().'<br />';
			die();
		}
	}
?>
