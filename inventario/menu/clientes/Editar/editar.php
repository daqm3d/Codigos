<html>
<head>
<title>editar</title>
      <body>
        <?php
		require "C:\wamp\www\Proyecto\conexion.php";
	
		$upd= "UPDATE clientes SET CI_Cliente='$_POST[CI_Cliente]',Nombre='$_POST[Nombre]',Apellido='$_POST[Apellido]',Telefono='$_POST[Telefono]',Direccion='$_POST[Direccion]' Where CI_Cliente='$_POST[CI_Cliente]'";
		$rs=mysql_query($upd,$link);
			if($rs)
			{
			print "se realizo modificacion";
		   }else{
			   print "problema al Modificar datos";
		   }
		   require ("C:\wamp\www\Proyecto\menu\clientes\Editar\clientes_editar.php");
        ?>
		 </body>
</head>
</html> 