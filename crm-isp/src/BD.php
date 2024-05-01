<?php

namespace CrmIsp;

class BD {
  
  private $conexao;

  public function conectar(): void {
    $this->conexao = true;
  }

  public function desconectar(): void {
    $this->conexao = false;
  }

  public function getConexao(): bool {
    return $this->conexao;
  }

}