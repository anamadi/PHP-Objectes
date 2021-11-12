<?php
class Account
{   
    /* Crea un projecte Bancs, afegeix a el projecte una classe Account amb atributs per número de compte, nom i cognoms de el client i el saldo actual. Defineix en la classe els següents mètodes:

    Constructor que inicialitzi els atributs.
    Crea el mètode deposit($amount) que permet ingressar una quantitat al compte.
    Crea el mètode withdraw($amount) que permet retirar una quantitat del compte sempre que hi hagi saldo, si no n'hi ha el mètode haurà de retornar un missatge d'error
    Getters i Setters.
 */
    /*Número de cuenta podría ser un string*/
    private int $numeroCuenta;
    private string $nombre;
    private string $apellidos;
    private int $saldoActual;

    public function __construct($numeroCuenta,$nombre,$apellidos,$saldoActual)
    {
        $this->numeroCuenta = $numeroCuenta;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->saldoActual = $saldoActual;
    }

    public function getNombreCompleto()
    {
        echo "Cliente: ".$this->nombre." ";
        echo $this->apellidos."<br/><br/>";
    }

    public function getSaldoActual()
    {
        echo "Saldo actual: ".$this->saldoActual;
        echo " €.<br/><br/>";
    }

    public function setDeposit($amount)
    {
        $this->saldoActual += $amount;
        echo "Ha ingresado $amount € en la cuenta<br/>";
    }

    public function setWithdraw($amount)
    {
        if($this->saldoActual >= $amount)
        {
            $this->saldoActual -= $amount;
            
            echo "Ha retirado $amount € de la cuenta<br/>";
        }
        else
        {
            echo "ERROR: Tiene un saldo inferior a la cantidad que desea retirar<br/>";
        }
    }
}
?>
