<?php
		include_once "../topo.php";
		include_once "../class/Categorias.class.php";
		//print_r($_POST); var_dump tbm pode ser usado para testar alguns possíveis erros
		$objCategoria = new Categorias();
				
			if(!empty(trim($_POST['Nome']))){
				$objCategoria->Nome = strip_tags($_POST['Nome']);
				$resultado = $objCategoria->adicionar();
				if($resultado){
					/* set_time_limit(3); */
					echo "<div style='text-align:center;' class='alert alert-success'>
								<strong>Categoria adicionada com successo!</strong>
							</div>";
						header("Refresh:3; url=listacat.php");}	
					else{
					echo "<div style='text-align:center;' class='alert alert-danger'>
					<strong>Erro ao adicionar!</strong>
					</div>";}		
			}	else{
				header("Refresh:3; url=categoria.php");}
		
?>