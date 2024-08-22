const alunos = [{ nome: 'Afonso', aprovado: 'sim' },
{ nome: 'Val', aprovado: 'não' }]

aprov = ''
reprov = ''

function inserirAlunos() {
    alunos.forEach(a => {
        if (a.aprovado === 'sim') {
            aprov += a.nome + '<br/>'
        }
        else if (a.aprovado === 'não') {
            reprov += a.nome + '<br/>'
        }
    })

    document.getElementById('aprovId').innerHTML = aprov
    document.getElementById('reprovId').innerHTML = reprov
}

function listarAluno(){
    a = document.getElementById('nome').value 
    b = document.getElementById('aprov').value

    alunos.push({nome: a, aprovado: b})
    inserirAlunos()
}
inserirAlunos()