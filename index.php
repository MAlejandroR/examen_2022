<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Práctica 3 JUEGO DE ADIVINAR UN NÚMERO index</title>
    <link rel="stylesheet" href="estilo.css" type="text/css">
</head>
<body>
<span class="mensaje"></span>
<fieldset class="ppal">

    <h1>JUEGO DE ADIVINAR UN NÚMERO</h1>
    <h2>Selecciona un intervalo del menú:</h2>
    <form action="jugar.php" method="POST">
        <fieldset>

            <legend>Establece el intervalo</legend>
            <input type="radio" name="intentos" value="10"> selected 1-1.024(2<sup>10</sup>) - 10
            intentos<br>
            <input type="radio" name="intentos" value="15">1-65.536(2<sup>15</sup>) - 15
            intentos<br>
            <input type="radio" name="intentos" value="20">1-1.048.576(2<sup>20</sup>) - 20
            intentos<br>
            <input type="submit" value="Empezar" name="submit">

        </fieldset>
    </form>
    <br>
</fieldset>
<fieldset>
    <legend>Descripción del juego</legend>
    <h2>Piensa en un n&uacutemero del intervalo que has elegido</h2><br>
    <h2>La aplicaci&oacuten tiene que acertarlo en el n&uacutemero de intentos establecidos en el intervalo</h2><br>
    <h2>Cada vez que la aplicaci&oacuten especifique un n&uacutemero, hay que indicar:</h2>
    <ul>
        <ol>Si el n&uacutemero a adivinar es mayor</ol>
        <ol>Si el n&uacutemero a adivinar es menor</ol>
        <ol>Si la aplicaci&oacuten ha acertado el número</ol>
    </ul>

</fieldset>

</body>
</html>

