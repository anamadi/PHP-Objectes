<?php
/* Crea una classe Employee defineix com a atributs el seu nom i sou. Definir un mètode initialize que rebi com a paràmetres el nom i sou. Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha o no pagar impostos (si el sou supera 6000 paga impostos). */

class Empleado
{   
    private $nombre;
    private $sueldo;

    public function initialize($nombre,$sueldo)
    {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function print()
    {
        echo "<br/>Nombre: $this->nombre<br/>Sueldo: $this->sueldo <br/>";
        if($this->sueldo > 6000)
        {
            echo "Paga impuestos<br/>";
        }
    }
}

$empleado1 = new Empleado();
$empleado1->initialize("Lourdes Nuñez Rodriguez",2500);
$empleado1->print();

$empleado2 = new Empleado();
$empleado2->initialize("María Nadales Ortiz",6500);
$empleado2->print();
?>