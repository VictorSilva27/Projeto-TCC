<?php include_once("valida-sentinela.php") ?>
<!-- Validação de session -->
<!DOCTYPE html>
<html lang="pt-br">

<?php include_once("include/head.php") ?>

<head>
    <title>Facilita+ - Meu Perfil</title>
</head>

<body>
    <?php include_once("include/header.php") ?>
    <main class="secao-perfil-usuario">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-porta">
                <div class="perfil-usuario-avatar">
                    <img src="<?php echo $_SESSION['fotoPerfil'] ?>" alt="img-avatar">
                    <button type="button" class="boton-avatar">
                        <form method="POST" enctype="multipart/form-data" action="update-tb<?php echo $_SESSION['tipoCadastro'] ?>.php">
                            <label for="SelecaoImagem" class="far fa-image"></label>
                            <input type="file" name="imagem" id="SelecaoImagem" accept="image/*" onchange="getFileData(this)">
                            <input type="submit" id="confirmar" value="Confirmar alteração" hidden>
                        </form>
                    </button>
                </div>
            </div>
        </div>
        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
                <h3 class="titulo">
                    <?php echo $_SESSION['nome'] ?>
                </h3>
                <p class="texto"> <?php echo $_SESSION['biografia'] ?></p>
            </div>
            <div class="perfil-usuario-info">
                <ul class="lista-dados">
                    <li><i class="icono fas fa-map-signs"></i>
                        <?php echo $_SESSION['cidade'] ?>
                    </li>
                </ul>
                <ul class="lista-dados">
                    <li><i class="icono fas fa-phone-alt"></i>
                        <?php echo $_SESSION['telefone'] ?>
                    </li>
                </ul>
            </div>
        </div>
    </main>

    <script>
        function getFileData(myFile) {
            var file = myFile.files[0];
            var filename = file.name;
            document.getElementById("confirmar").click();
        }
    </script>
    <?php include_once("include/footer.php") ?>
</body>

</html>