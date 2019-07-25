<?php
class Vendas{
		private $ID;
		private $Data_venda;
		private $Status;
		private $Valor_total;
		private $Forma_pagamento;
		private $ID_usuarios;
		private $ID_mesa;
		private $nomeUser;
		private $conexao; //inicia uma conexão com o banco de dados
		private $tabela; //para facilitar o uso das tabelas no banco(editar, alterar) sem complicações
	
		public function __construct(){
			$this->conexao = mysqli_connect("localhost", "root", "", "bancopietro") //inicia a conexão com o banco de dados
			or die("Erro de Conexão no Banco");
			$this->tabela = "comanda";
		}
		public function __destruct(){ //encerra automaticamente a conexão com o banco após o uso 
			unset($this->conexao);
			
		}
		public function __get($key){  
			return $this->$key;
		}
		public function __set($key, $value){
			$this->$key=$value;
		}
		public function adicionar(){
			$sql = "INSERT INTO $this->tabela (Data_venda, Status, Valor_total, Forma_pagamento, ID_usuarios, ID_mesa) 
			VALUES('$this->Data_venda', '$this->Status', $this->Valor_total, '$this->Forma_pagamento', $this->ID_usuarios, $this->ID_mesa)";
			//echo $sql; para verificar o que esta sendo enviado para o banco
			$resultado = mysqli_query($this->conexao,$sql);
			echo $sql;
			return $resultado;
		}
		public function listar($complemento = ""){
			$sql = "SELECT $this->tabela.*,usuarios.Nome as nomeUser, usuarios.ID as usuarios FROM $this->tabela inner join usuarios on $this->tabela.ID_usuarios=usuarios.ID INNER JOIN mesa on $this->tabela.ID_mesa = mesa.ID ORDER BY Data_venda".$complemento;
			$resultado = mysqli_query($this->conexao, $sql);
		 //echo $sql;
		$retorno = null;
		while($res = mysqli_fetch_assoc($resultado)){
			$obj = new Vendas();
			$obj->ID = $res['ID'];
			$obj->Data_venda = $res['Data_venda'];
			$obj->Status = $res['Status'];
			$obj->Valor_total = $res['Valor_total'];
			$obj->Forma_pagamento = $res['Forma_pagamento'];
			$obj->ID_usuarios = $res['ID_usuarios'];
			$obj->ID_mesa = $res['ID_mesa'];
			$obj->nomeUser = $res['nomeUser'];
			$retorno[] = $obj;
		}
		return $retorno;
		}
		
		public function apagar(){
			$sql="DELETE FROM $this->tabela WHERE ID = $this->ID";
			$resultado = mysqli_query($this->conexao,$sql);
			return $resultado;
		}
		
		public function retornarunico(){
			$sql="SELECT * FROM $this->tabela WHERE ID=$this->ID";
			$resultado = mysqli_query($this->conexao, $sql);
			$retorno = null;
			if($req = mysqli_fetch_assoc($resultado)){
				$obj = new Vendas();
			$obj->ID = $req['ID'];
			$obj->Data_venda = $req['Data_venda'];
			$obj->Status = $req['Status'];
			$obj->Valor_total = $req['Valor_total'];
			$obj->Forma_pagamento = $req['Forma_pagamento'];
			$obj->ID_usuarios = $req['ID_usuarios'];
			$obj->ID_mesa = $req['ID_mesa'];
			
			}
			return $retorno;
		}
		public function editar(){
			$sql ="UPDATE $this->tabela SET Status='$this->Status', Valor_total ='$this->Valor_total', ID_mesa ='$this->ID_mesa' WHERE ID=$this->ID";
			$resultado = mysqli_query($this->conexao, $sql);
			return $resultado;
		}
		
	}
		
?>