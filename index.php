<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Construccion de expresions en php</h3>
    <?php
        $primeira="Primeira liña de texto";
        $segunda="Segunda liña de texto";
        $terceira="Terceira lña de texto";
        $resultado=$primeira."<br/>".$segunda."<br/>".$terceira;
        echo $resultado;
        echo "<br/> O número de caracteres da cadea resultante é: ".strlen($resultado);
    ?>
</body>
</html>