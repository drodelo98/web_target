<?php

$to      = $_POST['customer_email'];
$subject = 'QHORTE - Area de servicio al Cliente';
$from    = 'info@targetsoftdecolombia.com';


$headers = "MIME-Version: 1.0" . "\r\n";
$headers.= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers.= "From: <$from>";
 
$message = "<html>
<head>
<title>QHORTE</title>
</head>
<body>
<h1>Area de servicio al Cliente</h1>
<p>Para nosotros es muy importante su interes, es por eso que ponemos a su disposición nuestra area de servicio al Cliente.</p>
<p>En breve uno de nuestros accesores se comunicará al teléfono o correo ingresados en el formualario</p>
<table>
<tr>
<td>Datos de contacto</td>
<td></td>
</tr>
<tr>
<td>Nombre</td>
<td>".$_POST['customer_name']." ".$_POST['customer_lastname']."</td>
</tr>
<tr>
<td>Email</td>
<td>".$_POST['customer_email']."</td>
</tr>
<tr>
<td>Teléfono</td>
<td>".$_POST['customer_phone']."</td>
</tr>
<tr>
<td>Solicitud</td>
<td>".$_POST['customer_message']."</td>
</tr>
</table>
</body>
</html>";

$success=mail($to,$subject,$message,$headers,"-f $from -r $from");

if (!$success) {
  $errorMessage = error_get_last()['message'];
}else{
  echo "En breve uno de nuestros accesores se comunicará al teléfono o correo ingresados en el formualario.";
}
?>
