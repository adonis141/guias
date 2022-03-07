<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php require_once "menu.php" ?>
    <title>Resultado</title>
  </head>
  <body>
  <?php

    $pesoVehiculo = $_POST['pesoVehiculo'];
    $pesoPermitido = 3700;
    $sobrePaso = 0;
    $falta =0;
    if ($pesoVehiculo > $pesoPermitido){
        $sobrepaso= $pesoVehiculo - $pesoPermitido;
        echo "El peso del vehiculo es mayor que: $pesoPermitido Kg. Se ha sobrepasado: $sobrepaso Kg...";

    }
    else{
        $falta = $pesoPermitido - $pesoVehiculo;
        echo "El peso del vehiculo esta por debajo del peso permitido: $pesoPermitido Kg. Le faltan $falta kg para completar peso permitido...";
    }

?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>