<?php

interface IPago {

    public function pagar(float $importe): bool;
}
