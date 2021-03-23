<html>
<head>
<title>editar</title>
      <body>
        <?php
		require "C:\wamp\www\Proyecto\conexion.php";
	
		$upd= "UPDATE factura SET N_Factura='$_POST[N_Factura]',Fecha_Factura='$_POST[Fecha_Factura]',Cod_Producto='$_POST[Cod_Producto]',Cant_Producto='$_POST[Cant_Producto]',Prec_Compra='$_POST[Prec_Compra]',CI_Cliente='$_POST[CI_Cliente]' Where N_Factura='$_POST[N_Factura]'";
		$rs=mysql_query($upd,$link);
			if($rs)
			{
			print "se realizo modificacion";
		   }else{
			   print "problema al Modificar datos";
		   }
		   require ("C:\wamp\www\Proyecto\menu\Facturas\Editar\Facturas_editar.php");
        ?>
		 </body>
</head>
</html> 