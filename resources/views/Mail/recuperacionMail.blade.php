<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{--  $mail->Subject = 'Recuperar contrasena';
    $mail->setFrom('mensaje@agrupec.com','Agrupec'); //el que envia la empresa su correo  --}}

    @php
    $codigo = rand(1000,9999);
    $email="clc";
    $token="323";
    @endphp
    <h3><u>{{$codigo}}</u><small> es tu codigo para restablecer la contrasena de Agrupec</small></h3>
    <div style="text-align:center; ">
        <div style="padding-top:20px;">
{{--  <p> <a href="http://agrupec.com//reset.php?email='.$email.'&token='.$token.'" style="  --}}
    <p> <a href="http://127.0.0.1:8000/restablecerGmailView" style="
    text-decoration:none;
    font-weight:600;
    font-size:20px;
    color:#ffffff;
    padding-top:20px;
    padding-bottom:20px;
    padding-left:40px;
    padding-right:40px;
    border-radius: 6px;
    background-color:#005BBB; ">

        Restablecer contraseña </a> </p><br />
      </div>
    <h3><small>Mas informe en mensaje@agrupec.com</small> </h3>
    </div>
</b>
{{--
    $mail->send();
    // echo 'el mensaje se envio correctamente';
    $enviado=true;
} catch (Exception $e) {

    echo "hubo un erro al enviar el mensaje Error: {$mail->ErrorInfo}";
}
?>  --}}

</body>
</html>
