<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>REGISTRO FORMULARIO</h1>
<?php

    if(isset($_REQUEST["nombrec"]))
    {   $nombrec=$_REQUEST["nombrec"];
        $fecha=$_REQUEST["fecha"];
        $direccion=$_REQUEST["direccion"];
        $registro=$_REQUEST["registro"];
        $nitc=$_REQUEST["nitc"];
        $departamento=$_REQUEST["departamento"];
        $giro=$_REQUEST["giro"];
        $pago=$_REQUEST["pago"];
        $cant1=$_REQUEST["cant1"];
        $descri1=$_REQUEST["descri1"];
        $precioUnitario1=$_REQUEST["precioUnitario1"];
        $ventasExectas1=$_REQUEST["ventasExectas1"];
        $ventasAfectas1=$_REQUEST["ventasAfectas1"];
        $cant2=$_REQUEST["cant2"];
        $descri2=$_REQUEST["descri2"];
        $precioUnitario2=$_REQUEST["precioUnitario2"];
        $ventasExectas2=$_REQUEST["ventasExectas2"];
        $ventasAfectas2=$_REQUEST["ventasAfectas2"];
        $cant3=$_REQUEST["cant3"];
        $descri3=$_REQUEST["descri3"];
        $precioUnitario3=$_REQUEST["precioUnitario3"];
        $ventasExectas3=$_REQUEST["ventasExectas3"];
        $ventasAfectas3=$_REQUEST["ventasAfectas3"];
        $cant4=$_REQUEST["cant4"];
        $descri4=$_REQUEST["descri4"];
        $precioUnitario4=$_REQUEST["precioUnitario4"];
        $ventasExectas4=$_REQUEST["ventasExectas4"];
        $ventasAfectas4=$_REQUEST["ventasAfectas4"];
        $cant5=$_REQUEST["cant5"];
        $descri5=$_REQUEST["descri5"];
        $precioUnitario5=$_REQUEST["precioUnitario5"];
        $ventasExectas5=$_REQUEST["ventasExectas5"];
        $ventasAfectas5=$_REQUEST["ventasAfectas5"];
        $name=$_REQUEST["name"];
        $dui=$_REQUEST["dui"];
        $firma=$_REQUEST["firma"];
        $cancelado=$_REQUEST["cancelado"];
        $name1=$_REQUEST["name1"];
        $dui1=$_REQUEST["dui1"];
        $firma1=$_REQUEST["firma1"];
        $Observacion=$_REQUEST["Observacion"];
        $s=$_REQUEST["s"];
        $sumat=$_REQUEST["sumat"];
        $iva=$_REQUEST["iva"];
        $subtotal=$_REQUEST["subtotal"];
        $ivaretenido=$_REQUEST["ivaretenido"];
        $ventaexentas=$_REQUEST["ventaexentas"];
        $ventatotal=$_REQUEST["ventatotal"];
        
        
        echo "<br>nombrec:".$nombrec;
        echo "<br>fecha:".$fecha;
        echo "<br>direccion:".$direccion;
        echo "<br>registro:".$registro;
        echo "<br>nitc:".$nitc;
        echo "<br>departamento:".$departamento;
        echo "<br>giro:".$giro;
        echo "<br>pago:".$pago;
        echo "<br>cant1:".$cant1;
        echo "<br>descri1:".$descri1;
        echo "<br>precioUnitario1:".$precioUnitario1;
        echo "<br>ventasExectas1:".$ventasExectas1;
        echo "<br>ventasAfectas1:".$ventasAfectas1;
        echo "<br>cant1:".$cant2;
        echo "<br>descri1:".$descri2;
        echo "<br>precioUnitario1:".$precioUnitario2;
        echo "<br>ventasExectas1:".$ventasExectas2;
        echo "<br>ventasAfectas1:".$ventasAfectas2;
        echo "<br>cant1:".$cant3;
        echo "<br>descri1:".$descri3;
        echo "<br>precioUnitario1:".$precioUnitario3;
        echo "<br>ventasExectas1:".$ventasExectas3;
        echo "<br>ventasAfectas1:".$ventasAfectas3;
        echo "<br>cant1:".$cant4;
        echo "<br>descri1:".$descri4;
        echo "<br>precioUnitario1:".$precioUnitario4;
        echo "<br>ventasExectas1:".$ventasExectas4;
        echo "<br>ventasAfectas1:".$ventasAfectas4;
        echo "<br>cant1:".$cant5;
        echo "<br>descri1:".$descri5;
        echo "<br>precioUnitario1:".$precioUnitario5;
        echo "<br>ventasExectas1:".$ventasExectas5;
        echo "<br>ventasAfectas1:".$ventasAfectas5;
        echo "<br>name:".$name;
        echo "<br>dui:".$dui;
        echo "<br>firma:".$firma;
        echo "<br>cancelado:".$cancelado;
        echo "<br>name1:".$name1;
        echo "<br>dui1:".$dui1;
        echo "<br>firma1:".$firma1;
        echo "<br>Observacion:".$Observacion;
        echo "<br>s:".$s;
        echo "<br>sumat:".$sumat;
        echo "<br>iva:".$iva;
        echo "<br>subtotal:".$subtotal;
        echo "<br>ivaretenido:".$ivaretenido;
        echo "<br>ventaexentas:".$ventaexentas;
        echo "<br>ventatotal:".$ventatotal;
       
    }
?>
</body>
</html>