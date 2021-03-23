<html>
<head>
<title>editar</title>
      <body>
        <?php
		require "C:\wamp\www\Proyecto\conexion.php";
	
		mysql_query("DELETE FROM proveedor WHERE Cod_Proveedor='$_POST[Cod_Proveedor]'",$link)
		or die ("problemas al consultar");
		
		mysql_close($link);
		print("se han eliminado los datos");
		require ("C:\wamp\www\Proyecto\menu\proveedores\Eliminar\proveedores_eliminar.php");
        ?>
		 </body>
</head>
</html> 