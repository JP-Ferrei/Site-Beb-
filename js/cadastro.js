const user = document.getElementById('username');
const senha = document.getElementById('password');
const senha2 = document.getElementById('checkPassword');
const email = document.getElementById('email');
const cpf = document.getElementById('cpf');
const telefone = document.getElementById('telefone');
const botao = document.getElementById('botao');

botao.addEventListener('click', (event)=>{
    event.preventDefault();
    checaSenha();

   
        const pessoa = {
        usuario: user.value,
        senha : senha.value,
        email : email.value,
        cpf : cpf.value,
        telefone: telefone.value,
    }
        console.log(pessoa);
    
   
   
})


const checaSenha = (senha1, senha2) =>{

    if(senha1 != senha2){
        alert('senhas não coincidem ')
        return false;
    }
    return true;

}