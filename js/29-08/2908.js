const alunos = [{ nome: 'Afonso', aprovado: 'sim' },
{ nome: 'Val', aprovado: 'não'}]

var alunosAprovadors = ''


function exibir(){
    alunos.forEach(mula =>{
        
        if (mula.aprovado === 'sim'){
            this.alunosAprovadors += mula.aluno + '<br/>'
        }
    })
    
    document.getElementById('exibirBox').innerHTML = this.alunosAprovadors
}
function atualizar(){
    a= document.getElementById('valorum').value 
    b= document.getElementById('valordois').value

    alunos.push({aluno: a, aprovado: b})

    this.exibir()
}

