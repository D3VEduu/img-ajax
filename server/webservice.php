<?php
header("Access-Control-Allow-Origin: *");

$conection = mysqli_connect('localhost', 'root', '', 'imgajax');
mysqli_set_charset($conection, 'utf8');

extract($_POST);
// $requisicao = $_GET['requisicao'];
// $nomeimg = $_GET['nomeimg'];
// $tipoimg = $_GET['tipoimg'];

if ($requisicao == "cadastrar") {
        $sql = "INSERT INTO imagens VALUES(0, '$nomeimg', '$tipoimg')";
        if (mysqli_query($conection, $sql)) {
                echo "Cadastro realizado com sucesso!!";
        } else {
                echo "Erro";
        }
} else if ($requisicao == "listar") {
        $select = "SELECT * FROM imagens";
        $consulta = mysqli_query($conection, $select);
        $retorno = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
        echo $json;
}
