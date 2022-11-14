<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of PayPalPago
 *
 * @author maria
 */
class PayPalPago implements IPago{
  private $usuario;
  private $password;
  
  public function __construct( $usuario,  $password) {
      $this->usuario=$usuario;
      $this->password=$password;
  }
  
  public function getUsuario() {
      return $this->usuario;
  }

  public function getPassword() {
      return $this->password;
  }


  public function setUsuario($usuario): void {
      $this->usuario = $usuario;
  }



  public function setPassword($password): void {
      $this->password = $password;
  }

    
  public function pagar(float $importe): bool {
        echo "Pagando $importe con PayPal para el usuario $this->usuario";
        return true;
    }

}
