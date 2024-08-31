const alunos = [{nome: 'Afonso', idade: 30},
{nome:'Val', idade: 50},
{nome: 'Fernanda', idade: 16}]

var pode =''
var naoPode = ''

function exibir(){
    alunos.forEach(a=>{
        if(a.idade>=18){
            this.pode += a.nome + '<br/>'

            document.getElementById('boxUm').innerHTML = pode
        }
        else{
            this.naoPode += a.nome + '<br/>'
            document.getElementById('boxDois').innerHTML = naoPode
        }
    }
)}


function adicionar(){
    a = document.getElementById('valorUm').value
    b = parseFloat(document.getElementById('number').value)

    this.pode =''
    this.naoPode =''

    alunos.push({nome: a, idade:b})

    exibir()
}

function mostrarNumero(){
    const mula = document.getElementById('number');
    for (let i= 1; i<=60; i++){
        const option = document.createElement('option')
        option.value = i;
        option.textContent = i;
        mula.appendChild(option)
    }
}

exibir()
mostrarNumero()
