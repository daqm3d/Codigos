<html>
<head>
<title>editar</title>
      <body>
        <?php
		require "C:\wamp\www\Proyecto\conexion.php";
	
		mysql_query("DELETE FROM productos WHERE Cod_Producto='$_POST[Cod_Producto]'",$link)
		or die ("problemas al consultar");
		
		mysql_close($link);
		print("se han eliminado los datos");
		require ("C:\wamp\www\Proyecto\menu\productos\Eliminar\productos_eliminar.php");
        ?>
		 </body>
</head>
</html> 