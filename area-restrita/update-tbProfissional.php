<?php
    include_once("valida-sentinela.php");
    if (!empty($_POST['txNome']) || !empty($_POST['txTelefone']) || !empty($_POST['txDtNascimento'])
        || !empty($_POST['txRg']) || !empty($_POST['txCpf']) || !empty($_POST['txCep'])
        || !empty($_POST['txSenha']) || !empty($_POST['txBiografia']) || !empty($_FILES['imagem'])
        || !empty($_POST['txComplemento']) && !empty($_POST['txConfirmarSenha'])) {
        
        function limpar_texto($str){ 
            return preg_replace("/[^0-9]/", "", $str); 
        }
        
        !empty($_POST['txNome']) ? $nome = $_POST['txNome'] : $nome = $_SESSION['nome'];
        !empty($_POST['txTelefone']) ? $telefone = $_POST['txTelefone'] : $telefone = $_SESSION['telefone'];
        !empty($_POST['txRg']) ? $rg = $_POST['txRg'] : $rg = $_SESSION['rg'];
        !empty($_POST['txCpf']) ? $cpf = $_POST['txCpf'] : $cpf = $_SESSION['cpf'];
        !empty($_POST['txCep']) ? $cep = $_POST['txCep'] : $cep = $_SESSION['cep'];
        !empty($_POST['txLogradouro']) ? $logradouro = $_POST['txLogradouro'] : $logradouro = $_SESSION['logradouro'];
        !empty($_POST['txBairro']) ? $bairro = $_POST['txBairro'] : $bairro = $_SESSION['bairro'];
        !empty($_POST['txCidade']) ? $cidade = $_POST['txCidade'] : $cidade = $_SESSION['cidade'];
        !empty($_POST['txUf']) ? $uf = $_POST['txUf'] : $uf = $_SESSION['uf'];
        !empty($_POST['txComplemento']) ? $complemento = $_POST['txComplemento'] : $complemento = $_SESSION['endComplemento'];
        !empty($_POST['txBiografia']) ? $biografia = $_POST['txBiografia'] : $biografia = $_SESSION['biografia'];

        if (limpar_texto($_POST['txDtNascimento']) == limpar_texto($_SESSION['dataNascimento'])) {
            $dtNasci = $_SESSION['dataNascimento'];
            echo 'Daora';
        }else {
            $dtNasci = $_POST['txDtNascimento'];
            echo 'Sla';
        }
        $_SESSION['dataNascimento'] = $dtNasci;

        echo limpar_texto($_POST['txDtNascimento']).'<br>';
        echo limpar_texto($_SESSION['dataNascimento']). '<br>';
        echo $dtNasci. '<br><br>';
        echo $_POST['txNome']. '<br>';
        echo $_SESSION['nome'].'<br>';
        echo $nome.'<br>';

        if (isset($_FILES['imagem'])) {
            header('Location: ../area-restrita/perfil.php');
            $profissional->nomeimagem = $_FILES['imagem']['name'];
            $arquivo = $_FILES['imagem']['tmp_name'];
            $profissional->caminhoimagem = "../img/perfil/";

            move_uploaded_file(
                $arquivo,
                $profissional->caminhoimagem . $profissional->nomeimagem
            );

            $profissional->caminhoimagem = $profissional->caminhoimagem . $profissional->nomeimagem;
        } else {
            header('Location: ../area-restrita/minha-conta.php');
            $profissional->caminhoimagem = $_SESSION['fotoPerfil'];
        }
        $profissional->setNome($nome);
        $profissional->setRg(limpar_texto($rg));
        $profissional->setCpf(limpar_texto($cpf));
        $profissional->setCep(limpar_texto($cep));
        $profissional->setLogradouro($logradouro);
        $profissional->setBairro($bairro);
        $profissional->setCidade($cidade);
        $profissional->setUf($uf);
        $profissional->setComplementoEndereco($complemento);
        $profissional->setDataNascimento($dtNasci);
        $profissional->setBiografia($biografia);
        $profissional->setIdProfissional($_SESSION['idTipoCadastro']);
        $profissional->atualizarDados($profissional);
    } else {
        header('Location: ../area-restrita/minha-conta.php');
    }
?>