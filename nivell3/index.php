<?php
require_once("Banco.php");

$account1 = new Account(1234567890123456,"Amancio","Ortega Gasset",1000000000);
$account1->getNombreCompleto();

if(!isset($_POST['confirmar']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <!--No escojo el type="number" porque si quiero ingresar 20.000 no es práctico-->        
        Cantidad: <input type="text" name="cantidad" id=""><br><br>
        <select name="banco" id="" required="" size="2">
            <option value="ingresar">Ingresar</option>
            <option value="retirar">Retirar</option>
        </select>
        <button name="confirmar">Confirmar operación</button>

    </form>
</body>
</html>
<?php
}
else
{

    $cantidad = $_POST['cantidad'];
    $opcion = $_POST['banco'];
    $patron = "/^[[:digit:]]+$/";
    
    if(preg_match($patron, $cantidad))
    {
        /*Realizamos las operaciones pertinentes. Doy por hecho que todas las operaciones se realizan en la cuenta de Amancio Ortega Gasset,
            porque sino la aplicación sería muy distinta. Habría que crear cuenta primero y no te lo pide el ejercicio */

        if($opcion == "ingresar")
        {
            $account1->setDeposit($cantidad);
            $account1->getSaldoActual();
        }

        if($opcion == "retirar")
        {
            $account1->setWithdraw($cantidad);
            $account1->getSaldoActual();
        }        
    }
    else
    {
        echo "ERROR: La cantidad no es un número válido<br/>";
    }
}

?>