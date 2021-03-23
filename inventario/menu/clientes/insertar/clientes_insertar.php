<html>
      <head>  <title>#/#PROVEEDORES#/#</title>
<!--logo--><link rel="shortcut icon" href="C:\wamp\www\Proyecto\logo.jpg" />
	  <body background=clientes.jpg>
	   <br>
	  <td><table width="45%" border="10" cellspacing="10" cellpadding="" align="center">
		   <tr bgcolor="" align="center">
		   <td><H1><i><font color=#2EFE2E>NUEVOS CLIENTES</font></i></H1></td>
		   </tr></table></td><br>
		   <center>
<!--insertar--><form  action="insertar.php" method="post" name="form" >
<table border="4" cellspacing="7" cellpadding="1" width="45%" >
<tr>
<td><center><b><font color=#2EFE2E>Cedula</font></b></td></center>
<td><center><input type="text" name="CI_Cliente"/></center></td>

<td><center><b><font color=#2EFE2E>Nombre</font></b></td></center>
<td><center><input type="text" name="Nombre"/></center></td>
</tr><tr>
<td><center><b><font color=#2EFE2E>Apellido</font></b></td></center>
<td><center><input type="text" name="Apellido"/></center></td>

<td><center><b><font color=#2EFE2E>Telefono</font></b></td></center>
<td><center><input type="text" name="Telefono"/></center></td>
</tr><tr>
<td><center><b><font color=#2EFE2E>Direccion</font></b></td>
<td><center><input type="text" name="Direccion"/></center></td>
<!--voton--><td colspan"1"><center><input type="submit"  value="Guardar"/></td></center> </form>
</tr>
   </table>
   </center>
     <!--menu-->
   <table border="4" cellspacing="7" cellpadding="1" width="15%" style="position:absolute;top:199px;left:85px;">
<tr>
<td><font ><center><b><font color=#2EFE2E>MENU PRINCIPAL</font></b></center></font></td>
<tr>
<td> <a href="http://localhost/Proyecto/menu/proveedores/proveedor.php"><center><b><font color=#2EFE2E>Proveedores</font></b></center>
<br>
<a href="http://localhost/Proyecto/menu/clientes/clientes.php"><center><b><font color=#2EFE2E>Clientes</font></b></center>
<br>
<a href="http://localhost/Proyecto/menu/productos/productos.php"><center><b><font color=#2EFE2E>Productos</font></b></center>
<br>
<a href="http://localhost/Proyecto/menu/facturas/factura.php"><center><b><font color=#2EFE2E>Factura</font></b></center>
</table>
<!--tablaMostrar-->
<table bgcolor="#C0C0C0" border="4" cellspacing="7" cellpadding="1" width="55%" style="position:absolute;top:274px;left:294px;">
<tr>
<td><b><font color=#000000>Cedula</font></b></font></td>
<td><b><font color=#000000>Nombre</font></b></td>
<td><b><font color=#000000>Apellido</font></b></td>
<td><b><font color=#000000>Telefono</font></b></td>
<td><b><font color=#000000>Direccion</font></b></td>
</tr>
<?php
		require ("C:\wamp\www\Proyecto\TABLA.php");
		$resultado=mysql_query("SELECT * FROM clientes",$link);
		while($row=mysql_fetch_array($resultado)){
			?>
<tr>
<td><b><font color=#000000><?php echo $row['CI_Cliente'];?></font></b></td>
<td><b><font color=#000000><?php echo $row['Nombre'];?></font></b></td>
<td><b><font color=#000000><?php echo $row['Apellido'];?></font></b></td>
<td><b><font color=#000000><?php echo $row['Telefono'];?></font></b></td>
<td><b><font color=#000000><?php echo $row['Direccion'];?></font></b></td>
</tr>
<?php
}
?>
</table>
	  	   </body>
      </head>
</html>