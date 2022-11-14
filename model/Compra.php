<?php


/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Compra
 *
 * @author maria
 */

class Compra {
    private $total;
    private $metodoPago;
    
    public function __construct(float $total, IPago $metodoPago) {
        $this->total = $total;
        $this->metodoPago= $metodoPago;
    }
    
    public function comprar(){
       
        $this->metodoPago->pagar($this->total);
    }

    public function setTotal($total): void {
        $this->total = $total;
    }

    public function setMetodoPago($metodoPago): void {
        $this->metodoPago = $metodoPago;
    }
    public function getTotal() {
        return $this->total;
    }

    public function getMetodoPago() {
        return $this->metodoPago;
    }



}


