<?php
include_once('acessoMysql.php');

class Cliente {
  public $id;
  public $email;
  public $senha;
  public $nome;
  public $rua;
  public $bairro;
  public $numero;
  public $complemento;
  public $cep;
  public $telefone;

  public function __construct(){}

  public function criar ($email, $senha, $nome, $rua, $bairro, $numero, $complemento, $cep, $telefone){
    $this->email = $email;
    $this->senha = $senha;
    $this->nome = $nome;
    $this->rua = $rua;
    $this->bairro = $bairro;
    $this->numero = $numero;
    $this->complemento = $complemento;
    $this->cep = $cep;
    $this->telefone = $telefone;

    return $this;
  }

  public function inserir(){
    global $mysql;
    $query = 'INSERT INTO cliente (email, senha, nome, rua, bairro, numero, complemento, cep, telefone)
     VALUES ("'.$this->email.'", "'.$this->senha.'", "'.$this->nome.'", "'.$this->rua.'", "'.$this->bairro.'", '.$this->numero.', "'.$this->complemento.'", '.$this->cep.', '.$this->telefone.');';
    $result = $mysql->query($query);
    if ($result === FALSE){
      return $result;
    }else{
      return TRUE;
    }
  }

  public function alterar($id, $email, $senha, $nome, $rua, $bairro, $numero, $complemento, $cep, $telefone){
    global $mysql;
    $query = 'UPDATE cliente SET email="'.$email.'", senha="'.$senha.'", nome="'.$nome.'", rua="'.$rua.'", bairro="'.$bairro.'", numero='.$numero.', complemento="'.$complemento.'", cep="'.$cep.'", telefone="'.$telefone.'" WHERE id='.$id.';';
    $result = $mysql->query($query);
    if ($result === FALSE){
      return $result;
    }else{
      return TRUE;
    }
  }

  public function lista(){
    global $mysql;
    $query = 'SELECT * FROM cliente;';
    $result = $mysql->query($query);
    $clientes = array();

    while($clienteBD = mysqli_fetch_array($result)){
      $cliente = new Cliente();
      $cliente->id = $clienteBD['id'];
      $cliente->email = $clienteBD['email'];
      $cliente->senha = $clienteBD['senha'];
      $cliente->nome = $clienteBD['nome'];
      $cliente->rua = $clienteBD['rua'];
      $cliente->bairro = $clienteBD['bairro'];
      $cliente->numero = $clienteBD['numero'];
      $cliente->complemento = $clienteBD['complemento'];
      $cliente->cep = $clienteBD['cep'];
      $cliente->telefone = $clienteBD['telefone'];

      array_push($clientes, $cliente);
    }

    if (count($clientes)<1){
      return FALSE;
    } else {
      return $clientes;
    }
  }

  public function procurar($id){
    global $mysql;
    $sql = 'SELECT * FROM cliente WHERE id ='.$id;
    $result = $mysql->query($sql);
    $line = mysqli_fetch_array($result);

    $cliente['id'] = $line['id'];
    $cliente['email'] = $line['email'];
    $cliente['senha'] = $line['senha'];
    $cliente['nome'] = $line['nome'];
    $cliente['rua'] = $line['rua'];
    $cliente['bairro'] = $line['bairro'];
    $cliente['numero'] = $line['numero'];
    $cliente['complemento'] = $line['complemento'];
    $cliente['cep'] = $line['cep'];
    $cliente['telefone'] = $line['telefone'];

    return $cliente;
  }

  public function remover($id){
    global $mysql;
    $sql = 'DELETE FROM cliente WHERE id ='.$id;
    if ($mysql->query($sql)===TRUE){
      return TRUE;
    } else{
      return FALSE;
    }
  }


}
