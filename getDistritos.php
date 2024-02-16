<?php
    require 'coneccion.php';

    $iddepas = $conn->real_escape_string($_POST['id_departamento']);

    $sql ="SELECT id_departamento, DISTRITO FROM cdv WHERE id_departamento = $iddepas GROUP BY DISTRITO";
    $result_sele = $conn->query($sql);
    $resultado = "<Option value=''>Selecciona el distrito</option>";
    if ($result_sele && $result_sele->num_rows > 0) {
        while ($row = $result_sele->fetch_assoc()) {
            $resultado .= "<Option value='".$row['id_departamento']."'>" . $row['DISTRITO'] . "</option>";
            //echo "<option>" .  . ". " . $row['DISTRITO'] . "</option>";
        }
    }

    echo json_encode($resultado, JSON_UNESCAPED_UNICODE);
?>