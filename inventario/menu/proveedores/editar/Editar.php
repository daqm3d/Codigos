<html>
<head>
<title>editar</title>
      <body>
        <?php
		require "C:\wamp\www\Proyecto\conexion.php";
		$upd= "UPDATE proveedor SET Nomb_Proveedor='$_POST[Nomb_Proveedor]',Cod_Proveedor='$_POST[Cod_Proveedor]',Empresa='$_POST[Empresa]',Direccion='$_POST[Direccion]',Tlf_Personal='$_POST[Tlf_Personal]',Tlf_Empresa='$_POST[Tlf_Empresa]',Fax='$_POST[Fax]' Where Cod_Proveedor='$_POST[Cod_Proveedor]'";
		$rs=mysql_query($upd,$link);
			if($rs)
			{
			print " se realizo modificacion";
			}
		    else{
			   print "problema al Modificar datos";
		   }
		   include("C:\wamp\www\Proyecto\menu\proveedores\Editar\proveedores_editar.php");
		   ?>
		 </body>
</head>
</html> 