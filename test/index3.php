<?php 
if (session_status() == 1) session_start();
echo "El estatus de la sesion es ". session_status();
session_destroy();
#ESTA PARTE ES PARA DESTRUIR / CERRAR LA SESSION --- SIEMPRE SE DEBE HACER UN SESION START CON UN SESION DESTROY
# 1 = INACTIVA
# 2 = ACTIVA
?>