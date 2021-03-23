<html>
<head>
<title>editar</title>
      <body>
        <?php
		require "C:\wamp\www\Proyecto\conexion.php";
	
		$upd= "UPDATE productos SET Cod_Producto='$_POST[Cod_Producto]',Des_Producto='$_POST[Des_Producto]',Precio='$_POST[Precio]',Existencia='$_POST[Existencia]',Cod_Proveedor='$_POST[Cod_Proveedor]' Where Cod_Producto='$_POST[Cod_Producto]'";
		$rs=mysql_query($upd,$link);
			if($rs)
			{
			print "se realizo modificacion";
		   }else{
			   print "problema al Modificar datos";
		   }
		   require ("C:\wamp\www\Proyecto\menu\productos\Editar\productos_editar.php");
        ?>
		 </body>
</head>
</html> 