<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

spl_autoload_register(function ($nombre_clase) {
    
      $dirs = array(
            'pago', 
            'model'
        );

      foreach( $dirs as $dir ) {
            if (file_exists($dir.DIRECTORY_SEPARATOR.($nombre_clase).'.php')) {
                require_once($dir.DIRECTORY_SEPARATOR.($nombre_clase).'.php');
                return;
            }
        }
   
});
$metodoPago = new TarjetaCreditoPago("Ana Antas López", "1234567812345678", 123, new DateTime("2024/12/23"));
$compra = new Compra(120.55, $metodoPago);
$compra->comprar();

echo "-----<br/>";
$metodoPago = new PayPalPago("ana@email.com", "abc123.");
$compra->setMetodoPago($metodoPago);
$compra->comprar();