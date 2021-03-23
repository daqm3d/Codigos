<html>
      <head>  <title>#/#PROVEEDORES#/#</title>
<!--logo--><link rel="shortcut icon" href="C:\wamp\www\Proyecto\logo.jpg" />
	  <body background=proveedores.JPG>
	   <br>
	  <td><table width="45%" border="10" cellspacing="10" cellpadding="" align="center">
		   <tr bgcolor="" align="center">
		   <td><H1><i><font color=#190707>NUEVOS PROVEEDORES</font></i></H1></td>
		   </tr></table></td><br>
		   <center>
<!--insertar--><form  action="insertar.php" method="post" name="form" >
<table border="4" cellspacing="7" cellpadding="1" width="45%" >
<tr>
<td><center><b>Nombre </b></td></center>
<td><input type="text" name="Nomb_Proveedor" size="20"/></td>

<td><center><b>Codigo</b></td></center>
<td> <input type="text" name="Cod_Proveedor"/></td>
</tr><tr>
<td><center><b>Empresa</b></td></center>
<td><input type="text" name="Empresa"/></td>

<td><center><b>Direccion</b></td></center>
<td><input type="text" name="Direccion"/></td>
</tr><tr>
<td><center><b>Telefono Personal</b></td>
<td><input type="text" name="Tlf_Personal"/></td>

<td><center><b>Telefono Empresa</b></td>
<td><input type="text" name="Tlf_Empresa"/></td>
</tr><tr>
<td><center><b>Fax</b></td>
<td><input type="text" name="Fax"/></td>
<!--voton--><td colspan"1"><center><input type="submit"  value="Guardar"/></td></center> </form>
</tr>
   </table>
   </center>
    <!--menu-->
   <table border="4" cellspacing="7" cellpadding="1" width="15%" style="position:absolute;top:199px;left:85px;">
<tr>
<td><font ><center><b>MENU PRINCIPAL</b></center></font></td>
<tr>
<td> <a href="http://localhost/Proyecto/menu/proveedores/proveedor.php"><center><b><font color=#000000>Proveedores</font></b></center>
<br>
<a href="http://localhost/Proyecto/menu/clientes/clientes.php"><center><b><font color=#000000>Clientes</font></b></center>
<br>
<a href="http://localhost/Proyecto/menu/productos/productos.php"><center><b><font color=#000000>Productos</font></b></center>
<br>
<a href="http://localhost/Proyecto/menu/facturas/factura.php"><center><b><font color=#000000>Factura</font></b></center>
</table>
<!--tablaMostrar-->
<table bgcolor="#C0C0C0" border="4" cellspacing="7" cellpadding="1" width="55%" style="position:absolute;top:311px;left:294px;">
<tr>
<td><b><font color=#000000>NOMBRE</font></b></font></td>
<td><b><font color=#000000>Codigo Proveedor</font></b></td>
<td><b><font color=#000000>Empresa</font></b></td>
<td><b><font color=#000000>Direccion</font></b></td>
<td><b><font color=#000000>Telefono Personal</font></b></td>
<td><b><font color=#000000>Telefono Empresa</font></b></td>
<td><b><font color=#000000>Fax</font></b></td>
</tr>
<?php
		require ("C:\wamp\www\Proyecto\TABLA.php");
		$resultado=mysql_query("SELECT * FROM proveedor",$link);
		while($row=mysql_fetch_array($resultado)){
			?>
<tr>
<td><?php echo $row['Nomb_Proveedor'];?></td>
<td><?php echo $row['Cod_Proveedor'];?></td>
<td><?php echo $row['Empresa'];?></td>
<td><?php echo $row['Direccion'];?></td>
<td><?php echo $row['Tlf_Personal'];?></td>
<td><?php echo $row['Tlf_Empresa'];?></td>
<td><?php echo $row['Fax'];?></td>
</tr>
<?php
}
?>
</table>
	  	   </body>
      </head>
</html>