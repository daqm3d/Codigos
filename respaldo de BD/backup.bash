#!/bin/bash
export FECHA=($(date +"%d-%m-%Y_%H:%M:%S") )#FECHA DE ELABORACION 
export NAME=RespaldoBDSigefirrhh_${FECHA}.backup #NOMBRE DEL RESPALDO
export DIR=/home/sigefirrhh/backup/  #DIRECCION DONDE SE GUARDA LOS RESPALDOS
export DIR2=/home/backup/ #DIRECCION GUARDARA LA BITACORA LOG
USER_DB=admin #USUARIO DE LA BD
NAME_DB=nombre #NOMBRE DE LA BD
USER_GMAIL=@gmail.com #DIREECCION DE CORREO PARA NOTIFICAR  
MESSAGE_FILE=backup.mail.message #MENSAJE A MOSTRAR EN EL CORREO
#
###     RESPALDO DE LA PRIMERA BD     ###
cd $DIR > ${NAME} #SE HABRE DIRRECCION DONDE SE GUARDARA EL RESPALDO
export PGPASSWORD=xxxx #CLAVE DE LA BD
chmod 777 ${NAME} #SE LE DA PERMISOS AL ARCHIVO
echo "procesando la copia de la base de datos" #MENSAJE A VER EN PROCESO
pg_dump -i -h (ip del servidor) -p (puerto) -U $USER_DB -F c -b -v -f ${NAME}  $NAME_DB #COMANDO PARA CREAR EL BACKUP EN POSTGRES
mysqldump  -u $USER_DB -p${PGPASSWORD}  $NAME_DB > ${NAME} #COMANDO PARA CREAR EL BACKUP EN MYSQL
echo "backup terminado" >> $DIR/bitacora.log; #MENSAJE A VER CUANDO SE TERMINA 
bzip2 ${NAME} #SE COMPRIME EL RESPALDO
#
###     ENVIO DE LOS RESPALDOS MEDIANTE SSH     ###
scp -r $DIR root@IP_REMOTA:/backups/RESPALDO_BD #SE TIENE QUE CREAR UNA LLAVE PUBLICA DE SSH PARA QUE NO PIDA CONTRASEÑA
#
###     ENVIAR CORREO     ### 
until
mutt -s "Copia de seguridad BD ${NAME_DB}: $(date +"%d-%m-%Y")" ${USER_GMAIL} -a ${NAME}.bz2 < ${DIR}${MESSAGE_FILE} 
do echo "   NO SE ENVIO CORREO REINTENTANDO ... " :; done
echo "SE ENVIO CORREO" >> $DIR/bitacora.log; #MENSAJE A VER CUANDO SE ENVIA LOS RESPALDOS 
#
###     ELIMINAR ARCHIVOS CON MAS DE 30 DIAS     ###
find ${DIR}*.bz2 -mtime +30 -exec rm {} \;

### CREA UN CRONTAB -E CON: 
# 30 23 * * * /home/backup/backup.bash 1> /dev/null 2> /home/backup/CRONTAB_BD.log
# PARA AUTOMATIZAR EL RESPALDO
## SE NESESITA INSTALAR: BZIP2 Y MUTT PARA CONPRIMIR Y ENVIAR EL CORREO 

