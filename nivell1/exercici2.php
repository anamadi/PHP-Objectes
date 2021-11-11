<?php
/*  Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().

A l'arxiu main defineixi dos objectes, un triangle i un rectangle i truca al mètode area de cadascun. 

ANOTACIONES: Según la interpretación del ejercicio podría haber creado en la clase Shape un metodo abstracto calcularArea, o el método calcularArea en el padre y sobreescribirlo en el hijo, pero según el enunciado me parecía que esta solución respondía mejor*/


class Shape
{
    protected $ancho;
    protected $alto;

    public function __construct($ancho,$alto)
    {
        $this->ancho = $ancho;
        $this->alto  = $alto;
    }

}

class Triangulo extends Shape
{
    public function calcularArea()
    {
        echo "El área del triángulo con base $this->ancho y altura $this->alto es ";
        echo $this->ancho * $this->alto /2;
        echo ".<br/><br/>";
    }
}

class Rectangulo extends Shape
{
    public function calcularArea()
    {
        echo "El área del cuadrado con lados $this->ancho y $this->alto es ";
        echo $this->ancho * $this->alto;
        echo ".<br/><br/>";
    }
}

$triangulo = new Triangulo(7,8);
$triangulo->calcularArea();
$cuadrado = new Rectangulo(10,8);
$cuadrado->calcularArea();
?>