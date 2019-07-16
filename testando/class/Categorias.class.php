<?php
class Categorias{
		private $ID;
		private $Nome;
		private $conexao; //inicia uma conexão com o banco de dados
		private $tabela; //para facilitar o uso das tabelas no banco(editar, alterar) sem complicações
	
		public function __construct(){
			$this->conexao = mysqli_connect("localhost", "root", "", "bancopietro") //inicia a conexão com o banco de dados
			or die("Erro de Conexão no Banco");
			$this->tabela = "categorias";
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
			$sql = "INSERT INTO $this->tabela (Nome) VALUES('$this->Nome')";
			//echo $sql; para verificar o que esta sendo enviado para o banco
			$resultado = mysqli_query($this->conexao,$sql);
			return $resultado;
		}
		public function listar($complemento = ""){
			$sql = "SELECT * FROM $this->tabela ".$complemento;;
			$resultado = mysqli_query($this->conexao, $sql);
		 //echo $sql;
		$retorno = null;
		while($res = mysqli_fetch_assoc($resultado)){
			$obj = new Categorias();
			$obj->ID = $res['ID'];
			$obj->Nome = $res['Nome'];
			
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
				$obj = new Categorias();
			$obj->ID = $req['ID'];
			$obj->Nome = $req['Nome'];
			$retorno = $obj;
			}
			return $retorno;
		}
		public function editar(){
			$sql ="UPDATE $this->tabela SET Nome ='$this->Nome' WHERE ID=$this->ID";
			$resultado = mysqli_query($this->conexao, $sql);
			return $resultado;
		}
		
	}
		
?>