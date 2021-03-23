<html>
<head>
<title>Insertar</title>
      <body>
        <?php
		require ("C:\wamp\www\Proyecto\conexion.php");
		if(isset($_POST['Cod_Producto']) && !empty($_POST['Cod_Producto']) &&
		isset($_POST['Des_Producto']) && !empty($_POST['Des_Producto']) &&
		isset($_POST['Precio']) && !empty($_POST['Precio']) &&
		isset($_POST['Existencia']) && !empty($_POST['Existencia']) &&
		isset($_POST['Cod_Proveedor']) && !empty($_POST['Cod_Proveedor']))
		{
			//insertar
			mysql_query("INSERT INTO productos (Cod_Producto,Des_Producto,Precio,Existencia,Cod_Proveedor)
			VALUES('$_POST[Cod_Producto]','$_POST[Des_Producto]','$_POST[Precio]','$_POST[Existencia]','$_POST[Cod_Proveedor]')",$link);
		
		print " Datos insertados correctamente";
		}else{
			print "problema al insertar datos";
		}
		require ("C:\wamp\www\Nueva carpeta\productos_insertar.php");
        ?>
		 </body>
</head>
</html>