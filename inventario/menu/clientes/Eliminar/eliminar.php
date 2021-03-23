<html>
<head>
<title>editar</title>
      <body>
        <?php
		require "C:\wamp\www\Proyecto\conexion.php";
	
		mysql_query("DELETE FROM clientes WHERE CI_Cliente='$_POST[CI_Cliente]'",$link)
		or die ("problemas al consultar");
		
		mysql_close($link);
		print("se han eliminado los datos");
		require ("C:\wamp\www\Proyecto\menu\clientes\Eliminar\clientes_eliminar.php");
        ?>
		 </body>
</head>
</html> 