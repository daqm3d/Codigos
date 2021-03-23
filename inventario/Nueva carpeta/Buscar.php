<html>
<head>
<title>Insertar</title>
      <body>
	  <!--tablaMostrar-->
<table bgcolor="#C0C0C0" border="4" cellspacing="7" cellpadding="1" width="55%" style="position:absolute;top:311px;left:294px;">
<tr>
<td><b><font color=#000000>Codigo Producto</font></b></font></td>
<td><b><font color=#000000>Descriccion</font></b></td>
<td><b><font color=#000000>Precio</font></b></td>
<td><b><font color=#000000>En Existencia</font></b></td>
<td><b><font color=#000000>Codigo Proveedor</font></b></td>
</tr><?php
		require ("C:\wamp\www\Proyecto\TABLA.php");
		$resultado=mysql_query("SELECT * FROM productos WHERE Cod_Producto LIKE '%'$_POST[Cod_Producto]'%'",$link);
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

?>

		 </body>
</head>
</html>