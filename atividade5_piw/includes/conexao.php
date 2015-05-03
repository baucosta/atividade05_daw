<?php
	
	function conexao_mysql(){
		try{
			$host = '127.0.0.1';
			$usuario = 'root';
			$senha='123';
			$banco = 'daw_yearbook';
			$porta = 3306;
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
