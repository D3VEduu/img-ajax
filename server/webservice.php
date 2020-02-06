<?php
header("Access-Control-Allow-Origin: *");

$conection = mysqli_connect('localhost', 'root', '', 'imgajax');
mysqli_set_charset($conection, 'utf8');

extract($_POST);
// $requisicao = $_GET['requisicao'];
// $nomeimg = $_GET['nomeimg'];
// $imgCad = $_GET['imgCad'];

if ($requisicao == "cadastrar") {
        $sql = "INSERT INTO imagens VALUES(0, '$nomeimg', '$tipoimg')";
        if (mysqli_query($conection, $sql)) {
                echo "Cadastro realizado com sucesso!!";
        } else {
                echo "Erro";
        }
} else if ($requisicao == "listar") {
        switch ($imgCad) {
                case 'lav':
                        $select = "SELECT * FROM imagens WHERE tipoimg LIKE 'lav'";
                        $consulta = mysqli_query($conection, $select);
                        $retorno = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
                        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
                        echo $json;
                        break;
                case 'pol':
                        $select = "SELECT * FROM imagens WHERE tipoimg LIKE 'pol'";
                        $consulta = mysqli_query($conection, $select);
                        $retorno = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
                        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
                        echo $json;
                        break;
                case 'cri':
                        $select = "SELECT * FROM imagens WHERE tipoimg LIKE 'cri'";
                        $consulta = mysqli_query($conection, $select);
                        $retorno = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
                        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
                        echo $json;
                        break;
                case 'vit':
                        $select = "SELECT * FROM imagens WHERE tipoimg LIKE 'vit'";
                        $consulta = mysqli_query($conection, $select);
                        $retorno = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
                        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
                        echo $json;
                        break;
                case 'hig':
                        $select = "SELECT * FROM imagens WHERE tipoimg LIKE 'vit'";
                        $consulta = mysqli_query($conection, $select);
                        $retorno = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
                        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
                        echo $json;
                        break;
        }
}
