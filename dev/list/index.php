<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Entrar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../base.css">
</head>
<?php include_once '../../header.php' ?>

<body>
    <?php
    require_once '../../rb-mysql.php';
    R::setup('mysql:host=127.0.0.1;dbname=GerenciadorProjetos', 'root');
    $devs = R::findAll('desenvolvedor');
    ?>
    <main>
    <div class="devs">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th style="text-align:center" colspan="6">
                            <h4>Desenvolvedores</h4>
                        </th>
                        <th>
                            <a href="dev/create/" title="Adicionar">
                                <svg viewBox="1.072 1.838 274.87 258.012" height="1.75em">
                                    <g transform="matrix(0.280451, 0, 0, 0.263251, -1.732874, -0.794519)">
                                        <path d="M959.4,775.6H775.6v183.8c0,16.9-13.7,30.7-30.6,30.7c-16.9,0-30.7-13.7-30.7-30.7V775.6H530.6c-16.9,0-30.6-13.7-30.6-30.6c0-16.9,13.7-30.6,30.6-30.6h183.8V530.6c0-16.9,13.7-30.7,30.7-30.7c16.9,0,30.6,13.7,30.6,30.7v183.8h183.8c16.9,0,30.6,13.7,30.6,30.6C990,761.9,976.3,775.6,959.4,775.6 M806.2,281.2c0-124.2-75.9-210-210-210h-315c-134.1,0-210,80.8-210,210v315c0,124.2,82.5,210,210,210h111.5v61.2H255c-135.3,0-245-109.7-245-245V255C10,119.7,119.7,10,255,10h367.5c135.3,0,245,109.7,245,245v137.8h-61.3L806.2,281.2L806.2,281.2z"></path>
                                    </g>
                                </svg>
                            </a>
                        </th>
                    </tr>
                    <tr>
                        <th>Nome</th>
                        <th>Nascimento</th>
                        <th>Nivel</th>
                        <th>Email</th>
                        <th>Administrador</th>
                        <th>Ativo</th>
                        <th>Extra</th>
                    </tr>
                </thead>
                <?php
                foreach ($devs as $dev) {
                ?>
                    <tr>
                        <td><?= $dev->nome ?></td>
                        <td><?= $dev->nasc ?></td>
                        <td><?= $dev->nivel ?></td>
                        <td><?= $dev->email ?></td>
                        <td><?= ($dev->admin ? 'sim' : 'não') ?></td>
                        <td><?= ($dev->ativo ? 'sim' : 'não') ?></td>
                        <td>
                            <a <?= 'href="dev/update/index.php?id=' . $dev->id . '"' ?> title="Editar">
                                <svg viewBox="1.008 -0.05 237.675 240.964" height="1.75em">
                                    <g transform="matrix(1, 0, 0, 1, -8.492846, -27.365912)">
                                        <g transform="matrix(0, -0.280451, 0.263251, 0, 6.867989, 271.083679)" style="">
                                            <path d="M 806.2 281.2 C 806.2 157 730.3 71.2 596.2 71.2 L 281.2 71.2 C 147.1 71.2 71.2 152 71.2 281.2 L 71.2 596.2 C 71.2 720.4 153.7 806.2 281.2 806.2 L 392.7 806.2 L 392.7 867.4 L 255 867.4 C 119.7 867.4 10 757.7 10 622.4 L 10 255 C 10 119.7 119.7 10 255 10 L 622.5 10 C 757.8 10 867.5 119.7 867.5 255 L 867.5 392.8 L 806.2 392.8 L 806.2 281.2 Z"></path>
                                        </g>
                                        <g transform="matrix(0.306312, 0, 0, 0.306312, 85.16684, 26.920868)" style="">
                                            <path d="M328.883,89.125l107.59,107.589l-272.34,272.34L56.604,361.465L328.883,89.125z M518.113,63.177l-47.981-47.981   c-18.543-18.543-48.653-18.543-67.259,0l-45.961,45.961l107.59,107.59l53.611-53.611   C532.495,100.753,532.495,77.559,518.113,63.177z M0.3,512.69c-1.958,8.812,5.998,16.708,14.811,14.565l119.891-29.069   L27.473,390.597L0.3,512.69z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <a <?= 'href="dev/read/index.php?id=' . $dev->id . '"' ?> title="Detalhes">
                                <svg viewBox="-0.88 -0.517 227.169 240.487" height="1.75em">
                                    <g>
                                        <g transform="matrix(0, -0.280451, 0.263251, 0, -3.512168, 242.774078)" style="">
                                            <path d="M 806.2 281.2 C 806.2 157 730.3 71.2 596.2 71.2 L 281.2 71.2 C 147.1 71.2 71.2 152 71.2 281.2 L 71.2 596.2 C 71.2 720.4 153.7 806.2 281.2 806.2 L 392.7 806.2 L 392.7 867.4 L 255 867.4 C 119.7 867.4 10 757.7 10 622.4 L 10 255 C 10 119.7 119.7 10 255 10 L 622.5 10 C 757.8 10 867.5 119.7 867.5 255 L 867.5 392.8 L 806.2 392.8 L 806.2 281.2 Z"></path>
                                        </g>
                                        <g transform="matrix(-1.261696, 0, 0, 1.261696, 226.289597, 12.593093)" style="">
                                            <path d="M49.988,0h0.016v0.007C63.803,0.011,76.298,5.608,85.34,14.652c9.027,9.031,14.619,21.515,14.628,35.303h0.007v0.033v0.04 h-0.007c-0.005,5.557-0.917,10.905-2.594,15.892c-0.281,0.837-0.575,1.641-0.877,2.409v0.007c-1.446,3.66-3.315,7.12-5.547,10.307 l29.082,26.139l0.018,0.016l0.157,0.146l0.011,0.011c1.642,1.563,2.536,3.656,2.649,5.78c0.11,2.1-0.543,4.248-1.979,5.971 l-0.011,0.016l-0.175,0.203l-0.035,0.035l-0.146,0.16l-0.016,0.021c-1.565,1.642-3.654,2.534-5.78,2.646 c-2.097,0.111-4.247-0.54-5.971-1.978l-0.015-0.011l-0.204-0.175l-0.029-0.024L78.761,90.865c-0.88,0.62-1.778,1.209-2.687,1.765 c-1.233,0.755-2.51,1.466-3.813,2.115c-6.699,3.342-14.269,5.222-22.272,5.222v0.007h-0.016v-0.007 c-13.799-0.004-26.296-5.601-35.338-14.645C5.605,76.291,0.016,63.805,0.007,50.021H0v-0.033v-0.016h0.007 c0.004-13.799,5.601-26.296,14.645-35.338C23.683,5.608,36.167,0.016,49.955,0.007V0H49.988L49.988,0z M50.004,11.21v0.007h-0.016 h-0.033V11.21c-10.686,0.007-20.372,4.35-27.384,11.359C15.56,29.578,11.213,39.274,11.21,49.973h0.007v0.016v0.033H11.21 c0.007,10.686,4.347,20.367,11.359,27.381c7.009,7.012,16.705,11.359,27.403,11.361v-0.007h0.016h0.033v0.007 c10.686-0.007,20.368-4.348,27.382-11.359c7.011-7.009,11.358-16.702,11.36-27.4h-0.006v-0.016v-0.033h0.006 c-0.006-10.686-4.35-20.372-11.358-27.384C70.396,15.56,60.703,11.213,50.004,11.21L50.004,11.21z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <a <?= 'href="dev/delete/index.php?id=' . $dev->id . '"' ?> title="Excluir">
                                <svg viewBox="1.008 -1.752 233.771 240.778" height="1.75em">
                                    <g transform="matrix(0, -0.280451, 0.263251, 0, -1.624857, 241.830463)" style="">
                                        <path d="M 818.149 887.596 L 690.559 746.653 L 566.373 874.243 C 554.954 885.974 536.12 885.048 524.388 872.089 C 512.656 859.13 512.333 839.037 523.82 827.237 L 648.005 699.646 L 520.484 558.78 C 508.752 545.82 508.498 525.804 519.918 514.072 C 531.336 502.34 550.103 503.336 561.835 516.295 L 689.425 657.238 L 813.611 529.647 C 825.03 517.915 843.864 518.841 855.665 531.877 C 867.397 544.836 867.651 564.852 856.165 576.653 L 731.979 704.245 L 859.569 845.188 C 871.301 858.147 871.555 878.163 860.136 889.895 C 848.648 901.551 829.881 900.555 818.149 887.596" data-bx-origin="0.155 0.29"></path>
                                        <path d="M 806.2 281.2 C 806.2 157 730.3000000000001 71.19999999999999 596.2 71.19999999999999 L 281.20000000000005 71.19999999999999 C 147.10000000000005 71.19999999999999 71.20000000000005 152 71.20000000000005 281.2 L 71.20000000000005 596.2 C 71.20000000000005 720.4000000000001 153.70000000000005 806.2 281.20000000000005 806.2 L 392.70000000000005 806.2 L 392.70000000000005 867.4000000000001 L 255 867.4000000000001 C 119.69999999999999 867.4000000000001 10 757.7 10 622.4000000000001 L 10 255 C 10 119.7 119.7 10 255 10 L 622.5 10 C 757.8 10 867.5 119.7 867.5 255 L 867.5 392.8 L 806.2 392.8 L 806.2 281.2 Z"></path>
                                    </g>
                                </svg>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </main>
</body>
<?php include_once '../../footer.php' ?>

</html>

<?php
if (isset($_GET['err'])) {
    switch ($_GET['err']) {
        case 1:
            break;
        case 2:
            echo '<script>alert("ID inválido!");</script>';
            break;
    }
}

?>