<!DOCTYPE html>
<html lang='pt-br'>

<head>
    <title></title>

    <!-- POR ORDEM DE LINHAS: CSS - BOOTSTRAP - ICONES - JQUERY - POPPER - BOOSTRAP.JS -->
    <link rel='stylesheet' href='style.css'>
    <link rel='stylesheet' href='src/css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' href='src/css/fontawesome-all.css'>
    <script src='src/jquery.js'></script>
    <script src='src/popper.js'></script>
    <script src='src/bootstrap.js'></script>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <script>
        $(document).ready(function() {
            $("#saveImg").click(function() {
                let nomeimg, tipoimg, requisicao;
                requisicao = "cadastrar";
                nomeimg = $("#img").val();
                tipoimg = $("#tipoimg").val();

                $.ajax({
                    url: 'http://localhost/img-ajax/server/webservice.php',
                    method: 'POST',
                    data: {
                        'nomeimg': nomeimg,
                        'tipoimg': tipoimg,
                        'requisicao': requisicao
                    },
                    success: function(retorno) {
                        alert('Cadastro realizado com sucesso!');
                    },
                    timeout: 3000,
                    error: function() {
                        alert('Erro');
                    }
                });

            });

            $("#dataImg").click(function() {
                let requisicao = "listar";
                $.ajax({
                    url: 'http://localhost/img-ajax/server/webservice.php',
                    method: 'GET',
                    data: {
                        'requisicao': 'requisicao'
                    },
                    success: function(retorno) {
                        // let json = $.parseJSON(retorno);
                        // alert("Os dados  retornados foram: " + json.nomeimg);

                    },
                    timeout: 3000,
                    error: function() {
                        alert('Erro!');
                    }
                });
            });
        });
    </script>
</head>

<body>
    <form action="" enctype="multipart/form-data">
        <label for="img">Imagem</label>
        <input type="text" name="img" id="img"> <br>

        <select name="tipoimg" id="tipoimg">
            <option value="lav">Lavagens</option>
            <option value="pol">Polimento</option>
            <option value="cri">Cristalização</option>
            <option value="vit">Vitrificação</option>
            <option value="hig">Higienização</option>
        </select>
        <br> <br>
        <button id="saveImg">Cadastrar</button>
    </form>
    <br><br>
    <div id="retorno">
        <h3>Dados retornados</h3>
        <p id="dados">

        </p>
        <button id="dataImg">Clique</button>
    </div>
</body>

</html>