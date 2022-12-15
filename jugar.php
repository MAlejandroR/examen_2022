<?php
//Identifica e inicializa las variables según proceda





//Establecer los casos y realiza las acciones particulares
switch ($opcion){
    case "Reiniciar":
    case "Empezar":
    case "Jugar":
    case "Volver":
    default:
}

//Acciones generales is las hubiera

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo.css">
    <title>Juego adivina número</title>
</head>
<body>
<div style="mensaje">
<?php
//Aquí, o donde corresponda deberás de aportar a la vista información
//Y mas acciones que tengas que hacer
?>
</div>
<fieldset>
    <legend>Opciones del juego</legend>
<form action="jugar.php" method="post">
    <label for="numero">Inserta el número con el que quieres probar</label>
    <input type="text" name="numero" id="numero">
    <input type="submit" value="Jugar" name="submit">
    <input type="submit" value="Volver" name="submit">
    <input type="submit" value="Reiniciar" name="submit">
</form>
</fieldset>
</body>
</html>


