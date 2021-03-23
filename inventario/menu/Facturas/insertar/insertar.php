<html>
<head>
<title>Insertar</title>
      <body>
        <?php
		require ("C:\wamp\www\Proyecto\conexion.php");
		if(isset($_POST['N_Factura']) && !empty($_POST['N_Factura']) &&
		isset($_POST['Fecha_Factura']) && !empty($_POST['Fecha_Factura']) &&
		isset($_POST['Cod_Producto']) && !empty($_POST['Cod_Producto']) &&
		isset($_POST['Cant_Producto']) && !empty($_POST['Cant_Producto']) &&
		isset($_POST['Prec_Compra']) && !empty($_POST['Prec_Compra']) &&
		isset($_POST['CI_Cliente']) && !empty($_POST['CI_Cliente']))
		{
			//insertar
			mysql_query("INSERT INTO factura(N_Factura,Fecha_Factura,Cod_Producto,Cant_Producto,Prec_Compra,CI_Cliente)
			VALUES('$_POST[N_Factura]','$_POST[Fecha_Factura]','$_POST[Cod_Producto]','$_POST[Cant_Producto]','$_POST[Prec_Compra]','$_POST[CI_Cliente]')",$link);
		
		print " Datos insertados correctamente";
		}else{
			print "problema al insertar datos";
		}
		require ("C:\wamp\www\Proyecto\menu\Facturas\insertar\Facturas_insertar.php");
        ?>
		 </body>
</head>
</html>