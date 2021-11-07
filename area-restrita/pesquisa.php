<?php include_once("valida-sentinela.php") ?>
<!DOCTYPE html>
<html lang="pt-br">
<?php
include_once("include/head.php");
include_once("../area-adm/include/head.php");
?>

<head>
    <link rel="stylesheet" href="../css/style6.css">
    <title>Facilita+ - Pesquisa</title>
</head>
<?php include_once("include/header.php") ?>

<body>
    <aside style="background-color:#f5f5f5;">
        <!-- Filtro -->
        <div>

            <form action="" method="">
                <label class="ls-label col-md-8 col-sm-8">
                    <h1>Filtros:</h1>
                </label>

                <label class="ls-label col-md-8 col-sm-8">
                    <b class="ls-label-text" style="color:#152b6f;">Estado</b>
                    <div class="ls-custom-select">
                        <select name="filtroEstado" class="ls-select">
                            <option>SP</option>
                            <option>RJ</option>
                            <option>BH</option>
                        </select>
                    </div>
                </label>

                <label class="ls-label col-md-8 col-sm-8">
                    <b class="ls-label-text" style="color:#152b6f;">Profissão</b>
                    <div class="ls-custom-select">
                        <select name="filtroProfissão" class="ls-select">
                            <option>Sla</option>
                            <option>Sla</option>
                            <option>Sla</option>
                        </select>
                    </div>
                </label>

                <label class="ls-label col-md-8 col-sm-8">
                    <b class="ls-label-text" style="color:#152b6f;">Habilidades</b>
                    <div class="ls-custom-select">
                        <select name="filtroHabilidade" class="ls-select">
                            <option>Encanador</option>
                            <option>Eletricista</option>
                            <option>Manicure</option>
                        </select>
                    </div>
                </label>

                <label class="ls-label col-md-8 col-sm-8">
                    <b class="ls-label-text" style="color:#152b6f;">Avaliação</b>
                    <div class="ls-custom-select">
                        <select name="filtroAvaliação" class="ls-select">
                            <option>1 Estrela</option>
                            <option>2 Estrelas</option>
                            <option>3 Estrelas</option>
                            <option>4 Estrelas</option>
                            <option>5 Estrelas</option>
                        </select>
                    </div>
                </label>
            </form>
            <button class="botao-pesquisa">Pesquisar</button>
            <div class="ls-sidebar-inner">
                <nav class="ls-menu"></nav>
            </div>
        </div>
    </aside>

    <div id="conteiner-a">
        <h1 clas="teste">Resultados da Pesquisa:</h1>
        <main class="main">
            <?php
            $pesquisa = new Usuario();

            //Pesquisar pelo profissional,contratante ou publicação
            $pesquisa->setPesquisa('%'.$_GET['txPesquisa'].'%');
            $listarPesquisa = $pesquisa->pesquisar($pesquisa);
            
            if (isset($_GET['txPesquisa']) && !empty($_GET['txPesquisa'])) {
                $_GET['txPesquisa'] ='';
            }

            if (isset($listarPesquisa) && !empty($listarPesquisa)) {
                foreach ($listarPesquisa as $linha) {
                    if ($linha['idContratante']) {
                        $nome = $linha['nomeContratante'];
                        $foto = $linha['fotoC'];
                    }
                    if ($linha['idProfissional']) {
                        $nome = $linha['nomeProfissional'];
                        $foto = $linha['fotoP'];
                    }
            ?>
                    <div class="user">
                        <div class="infoUser">
                            <figure class="imgUser">
                                <img src="<?php echo $foto ?>" style="height: 40px; width: 40px; border-radius: 20px;" alt="img-avatar">
                            </figure>

                            <strong>
                                <?php echo $nome ?>:
                            </strong>
                            <br>
                            <button class="botoes"> <a href="salaChat.php"> <img src="../assets/chat.svg" alt="Adicione uma IMG"></button>
                        </div>
                    </div>
                <?php }
            } else { ?>
                <div align="center">
                    <span><i>Nenhum resultado encontrado.</i></span>
                </div>
            <?php } ?>
            <?php include_once('include/footer.php') ?>
        </main>
    </div>
</body>

</html>