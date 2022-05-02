<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color:powderblue;">
<H1><p ><center><FONT COLOR="red"> LA EMPRESA S.A de C.V</FONT></center></H1>
    <h5><center><FONT COLOR="gray">ACTIVIDADES DE ASESORAMIENTO EMPRESARIAL</FONT></center></h5>
    <h6><center><FONT COLOR="gray">Departamentos de San Salvador * El Salvador*Centroamerica</FONT></center></h6>
    <h6><center><FONT COLOR="gray">Telefono(503)2222-1111 - FAX(503)2222-1111</FONT></center></h6></p>
    <form action="Resultado.php" method="post">
        <div class="contenedor-inputs"> 
            Nombre de cliente: <input type="text" name="nombrec" required; size="60">
            Fecha:<input type"date" name="fecha" required="true" size="30">
        </div>
        <div>
        <div class= "contenedor-inputs">
             Direccion: <input type="text" name="direccion" required; size="100">
             Registro N°: <input type="number" name="registro" required; size="30">
        </div>
        <div class="contenedor-inputs">
            NIT: <input type="number" name="nitc" required; size="50">
            Departamento:<select name="departamento">
            <option value=""></option>
            <option value="La Paz">La Paz</value>
            <option value="San Salvador">San Salvador</value>
            <option value="La Libertad">La Libertad</value>
            <option value="Ahuachapan">Ahuachapán</value>
            <option value="Cabañas"> Cabañas</value>
            <option value="Sonsonate">Sonsonate</value>
            <option value="Santa Ana">Santa Ana</value>
            <option value="Chalatenango"> Chalatenango</value>
            <option value="Cuscatlan">Cuscatlan</value>
            <option value="Usulutan">Usulután</value>
            <option value="San Miguel">San Miguel</value>
            <option value="La Union">La Union</value>
            <option value="San Vicente">San Vicente</value>
            <option value="Morazan">Morazán</value>
            </select>  

        </div>
        <div class="contenedor-inputs">
        Giro: <input type="text" name="giro" required;>
        Condiciones de pago:<select name="pago">
            <option value=""></option>
            <option value="Tarjeta">Tarjeta (credito-debito)</value>
            <option value="Paypal">Paypal</value>
            <option value="bitcoin">Bitcoin</value>
            <option value="Efectivo">Efectivo</value>
         </select>
        </div>

        <table border="1">
            <tr>
                <th> CANTIDAD</th>
                <th><center>DESCRIPCION</center></th>
                <th>PRECIO UNITARIO</th>
                <th>VENTAS EXECTAS</th>
                <th>VENTAS AFECTAS</th>
            </tr>
            <tr>
                <td><input type="number" name="cant1" required; ></td>
                <td><input type="text" name="descri1" required; size="50"></td>
                <td><input type="text" name="precioUnitario1" required; size="30"> </td>
                <td><input type="text" name="ventasExectas1" required; size="30"></td>
                <td><input type="text" name="ventasAfectas1" required; size="30"></td>
            </tr>

            <tr>
                <td><input type="number" name="cant2" ></td>
                <td><input type="text" name="descri2"  size="50"></td>
                <td><input type="text" name="precioUnitario2"  size="30"></td>
                <td><input type="text" name="ventasExectas2"  size="30"></td>
                <td><input type="text" name="ventasAfectas2"  size="30"></td>
            </tr>
            
            <tr>
                <td><input type="number" name="cant3"></td>
                <td><input type="text" name="descri3"  size="50"></td>
                <td><input type="text" name="precioUnitario3"  size="30"></td>
                <td><input type="text" name="ventasExectas3"  size="30"></td>
             <td><input type="text" name="ventasAfectas3" size="30"></td>
            </tr>

            <tr>
                <td><input type="number" name="cant4" ></td>
                <td><input type="text" name="descri4" size="50"></td>
                <td><input type="text" name="precioUnitario4"  size="30"></td>
                <td><input type="text" name="ventasExectas4"  size="30"></td>
                <td><input type="text" name="ventasAfectas4"  size="30"></td>
            </tr>

            <tr>
                <td><input type="number" name="cant5" ></td>
                <td><input type="text" name="descri5" size="50"></td>
                <td><input type="text" name="precioUnitario5"  size="30"></td>
                <td><input type="text" name="ventasExectas5"  size="30"></td>
                <td><input type="text" name="ventasAfectas5"  size="30"></td>
            </tr>
            <tr> 
                <td colpans="3" > ENTREGADO POR <ul>Nombre: 
                    <input type="text" name="name" required; ></ul>
                    <ul>DUI: <input type="text" name="dui" required;></ul>
                    <ul>Firma: <input type="text" name="firma" required; ></ul>
                    <UL>CANCELADO: <input type="text" name="cancelado" required; size="30"></UL>
                </td>
                <td > RECIBIDO POR <ul>Nombre:
                     <input type="text" name="name1" required;></ul>
                     <ul>DUI: <input type="text" name="dui1" required; ></ul>
                     <ul>Firma: <input type="text" name="firma1" required; ></ul>
                     <ul>OBSERVACIONES: <input type="text" name="Observacion" required; size="30"></ul>
                </td>
                
                     
                <td > 
                    <ul>SUMAS:</ul>  
                    <ul>IVA</ul>
                    <ul>Sub-Total</ul>
                    <ul>(-)IVA Retenida</ul>
                    <ul>Ventas Exentas</ul>
                    <ul>Venta Total</ul>
                </td>
                <td>
                <ul><input type="text" name="s"></ul>
                <ul><br></ul>
                <ul><br></ul>
                <ul><br></ul>
                <ul><br></ul>
                <ul><br></ul>
                </td>

                <td>
                <ul><input type="text" name="sumat" ></ul>
                <ul><input type="text" name="iva" ></ul>
                <ul><input type="text" name="subtotal" ></ul>
                <ul> <input type="text" name="ivaretenido" ></ul>
                <ul><input type="text" name="ventaexentas" ></ul>
                <ul><input type="text" name="ventatotal" ></ul>
            </td>
            </tr>
</table> 
<br>
        <input type="submit" name="bt" value="ENVIAR"></br>


</form>
</body>
</html>