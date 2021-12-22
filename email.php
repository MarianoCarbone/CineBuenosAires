<?php

echo "probando correo desde php desde app";


//..parametro 1 destinatario, parametro 2 asunto, para metro 3 cuerpo del mensaje, parametro 4 desde donde nos llegan los correos
$destino="ezeazul10@hotmail.com";//$_POST[]
$asunto=$_POST['asunto'];
$cuerpo=$_POST['cuerpo'];

mail($destino,$asunto,$cuerpo,'from:pigui@papucho.com.ar');


?>