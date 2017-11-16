<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.scss" rel="stylesheet"> 
        <title>Adicionar</title>
    </head>
    <body>
        <div class="container">
            <h3>Adicionar Produto</h3>
            <form method="post" action="controller/PessoaController.php">
                <input type="hidden" name="method" value="insere">
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="nome">
                </div>
                <!--
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" class="form-control" name="email">
                </div>
                -->
                <br>
                <button type="submit" class="btn btn-primary">Adicionar</button>
            </form>
        </div>
    </body>
</html>