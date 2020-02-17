#!/bin/bash
export FECHA=($(date +"%d-%m-%Y_%H:%M:%S") )# fecha de elaboración
export NAME=RespaldoBDSigefirrhh_${FECHA}.backup # nombre del respaldo
export DIR=/home/sigefirrhh/backup/ #direccion donde se guarda los documentos
USER_DB=admin #usuario de la BD
NAME_DB=nombre # nombre de la BD
USER_GMAIL=@gmail.com #direccion de correo a enviar 
MESSAGE_FILE=backup.mail.message # colocar este archivo en DIR.

cd $DIR > ${NAME} #se habre direccion donde se guardara el backup
export PGPASSWORD=xxxx #clave de la BD
chmod 777 ${NAME} #se le da permisos al archivo
echo "procesando la copia de la base de datos" #mensaje a ver 

pg_dump -i -h (ip del servidor) -p (puerto) -U $USER_DB -F c -b -v -f ${NAME}  $NAME_DB # comando para crear el backup
echo "backup terminado" >> $DIR/bitacora.log; #mensaje a ver + guardar log
# usamos bzip2 para comprimir el sql
 bzip2 ${NAME}
 
 # Enviar correo 
until
mutt -s "Copia de seguridad BD ${NAME_DB}: $(date +"%d-%m-%Y")" ${USER_GMAIL} -a ${NAME}.bz2 < ${DIR}${MESSAGE_FILE} 
do echo "   NO SE ENVIO CORREO REINTENTANDO ... " :; done
echo "SE ENVIO CORREO"
#Elimina archivos mayor a 30 dias
find ${DIR}*.bz2 -mtime +30 -exec rm {} \;