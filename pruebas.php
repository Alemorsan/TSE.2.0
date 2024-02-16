<?php
    require 'PHP/coneccion.php';
    $departamentos = $conn->query("SELECT id_departamento, Nombre FROM departamento");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <select name="departamentos" id="">
            <option value="">SELECCIONE UN DEPARTAMENTO</option>
            <?php while($row = $departamentos->fetch_assoc()) {?>
                <option value="<?php echo $row['id_departamento']; ?>"><?php echo $row['Nombre']; ?></option>
            <?php } ?>
        </select>
    </form>
</body>
</html>