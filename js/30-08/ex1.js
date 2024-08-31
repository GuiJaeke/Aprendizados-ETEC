const alunos = [{ nome: 'Afonso', idade: 30 },
{ nome: 'Val', idade: 50 },
{ nome: 'Fernanda', idade: 16 }]

var pode = ''
var naoPode = ''
var talvez = ''

function exibir() {
    alunos.forEach(a => {
        switch (true) {
            case (a.idade >= 18):
                pode += a.nome + '<br/>'

                document.getElementById('boxUm').innerHTML = pode
                break;

            case (a.idade <=16 && a.idade <18):
                talvez += a.nome + '<br/>'
                document.getElementById('boxTres').innerHTML = talvez
                break;
            
            default:
                naoPode += a.nome + '<br/>'
                document.getElementById('boxDois').innerHTML = naoPode
                break;
        }
    })
}

function adicionar() {
    a = document.getElementById('valorUm').value
    b = parseFloat(document.getElementById('number').value)

    this.pode = ''
    this.naoPode = ''
    this.talvez = ''

    alunos.push({ nome: a, idade: b })

    exibir()
}

function mostrarNumero() {
    const mula = document.getElementById('number');
    for (let i = 1; i <= 60; i++) {
        const option = document.createElement('option')
        option.value = i;
        option.textContent = i;
        mula.appendChild(option)
    }
}

exibir()
mostrarNumero()
