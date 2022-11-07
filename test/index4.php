<?php 
if (session_status() == 1) session_start();
setcookie("user", "JoseCanahuate", time()+60*60*24);
//time()+60*60 = 1 Hora
//time()+60*60*24 = 1 Dia
//el time corresponde al tiempo en segundos que la seccion estara activa

?>

<!--ESTA PARTE CORRESPONDE A LAS COOKIES
LAS SESIONES Y LAS COOKIES DEBEN LLEVAR SIEMPRE EL SESION_START-->