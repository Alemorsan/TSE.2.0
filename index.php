<?php
    require 'PHP/coneccion.php';
    $departamentos = $conn->query("SELECT id_departamento, Nombre FROM departamento");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/estilos.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <div class="logo"></div>
    <div class="grid text-center">
    <div class="g-col-6">
        <form action="" method="POST" class="form_departamento">
            <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="busqueda" id="busqueda">
                <option selected value="">SELECCIONE UN DEPARTAMENTO</option>
                <?php while($row = $departamentos->fetch_assoc()) { ?>
                    <option value="<?php echo $row['id_departamento']; ?>"><?php echo $row['Nombre']?></option>
                <?php } ?>
            </select>

            <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="" id="Distrito">
                <option selected value="">SELECCIONE El DISTRITO</option>
            </select>
        </form>
    </div>
    </div>
        
        
    <h2>Busquea de centros de votacion</h2>
    <div class="contenedor">
        <table class="table table-dark table-hover">
            <thead>
                <tr style="width: 680px">
                    <th style="width: 25px" scope="col">ID</th>
                    <th style="width: 230px" scope="col">Departamento</th>
                    <th style="width: 230px" scope="col">Distrito</th>
                    <th style="width: 730px" scope="col">SEDE</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include("PHP/coneccion.php"); // Incluye el archivo de conexión

                $sql = "SELECT id_departamento, DEPARTAMENTO, DISTRITO, NOMBRE FROM cdv ORDER BY id_departamento ASC"; // Cambia "tu_tabla" por el nombre de tu tabla
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td style='width: 25px; height: 30px;'>" . $row['id_departamento'] . "</td>
                        <td style='width: 230px; height: 30px;'>" . $row['DEPARTAMENTO'] . "</td>
                        <td style='width: 230px; height: 30px;'>" . $row['DISTRITO'] . "</td>
                        <td style='width: 730px;height: 30px;'>" . $row['NOMBRE'] . "</td></tr>";
                    // Agrega más celdas según tus columnas
                }
            ?>
            </tbody>
        </table>
    </div>
    <script src="JS/peticiones.js"></script>
</body>
</html>