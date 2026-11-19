<?php
    require_once("funciones.php");

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['hacer'])){
        $nombre=strval($_POST['nom']);
        $inst=strval($_POST['ins']);
        $an=strval($_POST['an']);

        $lipnom=limpiarNombre($nombre);
        $nomch=convertirMinusculas($lipnom);
        $iniciins=obtenerInstitucion($inst);
        $anio2=obtenerAnio2($an);

        $usuario=generarUsuario($nomch, $iniciins, $anio2);

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Generar Usuarios</h1>
    <ol>
        <a href="identificadores.php">Generar Identificadores </a>
        <a href="usuarios.php"> Generar Usuario</a>
    </ol>
    <form method="POST" action="">
    <label for="nom">Ingrese su nombre completo: </label>
    <input type="text" step="any" name="nom" id="nom" required>
    <br><br>

    <label for="fec">Ingrese el nombre de la institución: </label>
    <input type="text" step="any" name="ins" id="ins" required>
    <br><br>

    <label for="an">Ingresa el año en el que ingresaste</label>
    <input type="number" step="any" name="an" id="an" required>
    <br><br>

    <button type="submit" name="hacer">Crear usuario</button>
    </form>
    <hr>

    <?php
        if(isset($_POST['hacer'])){
            echo "<p>Su Usuario: <strong>".$usuario."</strong></p>";
        }
    ?>
</body>
</html>