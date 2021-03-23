<html>
      <head>  <title>#/#PROVEEDORES#/#</title>
<!--logo--><link rel="shortcut icon" href="C:\wamp\www\Proyecto\logo.jpg" />
	  <body background=factura.JPG>
	   <br>
	  <td><table width="45%" border="10" cellspacing="10" cellpadding="" align="center">
		   <tr bgcolor="" align="center">
		   <td><H1><i><font color=#FFF8DC>EDITAR DATOS FACTURAS</font></i></H1></td>
		   </tr></table></td><br>
		   <center>
<!--insertar--><form name="Registro" action="editar.php" method="post" ">
<table border="4" cellspacing="7" cellpadding="1" width="45%" >
<tr>
<td><center><b><font color=#FFF8DC>Numero de factura</font></b></td></center>
<td><input type="texto" name="N_Factura" size="20"/></td>

<td><center><b><font color=#FFF8DC>Fecha</font></b></td></center>
<td> <input type="texto" name="Fecha_Factura"/></td>
</tr><tr>
<td><center><b><font color=#FFF8DC>Codigo de producto</font></b></td></center>
<td><input type="texto" name="Cod_Producto"/></td>

<td><center><b><font color=#FFF8DC>Cantidad de producto</font></b></td></center>
<td><input type="texto" name="Cant_Producto"/></td>
</tr><tr>
<td><center><b><font color=#FFF8DC>Precio de compra</font></b></td>
<td><input type="texto" name="Prec_Compra"/></td>

<td><center><b><font color=#FFF8DC>Cedula Cliente</font></b></td>
<td><input type="texto" name="CI_Cliente"/></td>
</tr><tr>
<!--voton--><td colspan"1"><center><input type="submit" name="btnRegistrar" value="Modificar"  /></td></center>
</tr>
   </table>
   </center>
   <!--menu-->
   <table border="4" cellspacing="7" cellpadding="1" width="15%" style="position:absolute;top:199px;left:85px;">
<tr>
<td><font ><center><b><font color=#FFFFFF>MENU PRINCIPAL</font></b></center></font></td>
<tr>
<td> <a href="http://localhost/Proyecto/menu/proveedores/proveedor.php"><center><b><font color=#FFFFFF>Proveedores</font></b></center>
<br>
<a href="http://localhost/Proyecto/menu/clientes/clientes.php"><center><b><font color=#FFFFFF>Clientes</font></b></center>
<br>
<a href="http://localhost/Proyecto/menu/productos/productos.php"><center><b><font color=#FFFFFF>Productos</font></b></center>
<br>
<a href="http://localhost/Proyecto/menu/facturas/factura.php"><center><b><font color=#FFFFFF>Factura</font></b></center>
</table>
<!--tablaMostrar-->
<table bgcolor="#C0C0C0" border="4" cellspacing="7" cellpadding="1" width="55%" style="position:absolute;top:344px;left:294px;">
<tr>
<td><b><font color=#000000>Numero de factura</font></b></font></td>
<td><b><font color=#000000>Fecha</font></b></td>
<td><b><font color=#000000>Codigo de producto</font></b></td>
<td><b><font color=#000000>Cantidad de producto</font></b></td>
<td><b><font color=#000000>Precio de compra</font></b></td>
<td><b><font color=#000000>Cedula Cliente</font></b></td>
</tr>
<?php
		require ("C:\wamp\www\Proyecto\TABLA.php");
		$resultado=mysql_query("SELECT * FROM Factura",$link);
		while($row=mysql_fetch_array($resultado)){
			?>
<tr>
<td><b><font color=#000000><?php echo $row['N_Factura'];?></font></b></td>
<td><b><font color=#000000><?php echo $row['Fecha_Factura'];?></font></b></td>
<td><b><font color=#000000><?php echo $row['Cod_Producto'];?></font></b></td>
<td><b><font color=#000000><?php echo $row['Cant_Producto'];?></font></b></td>
<td><b><font color=#000000><?php echo $row['Prec_Compra'];?></font></b></td>
<td><b><font color=#000000><?php echo $row['CI_Cliente'];?></font></b></td>
</tr>
<?php
}
?></table><tr>
<!--tabla Codigo de Proveedor -->
<table border="4" cellspacing="7" cellpadding="1" width="15%" style="position:absolute;top:391px;left:85px;">
<td COLSPAN=2><b><font color=#FFFFFF><center>Codigo de Producto</center></font></b></font></td>
</tr><tr>
<td><b><font color=#FFFFFF><center>Descreccion</center></font></b></font></td>
<td><b><font color=#FFFFFF><center>Codigo</center></font></b></font></td>
</tr>
<?php
		require ("C:\wamp\www\Proyecto\TABLA.php");
		$resultado=mysql_query("SELECT Cod_Producto,Des_Producto FROM ProductoS",$link);
		while($row=mysql_fetch_array($resultado)){
			?>
			<tr>
			<td><b><font color=#FFFFFF><center><?php echo $row['Des_Producto'];?></center></font></b></td>
			<td><b><font color=#FFFFFF><center><?php echo $row['Cod_Producto'];?></center></font></b></td>
</tr>
<?php
}
?>
</table>
	  	   </body>
      </head>
</html>
	  	   </body>
      </head>
</html>