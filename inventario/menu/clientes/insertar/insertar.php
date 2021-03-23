<html>
<head>
<title>Insertar</title>
      <body>
        <?php
		require ("C:\wamp\www\Proyecto\conexion.php");
		if(isset($_POST['CI_Cliente']) && !empty($_POST['CI_Cliente']) &&
		isset($_POST['Nombre']) && !empty($_POST['Nombre']) &&
		isset($_POST['Apellido']) && !empty($_POST['Apellido']) &&
		isset($_POST['Telefono']) && !empty($_POST['Telefono']) &&
		isset($_POST['Direccion']) && !empty($_POST['Direccion']))
		{
			//insertar
			mysql_query("INSERT INTO clientes (CI_Cliente,Nombre,Apellido,Telefono,Direccion)
			VALUES('$_POST[CI_Cliente]','$_POST[Nombre]','$_POST[Apellido]','$_POST[Telefono]','$_POST[Direccion]')",$link);
		
		print " Datos insertados correctamente";
		}else{
			print "problema al insertar datos";
		}
		require ("C:\wamp\www\Proyecto\menu\clientes\insertar\clientes_insertar.php");
        ?>
		 </body>
</head>
</html>