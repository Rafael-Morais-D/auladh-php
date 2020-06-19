<?php

    require_once("./config/conexao.php");

    session_start();

    if(!isset($_SESSION["logado"])){
        header("Location: login.php");
    }

    if(isset($_GET) && $_GET){
        $id = $_GET["id"];

        $query = $dbh->prepare('select * from usuarios where id = :id');

        $query->execute([
            ":id" => $id
        ]);

        $usuarioEncontrado = $query->fetch(PDO::FETCH_ASSOC);
    }

    if(isset($_POST) && $_POST){
        
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        if($senha != ""){
            $senha = password_hash($senha, PASSWORD_DEFAULT);
        }

        $query = $dbh->prepare('update usuarios set nome = :nome, sobrenome = :sobrenome, email = :email, senha = :senha where id = :id');

        $alterou = $query->execute([
            ":nome" => $nome,
            ":sobrenome" => $sobrenome,
            ":email" => $email,
            ":senha" => $senha,
            ":id" => $id
        ]);
    }
?>

<?php $tituloPagina = "Formulário de Alteração de Cadastro"; ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
    <main class="container">
        <article class="row">
            <section class="col-12 mx-auto bg-light my-5 py-5 rounded border" id="cadastroForm">
            <h3 class="col-12 text-center my-3"><?= $tituloPagina ?></h3>
                <form action="edita-usuario.php" method="post">
                    <input type="hidden" class="form-control" id="id" name="id" 
                    value="<?= isset($_GET["id"]) ? $_GET["id"] : $_POST["id"]  ?>" required>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nome">Nome</label>
                            <!--
                                verifica dentro do value se existe id na URL que ira indicar que esta listando o usuario encontrado
                                caso nao encontre o parametro id na URL quer dizer que o formulario foi enviado atraves do metodo POST
                                e o usuario fez uma alteracao, portanto, iremos listar a informacao obtida atraves do envio do formulario
                                para conseguir exibir o valor que o usuario altera no campo nome apos clicar no botao Editar
                            -->
                            <input type="text" class="form-control" id="nome" name="nome" value="<?= isset($_GET["id"]) ? $usuarioEncontrado["nome"] : $_POST["nome"] ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="sobrenome">Sobrenome</label>
                            <!--
                                verifica dentro do value se existe id na URL que ira indicar que esta listando o usuario encontrado
                                caso nao encontre o parametro id na URL quer dizer que o formulario foi enviado atraves do metodo POST
                                e o usuario fez uma alteracao, portanto, iremos listar a informacao obtida atraves do envio do formulario
                                para conseguir exibir o valor que o usuario altera no campo sobrenome apos clicar no botao Editar
                            -->
                            <input type="text" class="form-control" id="sobrenome" name="sobrenome" value="<?= isset($_GET["id"]) ? $usuarioEncontrado["sobrenome"] : $_POST["sobrenome"] ?>" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">E-mail</label>
                            <!--
                                verifica dentro do value se existe id na URL que ira indicar que esta listando o usuario encontrado
                                caso nao encontre o parametro id na URL quer dizer que o formulario foi enviado atraves do metodo POST
                                e o usuario fez uma alteracao, portanto, iremos listar a informacao obtida atraves do envio do formulario
                                para conseguir exibir o valor que o usuario altera no campo email apos clicar no botao Editar
                            -->
                            <input type="email" class="form-control" id="email" name="email" value="<?= isset($_GET["id"]) ? $usuarioEncontrado["email"] : $_POST["email"] ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="senha">Senha</label>                                             
                            <input type="password" class="form-control" id="senha" name="senha">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" id="btnEditar">Editar</button>
                    <div class="form-group">
                        <?php
                            if(isset($_POST) && $_POST){
                                if($alterou){
                                    echo '<div class=" col-md-6 mt-2 alert alert-success">Usuário alterado com sucesso</div>';
                                } else {
                                    echo '<div class="col-md-6 mt-2 alert alert-danger">Falha ao processar requisição</div>';
                                }
                            }
                        ?>
                    </div>
                </form>
            </section>
        </article>
    </main>
    <?php require_once("./inc/footer.php"); ?>