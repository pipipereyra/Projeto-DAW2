<?php
class Usuarios{
		private $ID;
		private $Nome;
		private $E_mail;
		private $Nascimento;
		private $RG;
		private $Tipo='user';
		private $Senha;
		private $CPF;
		private $Endereco;
		private $conexao; //inicia uma conexão com o banco de dados
		private $tabela; //para facilitar o uso das tabelas no banco(editar, alterar) sem complicações
		public function __construct(){
			$this->conexao = mysqli_connect("localhost", "root", "", "bancopietro") //inicia a conexão com o banco de dados
			or die("Erro de Conexão no Banco");
			$this->tabela = "usuarios";
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
			$sql = "INSERT INTO $this->tabela (Nome, E_mail, Nascimento, RG, Tipo, Senha, CPF, Endereco) 
			VALUES('$this->Nome', '$this->E_mail', '$this->Nascimento', '$this->RG', '$this->Tipo', '$this->Senha', '$this->CPF', '$this->Endereco')";
			//echo $sql; //para verificar o que esta sendo enviado para o banco
			$resultado = mysqli_query($this->conexao,$sql);
			return $resultado;
		}
		public function listar($complemento = ""){
			$sql = "SELECT * FROM $this->tabela ".$complemento;;
			$resultado = mysqli_query($this->conexao, $sql);
		 //echo $sql;
		$retorno = null;
		while($res = mysqli_fetch_assoc($resultado)){
			$obj = new Usuarios();
			$obj->ID = $res['ID'];
			$obj->Nome = $res['Nome'];
			$obj->E_mail = $res['E_mail'];
			$obj->Nascimento = $res['Nascimento'];
			$obj->RG = $res['RG'];
			$obj->Tipo = $res['Tipo'];
			$obj->Senha = $res['Senha'];
			$obj->CPF = $res['CPF'];
			$obj->Endereco = $res['Endereco'];
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
				$obj = new Usuarios();
			$obj->ID = $req['ID'];
			$obj->Nome = $req['Nome'];
			$obj->E_mail = $req['E_mail'];
			$obj->Nascimento = $req['Nascimento'];
			$obj->RG = $req['RG'];
			$obj->Tipo = $req['Tipo'];
			$obj->Senha = $req['Senha'];
			$obj->CPF = $req['CPF'];
			$obj->Endereco = $req['Endereco'];
			$retorno = $obj;
			}
			return $retorno;
		}
		public function editar(){
			$sql ="UPDATE $this->tabela SET Nome ='$this->Nome', E_mail ='$this->E_mail', Nascimento ='$this->Nascimento', RG ='$this->RG', Tipo ='$this->Tipo', Senha ='$this->Senha', CPF ='$this->CPF', Endereco ='$this->Endereco' WHERE ID=$this->ID";
			$resultado = mysqli_query($this->conexao, $sql);
			//echo $sql;
			return $resultado;
		}
		
		public function login(){
			$sql = "SELECT * FROM $this->tabela where E_mail='$this->E_mail' and Senha='$this->Senha'";
			//echo $sql;
			$resultado = mysqli_query($this->conexao, $sql);
			$retorno = null;
			if($req = mysqli_fetch_assoc($resultado)){
				$obj = new Usuarios();
			$obj->ID = $req['ID'];
			$obj->Nome = $req['Nome'];
			$obj->Nome = $req['E_mail'];
			$obj->Nome = $req['Nascimento'];
			$obj->Nome = $req['RG'];
			$obj->Nome = $req['Tipo'];
			$obj->Nome = $req['Senha'];
			$obj->Nome = $req['CPF'];
			$obj->Nome = $req['Endereco'];
			$retorno = $obj;
			}
			return $retorno;
		}
	}
		
?>