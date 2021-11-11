<?php 
/* Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.

Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, genera un valor aleatori per a l'objecte a què se li aplica el mètode.

Crea també el mètode shapeName, que digui quina és la figura que ha sortit en l'última tirada de el dau en qüestió.

Crea finalment el mètode getTotalThrows que ha de mostrar el nombre total de tirades entre tots els daus

Realitza una aplicació que permeti tirar cinc daus de pòquer alhora. */

class PokerDice{
    private $dado = array("As","K","Q","J","7","8");
    private $tirada;
    private $historico = array();

    public function throw()
    {
        $this->tirada = rand(0,5);
        $valor = array_push($this->historico,$this->dado[$this->tirada]);

    }

    public function shapeName()
    {
        echo "Tirada: ".count($this->historico).": ";
        echo $this->historico[count($this->historico)-1]."<br/>";
    }

    public function getTotalThrows()
    {
        return $this->historico;
    }
}

/*Posiblidad 1 : Muy reiterativa*/
echo "Primera tirada de 5 dados<br/>";
$PokerDice = new PokerDice();
for($i=0;$i<5;$i++)
{
    $PokerDice->throw();
    $PokerDice->shapeName();
}

/*Posibilidad 2: Con getTotalThrows */
echo "Segunda tirada de 5 dados<br/>";
$PokerDice2 = new PokerDice();
$PokerDice2->throw();
$PokerDice2->throw();
$PokerDice2->throw();
$PokerDice2->throw();
$PokerDice2->throw();
$tiradas = $PokerDice2->getTotalThrows();

foreach($tiradas as $key => $tirada){
    echo "Tirada ".$key+1;
    echo ": $tirada<br/>";
}

?>