<?php
require_once '../../rb-mysql.php';
require_once '../../functions.php';

R::setup('mysql:host=127.0.0.1;dbname=GerenciadorProjetos', 'root');

if (
    (!isset($_POST['nome'])  ||
        !isset($_POST['nasc'])  ||
        !isset($_POST['nivel']) ||
        !isset($_POST['email']) ||
        !isset($_POST['senha']) ||
        !isset($_POST['id'])
    )                                        ||
    (My::CheckDate($_POST['nasc']) == false) ||
    (My::CheckDate($_POST['nasc']) > new DateTime('-14 years'))
) {
    header(
        'Location: index.php?err=1.'
            . (isset($_POST['nome']) ? '&nome=' . $_POST['nome'] : '')
            . (isset($_POST['nasc']) ? '&nasc=' . $_POST['nasc'] : '')
            . (isset($_POST['nivel']) ? '&nivel=' . $_POST['nivel'] : '')
            . (isset($_POST['email']) ? '&email=' . $_POST['email'] : '')
            . (isset($_POST['admin']) ? '&admiZn=' . $_POST['admin'] : '')
            . (isset($_POST['ativo']) ? '&ativo=' . $_POST['ativo'] : '')
    );
    die;
}

$nome = preg_replace("/[^\p{L}\s]/u", "", $_POST['nome']);
$nasc = $_POST['nasc'];
$nivel = $_POST['nivel'];
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = preg_replace("/[^\p{L}]/u", "", $_POST['senha']);
$ativo = (isset($_POST['ativo']) && $_POST['ativo'] == 'on' ? 1 : 0);
$admin = (isset($_POST['admin']) && $_POST['admin'] == 'on' ? 1 : 0);



$dev = R::load('desenvolvedor', $_POST['id']);

$dev->nome  = $nome;
$dev->nasc  = $nasc;
$dev->nivel = $nivel;
$dev->credencial->email = $email;
$dev->credencial->senha = $senha;
$dev->credencial->ativo = $ativo;
$dev->credencial->admin = $admin;

R::store($dev);


header('Location: ../list/');
R::close();
