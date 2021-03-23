<html>
<head>
<title>Conexion</title>
      <body>
     <?php
         $Servidor="localhost";
		 $Usuario="root";
		 $Clave="";
		 $datab="tienda deportiva";
		 $link=mysql_connect($Servidor,$Usuario,$Clave,$datab) or die ("problemas al conectar");
			mysql_select_db($datab,$link) or die ("Problemas al conectar la base de datos $datab");
			print("conectado a la Base de Datos $datab");
     ?>
 </body>
</head>
</html>
