function validarCadastro() {
    if (validarCep() && validarCnpj() && validarCpf() && validarCpf() && validarSenha() && validarTelefone()) {

        alert("Dados enviados com Sucesso!!");
        return true;
    }
    else {
        alert("Erro ao enviar!!");
        return false;
    }
}