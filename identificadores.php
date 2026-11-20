<?php
    require_once("funciones.php");

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['hacer'])){
        $nombre=strval($_POST['nom']);
        $fecha=strval($_POST['fec']);

        $iniciales=obtenerIniciales($nombre);
        $anio=obtenerAnio($fecha);
        $mesdia=obtenerMesDia($fecha);

        $clave=generarClave($iniciales, $anio, $mesdia);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dis.css" type="text/css">
    <title>Identificadores</title>
</head>
<body>
    <h1>Generar Identificadores</h1>
    <section class="menu_c">
        <ol class="menu">
            <a href="identificadores.php">Generar Identificadores </a>
        <a href="usuarios.php"> Generar Usuario</a>
        </ol>
    </section>
    <form method="POST" action="">
    <label for="nom">Ingrese su nombre completo:</label>
    <input type="text" step="any" name="nom" id="nom" required>
    <br><br>

    <label for="fec">Ingrese su fecha de nacimiento:</label>
    <input type="date" step="any" name="fec" id="fec" required>
    <br><br>

    <button type="submit" name="hacer">Crear identificador</button>
    </form>
    <hr>

    <?php
        if(isset($_POST['hacer'])){
            echo "<p>Su identicador es: <strong>".$clave."</strong></p>";
        }
    ?>
</body>
</html>