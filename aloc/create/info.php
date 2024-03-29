<?php
if (!isset($_GET['proj-id']) && !isset($_GET['dev-id'])) {
    header('Location: dev-s.php?err=2');
    die;
}

require_once '../../rb-mysql.php';

R::setup('mysql:host=127.0.0.1;dbname=GerenciadorProjetos', 'root');

$proj = R::load('projeto', $_GET['proj-id']);
$dev = R::load('desenvolvedor', $_GET['dev-id']);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Entrar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../_css/form.css">
    <script>
        function ini() {
            document.getElementById('term').setAttribute('min', document.getElementById('inicio').value);
        }

        function ter() {
            console.log(document.getElementById('term').value);
            document.getElementById('inicio').setAttribute('max', document.getElementById('term').value);
        }
    </script>
</head>
<?php include_once '../../header.php' ?>
<main>
    <div class="cabecalho">
        <form action="validate.php" method="post">
            <div class="form-group">
                <label>Desenvolvedor</label>
                <input class="form-control" type="text" <?= 'value="' . $dev->nome . '"' ?> readonly>
                <input class="form-control" type="text" name="dev-id" <?= 'value="' . $dev->id . '"' ?> style="display: none">
            </div>
            <div class="form-group">
                <label>Projeto</label>
                <input class="form-control" type="text" <?= 'value="' . $proj->nome . '"' ?> readonly>
                <input class="form-control" type="text" name="proj-id" <?= 'value="' . $proj->id . '"' ?> style="display: none">
            </div>
            <div class="form-group">
                <label for="inicio">Início</label>
                <input class="form-control" type="date" name="inicio" id="inicio" onchange="ini()">
            </div>
            <div class="form-group">
                <label for="term">Término</label>
                <input class="form-control" type="date" name="term" id="term" onchange="ter()">
            </div>
            <div class="form-group">
                <label for="remun">Remuneração</label>
                <div class="form-inline">
                    <input class="form-control" type="number" name="remun" id="remun" style="flex-grow: 1">
                    <span class="input class="form-control"-group-text">.00 R$</span>
                </div>
            </div>
            <div class="form-group">
                <label for="horas">Horas Semanais</label>
                <div class="form-inline">
                    <input class="form-control" type="number" name="horas" id="horas" style="flex-grow: 1">
                    <span class="input class="form-control"-group-text">h</span>
                </div>

            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary">
            </div>
    </div>
</main>
</body>
<?php include_once '../../footer.php' ?>

</html>