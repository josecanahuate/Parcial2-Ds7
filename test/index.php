<?php 
if (session_status() == 1) session_start();
$_SESSION["nombre"] = "Jose Canahuate";
$_SESSION["correo"] = "josecanahuate05@gmail.com";
echo "Se crearon las secciones";
?>

<!-- AL REALIZARSE UN proyecto con sesiones la 1ra linea debe ser session_start(); NO PUEDE HABER OTRA POR 
ENCIMA NI SIQUIERA UN LINEA DE ESPACIO EN BLANCO
ESTA PARTE ES PARA LAS SECCIONES PERO SOLO ES PARA PRUEBAS
UNA SECCION, ES UNA VARIABLE QUE SIEMPRE ESTA DISPONIBLE MIENTRAS ESTA ACTIVA EN EL NAVEGADOR
AQUI NO SE INCLUYE CODIGO HTML -->