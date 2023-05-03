<?php
$lista_sap = array_map('trim', explode("\n", str_replace("\r", "", $_POST['lista_sap'])));
$lista_estoque = array_map('trim', explode("\n", str_replace("\r", "", $_POST['lista_estoque'])));

$esta_sap = array_intersect($lista_estoque, $lista_sap);
$nao_esta_sap = array_diff($lista_estoque, $lista_sap);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lista comparada</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
          crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="lista_sap">Está no SAP</label>
                <textarea name="lista_sap" id="lista_sap" cols="30" rows="10" class="form-control"><?= implode("\n", $esta_sap) ?></textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="lista_estoque">Não está no SAP</label>
                <textarea name="lista_estoque" id="lista_estoque" cols="30" rows="10" class="form-control"><?= implode("\n", $nao_esta_sap) ?></textarea>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
</body>
</html>
