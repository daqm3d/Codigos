<html>
<head>
<title>Conexion</title>
      <body>
     <?php
         $Servidor="localhost";
		 $Usuario="root";
		 $Clave="";
		 $datab="tienda deportiva";
		 $link=mysql_connect($Servidor,$Usuario,$Clave,$datab);
			mysql_select_db($datab,$link)
     ?>
 </body>
</head>
</html>