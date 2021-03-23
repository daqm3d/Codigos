<html>
<head>
<title>editar</title>
      <body>
        <?php
		require "C:\wamp\www\Proyecto\conexion.php";
	
		mysql_query("DELETE FROM factura WHERE N_Factura='$_POST[N_Factura]'",$link)
		or die ("problemas al consultar");
		
		mysql_close($link);
		print("se han eliminado los datos");
		require ("C:\wamp\www\Proyecto\menu\Facturas\Eliminar\Facturas_eliminar.php");
        ?>
		 </body>
</head>
</html> 