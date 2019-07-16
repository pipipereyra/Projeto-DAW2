<?php
class VendasProduto{
		private $ID_Vendas;
		private $ID_Produtos;
		private $quantidade;
		private $valor;
		private $conexao; //inicia uma conexão com o banco de dados
		private $tabela; //para facilitar o uso das tabelas no banco(editar, alterar) sem complicações
	
		public function __construct(){
			$this->conexao = mysqli_connect("localhost", "root", "", "bancopietro") //inicia a conexão com o banco de dados
			or die("Erro de Conexão no Banco");
			$this->tabela = "vendas_produtos";
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
			$sql = "INSERT INTO $this->tabela (ID_Vendas, ID_Produtos, quantidade, valor) VALUES('$this->ID_Vendas', '$this->ID_Produtos', $this->quantidade, '$this->valor')";
			//echo $sql; para verificar o que esta sendo enviado para o banco
			$resultado = mysqli_query($this->conexao,$sql);
			return $resultado;
		}
		public function listar($complemento = ""){
			$sql = "SELECT $this->tabela.*,usuarios.ID as usuarios FROM $this->tabela inner join usuarios on $this->tabela.ID_Usuario=usuarios.ID".$complemento;
			$resultado = mysqli_query($this->conexao, $sql);
		 //echo $sql;
		$retorno = null;
		while($res = mysqli_fetch_assoc($resultado)){
			$obj = new Vendas();
			$obj->ID = $res['ID'];
			$obj->Data_venda = $res['Data_venda'];
			$obj->Status = $res['Status'];
			$obj->Valor_total = $res['Valor_total'];
			$obj->Endereco = $res['Endereco'];
			$obj->Forma_pagamento = $res['Forma_pagamento'];
			$obj->ID_Usuario = $res['ID_Usuario'];
			
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
			$obj->Endereco = $req['Endereco'];
			$obj->Forma_pagamento = $req['Forma_pagamento'];
			}
			return $retorno;
		}
		public function editar(){
			$sql ="UPDATE $this->tabela SET Status='$this->Status' WHERE ID=$this->ID";
			$resultado = mysqli_query($this->conexao, $sql);
			return $resultado;
		}
		
		
	}
		
?>