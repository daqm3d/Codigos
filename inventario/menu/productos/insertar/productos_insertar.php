<html>
      <head>  <title>#/#PROVEEDORES#/#</title>
<!--logo--><link rel="shortcut icon" href="C:\wamp\www\Proyecto\logo.jpg" />
	  <body background=productos.jpg>
	   <br>
	  <td><table width="45%" border="10" cellspacing="10" cellpadding="" align="center">
		   <tr bgcolor="" align="center">
		   <td><H1><i><font color=#FFF8DC>NUEVOS PRODUCTOS</font></i></H1></td>
		   </tr></table></td><br>
		   <center>
<!--insertar--><form name="Registro" action="insertar.php" method="post" ">
<table border="4" cellspacing="7" cellpadding="1" width="45%" >
<tr>
<td><center><b><font color=#FFF8DC>Codigo Producto</font></b></td></center>
<td><input type="texto" name="Cod_Producto" size="20"/></td>

<td><center><b><font color=#FFF8DC>Descriccion</font></b></td></center>
<td> <input type="texto" name="Des_Producto"/></td>
</tr><tr>
<td><center><b><font color=#FFF8DC>Precio</font></b></td></center>
<td><input type="texto" name="Precio"/></td>

<td><center><b><font color=#FFF8DC>En Existencia</font></b></td></center>
<td><input type="texto" name="Existencia"/></td>
</tr><tr>
<td><center><b><font color=#FFF8DC>Codigo Proveedor</font></b></td>
<td><input type="texto" name="Cod_Proveedor"/></td>

<!--voton--><td colspan"1"><center><input type="submit" name="btnRegistrar" value="Guardar"  /></td></center></form>
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
<table bgcolor="#C0C0C0" border="4" cellspacing="7" cellpadding="1" width="55%" style="position:absolute;top:311px;left:294px;">
<tr>
<td><b><font color=#000000>Codigo Producto</font></b></font></td>
<td><b><font color=#000000>Descriccion</font></b></td>
<td><b><font color=#000000>Precio</font></b></td>
<td><b><font color=#000000>En Existencia</font></b></td>
<td><b><font color=#000000>Codigo Proveedor</font></b></td>
</tr>
<?php
		require ("C:\wamp\www\Proyecto\TABLA.php");
		$resultado=mysql_query("SELECT * FROM productos",$link);
		while($row=mysql_fetch_array($resultado)){
			?>
<tr>
<td><b><font color=#000000><?php echo $row['Cod_Producto'];?></font></b></td>
<td><b><font color=#000000><?php echo $row['Des_Producto'];?></font></b></td>
<td><b><font color=#000000><?php echo $row['Precio'];?></font></b></td>
<td><b><font color=#000000><?php echo $row['Existencia'];?></font></b></td>
<td><b><font color=#000000><?php echo $row['Cod_proveedor'];?></font></b></td>
</tr>
<?php
}
?></table><tr>
<!--tabla Codigo de Proveedor -->
<table border="4" cellspacing="7" cellpadding="1" width="15%" style="position:absolute;top:391px;left:85px;">
<td COLSPAN=2><b><font color=#FFFFFF><center>Codigo de Proveedor</center></font></b></font></td>
</tr><tr>
<td><b><font color=#FFFFFF><center>Nombre</center></font></b></font></td>
<td><b><font color=#FFFFFF><center>Codigo</center></font></b></font></td>
</tr>
<?php
		require ("C:\wamp\www\Proyecto\TABLA.php");
		$resultado=mysql_query("SELECT Nomb_Proveedor,Cod_proveedor FROM proveedor",$link);
		while($row=mysql_fetch_array($resultado)){
			?>
			<tr>
			<td><b><font color=#FFFFFF><center><?php echo $row['Nomb_Proveedor'];?></center></font></b></td>
			<td><b><font color=#FFFFFF><center><?php echo $row['Cod_proveedor'];?></center></font></b></td>
</tr>
<?php
}
?>
</table>
	  	   </body>
      </head>
</html>