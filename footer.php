<footer>
    <a <?php
        $pathAux = '';
        $dir = getcwd();
        $paths = explode('\\', $dir);



        if(in_array(end($paths), ['create', 'delete', 'read', 'update', 'list']))
            $pathAux = '../../';
        echo "href=\"$pathAux".'about.php"';
        ?>>
        <h5>&copy; 2022 - Marcelo e Matheus</h5>
    </a>
</footer>