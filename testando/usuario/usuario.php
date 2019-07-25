<?php
	include_once "../topo.php";
?>
  <div style="text-align: center; margin: 10px auto 10px auto ">
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../index2.php">Inicio</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../categoria/listacat.php">Listar Categorias</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="listausu.php">Listar Usuarios</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../produto/listaprod.php">Listar Produtos</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../Vendas/listavend.php">Listar Vendas</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../usuario/logout.php">Sair</a>
    </div>

	<form action="addusuario_ok.php" method="post">
			<h2 style="text-align:center;"> &nbsp &nbsp &nbsp Adicionar Usuário &nbsp &nbsp</h2>
		</form>
	<form class="col-lg-4" method="POST" action="addusuario_ok.php">
    <div class="container mt-3">
			<div class="input-group mb-3" style="flex-direction: column;/* align-content: center; */align-items: unset;/* margin:   auto; */width: 220%;padding-left: 100%;">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="Nome">Nome Completo:</label>
                    <input type="text" class="form-control" id="Nome" name="Nome">
                  </div>
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="E_mail">Email:</label>
                    <input type="email" class="form-control" id="E_mail" name="E_mail">
                  </div>
                  <div class="input-group">
                    <label class="custom-file-label" for="Imagem">Imagem:</label>
                    <input class="custom-file-input" type="file" class="form-control" id="Imagem" name="Imagem">
                  </div>
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="Nascimento">Data de Nascimento:</label>
                    <input type="date" class="form-control" id="Nascimento" name="Nascimento">
                  </div>
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="RG">RG:</label>
                    <input type="number" class="form-control" id="RG" name="RG">
                  </div>
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="Tipo">Tipo:</label>
                    <input type="text" class="form-control" id="Tipo" name="Tipo">
                  </div>
                    <div class="input-group-prepend">
                    <label class="input-group-text" for="Senha">Password:</label>
                    <input type="password" class="form-control" id="Senha" name="Senha">
                  </div>
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="CPF:">CPF</label>
                    <input type="number" class="form-control" id="CPF" name="CPF">
                  </div>
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="Endereco">Endereço:</label>
                    <input type="text" class="form-control" id="Endereco" name="Endereco">
                  </div>
                  <button type="submit" class="btn btn-success" style="border:0.5px solid gray; background:#4ECDC4; color: white;">Adicionar</button>
                <button type="submit" class="btn btn-success" style="border:0.5px solid gray; background:#4ECDC4; color: white;" onclick='window.location.href="listausu.php"'>Voltar</button><br>	
        </div>
      </div>
  </form>

<?php
	include_once "../rodape.php";
?>
	<div style="text-align: center; margin: 10px auto 10px auto ">
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../categoria/categoria.php">Adicionar Categorias</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="usuario.php">Adicionar Usuarios</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../produto/produto.php">Adicionar Produtos</a>
		<a type="button" class="btn" style="background:#4ECDC4; color: white" href="../Vendas/listarvendas.php">Listar Vendas</a>
	</div>
	<script>
		document.getElementById("usuario").classList.add("active");
	</script>
