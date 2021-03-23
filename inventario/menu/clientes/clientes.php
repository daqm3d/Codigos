<html>
      <head>  <title>#/#CLIENTES#/#</title>
<!--logo--><link rel="shortcut icon" href="C:\wamp\www\Proyecto\logo.jpg" />
	  <body background=clientes.jpg>
	  <br>
	  <td><table width="45%" border="10" cellspacing="10" cellpadding="" align="center">
		   <tr bgcolor="" align="center">
		   <td><H1><i><font color=#2EFE2E>CLIENTES</font></i></H1></td>
		   </tr></table></td><br/>
		   <center>
<!--cuadro-->
<table border="4" cellspacing="7" cellpadding="1" width="45%" >
<tr>
<form  action="http://localhost/Proyecto/menu/clientes/insertar/clientes_insertar.php" method="post" name="form" >
<td><center><input type="submit"  value="Nuevo Cliente"/></form></center></td>

<form  action="http://localhost/Proyecto/menu/clientes/editar/clientes_editar.php" method="post" name="form" >
<td><center><input type="submit"  value="Editar Datos"/></form></center></td>

<form  action="http://localhost/Proyecto/menu/clientes/eliminar/clientes_eliminar.php" method="post" name="form" >
<td><center><input type="submit"  value="Eliminar Cliente"/></form></center></td>
</tr>
   </table>
   </center>
   <!--menu-->
   <table border="4" cellspacing="7" cellpadding="1" width="15%" style="position:absolute;top:199px;left:85px;">
<tr>
<td><font ><center><b><font color=#2EFE2E>MENU PRINCIMPAL</b></font></center></font></td>
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
<table bgcolor="#C0C0C0" border="4" cellspacing="7" cellpadding="1" width="55%" style="position:absolute;top:199px;left:294px;">
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