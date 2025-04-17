<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUDAR SENHA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> 
</head>
<body class="bg-secondary">
    <div class="container bg-light p-0" style="width:400px; margin: auto">
        <h2 class="text-center p-3">MUDAR A SENHA</h2>
        <form method="post"
        action="../controller/UsuarioController.php?action=mudarSenha">
            <div class="m-3">
                <input type="hidden" name="meuid" value="1">
                <input required type="password" name="senha" id="senha" class="form-control mb-3"
                placeholder="Digite a nova senha...">
                <input required type="password" name="senha2" id="senha2" class="form-control mb-3"
                placeholder="Repita a nova senha...">
            </div>
            <div class="m-3">
            <a href="agenda.php" id="voltar" class="btn btn-secondary mb-3">Voltar</a>
            <button type="submit" id="alterar" class="btn btn-primary mb-3">
                    Alterar Senha
                </button>
            </div>    
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <?php
        if(isset($_GET['user']) && $_GET['user'] == 'erro') {
                    echo  "<script src='js/erro.js'></script>";
                }
        if(isset($_GET['senha']) && $_GET['senha'] == 'ok') {
                    echo  "<script src='js/senha.js'></script>";
                }
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js">
    </script>    
    <script>
        $('input[type="file"]').change(function(){
        var input = this;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
            $('#imagem').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
        });
    </script>    
</body>
</html>