<?php

class Empresa extends Connection
{
  private $table = 'tbempresa';
  private $query = 'SELECT * FROM tbempresa';
  
  public function getAll()
  {   
    $result = $this->connection->query($this->query);
    $lista = array();
    while ($record = $result->fetch_object()) {
      array_push($lista, $record);
    }
    $result->close();
    return $lista;		
  }

  public function getById($id)
  {
    return $this->connection->query($this->query . ' WHERE tbempresa.id = ' . $id)->fetch_assoc();
  }

  public function insert( $nomeEmpresa, $cnpj)
  {
    $sql = "INSERT INTO " . $this->table . " (nomeEmpresa, cnpj) VALUES (".$nomeEmpresa."',".$cnpj.")";
    return $this->connection->query($sql);
  }

  public function update($id, $nomeEmpresa, $cnpj)
  {
    $sql = "UPDATE " . $this->table . "  nomeEmpresa='".$nomeEmpresa."', cnpj=".$cnpj." WHERE id=" . $id;
    return $this->connection->query($sql);
  }

  public function delete($id)
  {
    $sql = "DELETE FROM  " . $this->table . " WHERE id=" . $id;
    return $this->connection->query($sql);
  }
}
