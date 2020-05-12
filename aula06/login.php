<?php

    if(isset($_POST) && $_POST){
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $logado = false;

        $usuariosJson = file_get_contents("./data/usuarios.json");

        $arrayUsuarios = json_decode($usuariosJson, true);

        foreach($arrayUsuarios["usuarios"] as $usuario){
            if($usuario["email"] == $email){
                if(password_verify($senha, $usuario["senha"])){
                    $logado = true;

                    session_start();

                    $_SESSION["logado"] = $logado;
                    $_SESSION["id"] = $usuario["id"];
                    $_SESSION["nome"] = $usuario["nome"];

                    header("Location: usuarios.php");
                }
            }
        }
    }

?>
<?php $tituloPagina = "Formluário de Login"; ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
    <main class="container">
        <article class="row">
            <section class="col-12 mx-auto bg-light my-5 py-5 rounded border" id="cadastroForm">
            <h3 class="col-12 text-center my-3"><?= $tituloPagina ?></h3>
                <form action="login.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" id="btnLogar">Entrar</button>
                    <div class="form-group">
                        <?php
                            if(isset($_POST) && $_POST){
                                if(!$logado){
                                    echo '<div class="mt-2 col-md-6 alert-danger">Usuário ou senha inválidos</div>';
                                }
                            }
                        ?>
                    </div>
                </form>
            </section>
        </article>
    </main>
    <?php require_once("./inc/footer.php"); ?>