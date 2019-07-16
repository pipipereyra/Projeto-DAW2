<?php
class Produtos{
		private $ID;
		private $Nome;
		private $Imagem;
		private $Descricao;
		private $Valor;
		private $ID_Categoria;
		private $conexao; //inicia uma conexão com o banco de dados
		private $tabela; //para facilitar o uso das tabelas no banco(editar, alterar) sem complicações
	
		public function __construct(){
			$this->conexao = mysqli_connect("localhost", "root", "", "bancopietro") //inicia a conexão com o banco de dados
			or die("Erro de Conexão no Banco");
			$this->tabela = "produtos";
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
			$sql = "INSERT INTO $this->tabela (Nome,Imagem,Descricao,Valor,ID_Categoria) 
			VALUES('$this->Nome','$this->Imagem','$this->Descricao','$this->Valor','$this->ID_Categoria')";
			//echo $sql; para verificar o que esta sendo enviado para o banco
			$resultado = mysqli_query($this->conexao,$sql);
			//echo $sql;
			return $resultado;
		}
		public function listar($complemento = ""){
			$sql = "SELECT $this->tabela.*,categorias.nome as categorias FROM $this->tabela inner join categorias on $this->tabela.ID_Categoria=categorias.ID".$complemento;
			$resultado = mysqli_query($this->conexao, $sql);
		 //echo $sql;
		$retorno = null;
		//var_dump($resultado);
		while($res = mysqli_fetch_assoc($resultado)){
			$obj = new Produtos();
			$obj->ID = $res['ID'];
			$obj->Nome = $res['Nome'];
			$obj->Imagem=$res['Imagem'];
			$obj->Descricao=$res['Descricao'];
			$obj->Valor=$res['Valor'];
			$obj->ID_Categoria=$res['categorias'];
			
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
				$obj = new Produtos();
			$obj->ID = $req['ID'];
			$obj->Nome = $req['Nome'];
			$obj->Descricao = $req['Descricao'];
			$obj->Valor = $req['Valor'];
			$obj->Imagem = $req['Imagem'];
			
			$retorno = $obj;
			}
			return $retorno;
		}
		public function editar(){
			$sql ="UPDATE $this->tabela SET Nome ='$this->Nome', Descricao ='$this->Descricao', Valor ='$this->Valor' WHERE ID=$this->ID";
			$resultado = mysqli_query($this->conexao, $sql);
			return $resultado;
		}
		public function editarimagem(){
			$sql ="UPDATE $this->tabela SET Imagem ='$this->Imagem' WHERE ID=$this->ID";
			$resultado = mysqli_query($this->conexao, $sql);
			return $resultado;
		}
	}