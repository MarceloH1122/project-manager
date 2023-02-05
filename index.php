<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Entrar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="_css/index.css">
</head>
<?php include_once 'header.php' ?>

<body>
    <main>
        <div class="alocs">
            <h2>Alocações</h2>
            <a href="aloc/list/">
                <svg viewBox="1.072 1.838 274.87 258.012" height="1.75em">
                    <path d="M 181.351 80.976 L 61.093 80.976 C 56.353 80.976 52.511 77.37 52.511 72.921 C 52.511 68.472 56.353 64.865 61.093 64.865 L 181.379 64.865 C 186.118 64.865 189.96 68.472 189.96 72.921 C 189.932 77.37 186.09 80.976 181.351 80.976"></path>
                    <path d="M 183.361 120.054 L 63.103 120.054 C 58.363 120.054 54.521 116.448 54.521 111.999 C 54.521 107.55 58.363 103.943 63.103 103.943 L 183.389 103.943 C 188.128 103.943 191.97 107.55 191.97 111.999 C 191.942 116.448 188.1 120.054 183.361 120.054"></path>
                    <path d="M 181.351 157.66 L 61.093 157.66 C 56.353 157.66 52.511 154.054 52.511 149.605 C 52.511 145.156 56.353 141.549 61.093 141.549 L 181.379 141.549 C 186.118 141.549 189.96 145.156 189.96 149.605 C 189.932 154.054 186.09 157.66 181.351 157.66"></path>
                    <g transform="matrix(0, -0.280451, 0.263251, 0, -2.632516, 243.291263)">
                        <path d="M 612.933 75.199 C 612.933 75.199 300.281 75.743 292.106 76.612 C 189.816 88.335 120.897 172.155 120.137 296.835 C 120.133 297.563 120.131 298.294 120.131 299.026 L 120.131 634.607 C 120.131 777.469 195.975 858.328 317.251 858.328 C 317.251 858.328 629.992 857.778 638.207 856.9 C 740.431 845.121 809.295 761.311 810.047 636.672 C 810.051 635.95 810.053 635.226 810.053 634.501 L 810.053 298.919 C 810.053 156.058 734.209 75.199 612.933 75.199 Z M 292.658 923.526 C 165.656 923.526 62.684 806.659 62.684 662.519 L 62.684 271.007 C 62.684 126.867 165.656 10 292.658 10 L 637.526 10 C 764.528 10 867.5 126.867 867.5 271.008 L 867.5 662.519 C 867.5 806.659 764.528 923.526 637.526 923.526 L 292.658 923.526 Z"></path>
                    </g>
                </svg>
                Listar Alocações</a>
            <br>
            <a href="aloc/create/dev-s.php">
                <svg viewBox="1.072 1.838 274.87 258.012" height="1.75em">
                    <g transform="matrix(0.280451, 0, 0, 0.263251, -1.732874, -0.794519)">
                        <path d="M959.4,775.6H775.6v183.8c0,16.9-13.7,30.7-30.6,30.7c-16.9,0-30.7-13.7-30.7-30.7V775.6H530.6c-16.9,0-30.6-13.7-30.6-30.6c0-16.9,13.7-30.6,30.6-30.6h183.8V530.6c0-16.9,13.7-30.7,30.7-30.7c16.9,0,30.6,13.7,30.6,30.7v183.8h183.8c16.9,0,30.6,13.7,30.6,30.6C990,761.9,976.3,775.6,959.4,775.6 M806.2,281.2c0-124.2-75.9-210-210-210h-315c-134.1,0-210,80.8-210,210v315c0,124.2,82.5,210,210,210h111.5v61.2H255c-135.3,0-245-109.7-245-245V255C10,119.7,119.7,10,255,10h367.5c135.3,0,245,109.7,245,245v137.8h-61.3L806.2,281.2L806.2,281.2z"></path>
                    </g>
                </svg>
                Adicionar Alocação</a>
        </div>
        <div class="devs">
            <h2>Desenvolvedores</h2>
            <a href="dev/list/">
                <svg viewBox="1.072 1.838 274.87 258.012" height="1.75em">
                    <path d="M 181.351 80.976 L 61.093 80.976 C 56.353 80.976 52.511 77.37 52.511 72.921 C 52.511 68.472 56.353 64.865 61.093 64.865 L 181.379 64.865 C 186.118 64.865 189.96 68.472 189.96 72.921 C 189.932 77.37 186.09 80.976 181.351 80.976"></path>
                    <path d="M 183.361 120.054 L 63.103 120.054 C 58.363 120.054 54.521 116.448 54.521 111.999 C 54.521 107.55 58.363 103.943 63.103 103.943 L 183.389 103.943 C 188.128 103.943 191.97 107.55 191.97 111.999 C 191.942 116.448 188.1 120.054 183.361 120.054"></path>
                    <path d="M 181.351 157.66 L 61.093 157.66 C 56.353 157.66 52.511 154.054 52.511 149.605 C 52.511 145.156 56.353 141.549 61.093 141.549 L 181.379 141.549 C 186.118 141.549 189.96 145.156 189.96 149.605 C 189.932 154.054 186.09 157.66 181.351 157.66"></path>
                    <g transform="matrix(0, -0.280451, 0.263251, 0, -2.632516, 243.291263)">
                        <path d="M 612.933 75.199 C 612.933 75.199 300.281 75.743 292.106 76.612 C 189.816 88.335 120.897 172.155 120.137 296.835 C 120.133 297.563 120.131 298.294 120.131 299.026 L 120.131 634.607 C 120.131 777.469 195.975 858.328 317.251 858.328 C 317.251 858.328 629.992 857.778 638.207 856.9 C 740.431 845.121 809.295 761.311 810.047 636.672 C 810.051 635.95 810.053 635.226 810.053 634.501 L 810.053 298.919 C 810.053 156.058 734.209 75.199 612.933 75.199 Z M 292.658 923.526 C 165.656 923.526 62.684 806.659 62.684 662.519 L 62.684 271.007 C 62.684 126.867 165.656 10 292.658 10 L 637.526 10 C 764.528 10 867.5 126.867 867.5 271.008 L 867.5 662.519 C 867.5 806.659 764.528 923.526 637.526 923.526 L 292.658 923.526 Z"></path>
                    </g>
                </svg>
                Listar Desenvolvedores</a>
            <br>
            <a href="dev/create/">
                <svg viewBox="1.072 1.838 274.87 258.012" height="1.75em">
                    <g transform="matrix(0.280451, 0, 0, 0.263251, -1.732874, -0.794519)">
                        <path d="M959.4,775.6H775.6v183.8c0,16.9-13.7,30.7-30.6,30.7c-16.9,0-30.7-13.7-30.7-30.7V775.6H530.6c-16.9,0-30.6-13.7-30.6-30.6c0-16.9,13.7-30.6,30.6-30.6h183.8V530.6c0-16.9,13.7-30.7,30.7-30.7c16.9,0,30.6,13.7,30.6,30.7v183.8h183.8c16.9,0,30.6,13.7,30.6,30.6C990,761.9,976.3,775.6,959.4,775.6 M806.2,281.2c0-124.2-75.9-210-210-210h-315c-134.1,0-210,80.8-210,210v315c0,124.2,82.5,210,210,210h111.5v61.2H255c-135.3,0-245-109.7-245-245V255C10,119.7,119.7,10,255,10h367.5c135.3,0,245,109.7,245,245v137.8h-61.3L806.2,281.2L806.2,281.2z"></path>
                    </g>
                </svg>
                Adicionar Desenvolvedor</a>
        </div>
        <div class="projs">
            <h2>Projetos</h2>
            <a href="proj/list/">
                <svg viewBox="1.072 1.838 274.87 258.012" height="1.75em">
                    <path d="M 181.351 80.976 L 61.093 80.976 C 56.353 80.976 52.511 77.37 52.511 72.921 C 52.511 68.472 56.353 64.865 61.093 64.865 L 181.379 64.865 C 186.118 64.865 189.96 68.472 189.96 72.921 C 189.932 77.37 186.09 80.976 181.351 80.976"></path>
                    <path d="M 183.361 120.054 L 63.103 120.054 C 58.363 120.054 54.521 116.448 54.521 111.999 C 54.521 107.55 58.363 103.943 63.103 103.943 L 183.389 103.943 C 188.128 103.943 191.97 107.55 191.97 111.999 C 191.942 116.448 188.1 120.054 183.361 120.054"></path>
                    <path d="M 181.351 157.66 L 61.093 157.66 C 56.353 157.66 52.511 154.054 52.511 149.605 C 52.511 145.156 56.353 141.549 61.093 141.549 L 181.379 141.549 C 186.118 141.549 189.96 145.156 189.96 149.605 C 189.932 154.054 186.09 157.66 181.351 157.66"></path>
                    <g transform="matrix(0, -0.280451, 0.263251, 0, -2.632516, 243.291263)">
                        <path d="M 612.933 75.199 C 612.933 75.199 300.281 75.743 292.106 76.612 C 189.816 88.335 120.897 172.155 120.137 296.835 C 120.133 297.563 120.131 298.294 120.131 299.026 L 120.131 634.607 C 120.131 777.469 195.975 858.328 317.251 858.328 C 317.251 858.328 629.992 857.778 638.207 856.9 C 740.431 845.121 809.295 761.311 810.047 636.672 C 810.051 635.95 810.053 635.226 810.053 634.501 L 810.053 298.919 C 810.053 156.058 734.209 75.199 612.933 75.199 Z M 292.658 923.526 C 165.656 923.526 62.684 806.659 62.684 662.519 L 62.684 271.007 C 62.684 126.867 165.656 10 292.658 10 L 637.526 10 C 764.528 10 867.5 126.867 867.5 271.008 L 867.5 662.519 C 867.5 806.659 764.528 923.526 637.526 923.526 L 292.658 923.526 Z"></path>
                    </g>
                </svg>
                Listar Projetos</a>
            <br>
            <a href="proj/create/">
                <svg viewBox="1.072 1.838 274.87 258.012" height="1.75em">
                    <g transform="matrix(0.280451, 0, 0, 0.263251, -1.732874, -0.794519)">
                        <path d="M959.4,775.6H775.6v183.8c0,16.9-13.7,30.7-30.6,30.7c-16.9,0-30.7-13.7-30.7-30.7V775.6H530.6c-16.9,0-30.6-13.7-30.6-30.6c0-16.9,13.7-30.6,30.6-30.6h183.8V530.6c0-16.9,13.7-30.7,30.7-30.7c16.9,0,30.6,13.7,30.6,30.7v183.8h183.8c16.9,0,30.6,13.7,30.6,30.6C990,761.9,976.3,775.6,959.4,775.6 M806.2,281.2c0-124.2-75.9-210-210-210h-315c-134.1,0-210,80.8-210,210v315c0,124.2,82.5,210,210,210h111.5v61.2H255c-135.3,0-245-109.7-245-245V255C10,119.7,119.7,10,255,10h367.5c135.3,0,245,109.7,245,245v137.8h-61.3L806.2,281.2L806.2,281.2z"></path>
                    </g>
                </svg>
                Adicionar Projeto</a>
        </div>
        <div class="tasks">
            <h2>Tarefas</h2>
            <a href="task/list/">
                <svg viewBox="1.072 1.838 274.87 258.012" height="1.75em">
                    <path d="M 181.351 80.976 L 61.093 80.976 C 56.353 80.976 52.511 77.37 52.511 72.921 C 52.511 68.472 56.353 64.865 61.093 64.865 L 181.379 64.865 C 186.118 64.865 189.96 68.472 189.96 72.921 C 189.932 77.37 186.09 80.976 181.351 80.976"></path>
                    <path d="M 183.361 120.054 L 63.103 120.054 C 58.363 120.054 54.521 116.448 54.521 111.999 C 54.521 107.55 58.363 103.943 63.103 103.943 L 183.389 103.943 C 188.128 103.943 191.97 107.55 191.97 111.999 C 191.942 116.448 188.1 120.054 183.361 120.054"></path>
                    <path d="M 181.351 157.66 L 61.093 157.66 C 56.353 157.66 52.511 154.054 52.511 149.605 C 52.511 145.156 56.353 141.549 61.093 141.549 L 181.379 141.549 C 186.118 141.549 189.96 145.156 189.96 149.605 C 189.932 154.054 186.09 157.66 181.351 157.66"></path>
                    <g transform="matrix(0, -0.280451, 0.263251, 0, -2.632516, 243.291263)">
                        <path d="M 612.933 75.199 C 612.933 75.199 300.281 75.743 292.106 76.612 C 189.816 88.335 120.897 172.155 120.137 296.835 C 120.133 297.563 120.131 298.294 120.131 299.026 L 120.131 634.607 C 120.131 777.469 195.975 858.328 317.251 858.328 C 317.251 858.328 629.992 857.778 638.207 856.9 C 740.431 845.121 809.295 761.311 810.047 636.672 C 810.051 635.95 810.053 635.226 810.053 634.501 L 810.053 298.919 C 810.053 156.058 734.209 75.199 612.933 75.199 Z M 292.658 923.526 C 165.656 923.526 62.684 806.659 62.684 662.519 L 62.684 271.007 C 62.684 126.867 165.656 10 292.658 10 L 637.526 10 C 764.528 10 867.5 126.867 867.5 271.008 L 867.5 662.519 C 867.5 806.659 764.528 923.526 637.526 923.526 L 292.658 923.526 Z"></path>
                    </g>
                </svg>
                Listar Tarefas</a>
            <br>
            <a href="task/create/index.php">
                <svg viewBox="1.072 1.838 274.87 258.012" height="1.75em">
                    <g transform="matrix(0.280451, 0, 0, 0.263251, -1.732874, -0.794519)">
                        <path d="M959.4,775.6H775.6v183.8c0,16.9-13.7,30.7-30.6,30.7c-16.9,0-30.7-13.7-30.7-30.7V775.6H530.6c-16.9,0-30.6-13.7-30.6-30.6c0-16.9,13.7-30.6,30.6-30.6h183.8V530.6c0-16.9,13.7-30.7,30.7-30.7c16.9,0,30.6,13.7,30.6,30.7v183.8h183.8c16.9,0,30.6,13.7,30.6,30.6C990,761.9,976.3,775.6,959.4,775.6 M806.2,281.2c0-124.2-75.9-210-210-210h-315c-134.1,0-210,80.8-210,210v315c0,124.2,82.5,210,210,210h111.5v61.2H255c-135.3,0-245-109.7-245-245V255C10,119.7,119.7,10,255,10h367.5c135.3,0,245,109.7,245,245v137.8h-61.3L806.2,281.2L806.2,281.2z"></path>
                    </g>
                </svg>
                Adicionar Tarefa</a>
        </div>
    </main>
</body>
<?php include_once 'footer.php' ?>

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