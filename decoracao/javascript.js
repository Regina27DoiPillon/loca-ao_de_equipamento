document.addEventListener('DOMContentLoaded', function () {
    var formulario = document.querySelector('.login');
    var campoEmail = document.getElementById('email-login');
    var campoSenha = document.getElementById('senha-login');
 
    formulario.addEventListener('submit', function (evento) {
        // .trim() remove espaços em branco no início/fim,
        var emailVazio = campoEmail.value.trim() === '';
        var senhaVazia = campoSenha.value.trim() === '';
 
        if (emailVazio || senhaVazia) {
            evento.preventDefault(); // impede o envio do formulário
            alert('Preencha todos os campos antes de continuar.');
        }
    });
});
 