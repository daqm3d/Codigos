<html>
<head>
<title>Insertar</title>
      <body>
        <?php
		require ("C:\wamp\www\Proyecto\conexion.php");
		if(isset($_POST['Nomb_Proveedor']) && !empty($_POST['Nomb_Proveedor']) &&
		isset($_POST['Cod_Proveedor']) && !empty($_POST['Cod_Proveedor']) &&
		isset($_POST['Empresa']) && !empty($_POST['Empresa']) &&
		isset($_POST['Direccion']) && !empty($_POST['Direccion']) &&
		isset($_POST['Tlf_Personal']) && !empty($_POST['Tlf_Personal']) &&
		isset($_POST['Tlf_Empresa']) && !empty($_POST['Tlf_Empresa']) &&
		isset($_POST['Fax']) && !empty($_POST['Fax']))
		{
			//insertar
			mysql_query("INSERT INTO proveedor(Nomb_Proveedor,Cod_Proveedor,Empresa,Direccion,Tlf_Personal,Tlf_Empresa,Fax)
			VALUES('$_POST[Nomb_Proveedor]','$_POST[Cod_Proveedor]','$_POST[Empresa]','$_POST[Direccion]','$_POST[Tlf_Personal]','$_POST[Tlf_Empresa]','$_POST[Fax]')",$link);
		
		print " Datos insertados correctamente";
		}else{
			print "problema al insertar datos";
		}
		require ("C:\wamp\www\Proyecto\menu\proveedores\insertar\proveedores_insertar.php");
        ?>
		 </body>
</head>
</html>