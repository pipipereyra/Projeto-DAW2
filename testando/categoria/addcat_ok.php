<?php
		include_once "../class/Categorias.class.php";
		//print_r($_POST); var_dump tbm pode ser usado para testar alguns possíveis erros
		$objCategoria = new Categorias();
				
			if(!empty(trim($_POST['Nome']))){
				$objCategoria->Nome = $_POST['Nome'];
				$resultado = $objCategoria->adicionar();
				if($resultado)
					header("Location:categoria.php?sucesso");	
				else
					echo "Erro ao adicionar!";			
			}	else
				header("Location:categoria.php?erro=nome");	
		
?>