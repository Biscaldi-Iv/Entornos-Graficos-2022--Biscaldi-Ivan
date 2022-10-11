<?php
#Autor: IVAN BISCALDI

$to="ivanbisc12@gmail.com";
$subject="Envio de correo con PHP";
$message='
<head>
    <title>Correo PHP</title>
    <style>
    .bloque{
        background-image: linear-gradient(180deg, lightblue, white);
        text-alaign: center;
        padding: 70px;
        border: 1px solid blue;
    }
    </style>
</head>
<body>
    <div class="bloque">
        <h1>Correo electronico</h1>
        <hr>
        <p>Este correo fue enviado con php</p>
    </div>
</body>
</html>';
$headers[]='MIME-Version: 1.0'.'\r\n';
$headers[]='Content-Type:text/html;charset=UTF-8;'.'\r\n';
$headers[]='To: <ivanbisc12@gmail.com>';
echo mail($to, $subject, $message, implode('\r\n', $headers));
?>