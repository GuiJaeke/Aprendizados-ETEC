const alunos = [{ nome: 'Afonso', aprovado: 'sim' },
{ nome: 'Val', aprovado: 'não'}]

var alunosAprovadors = ''


function exibir(){ //função para analisar a array e adicionar a String alunosAprovadors
    alunos.forEach(mula =>{ // para cada objeto dentro da array, irá se chamar 'mula' assim podendo fazer uma analise individual a cada objeto
        
        if (mula.aprovado === 'sim'){ //Se 'sim' ele vai exibir o nome
            this.alunosAprovadors += mula.aluno + '<br/>'
        }
    })
    
    document.getElementById('exibirBox').innerHTML = this.alunosAprovadors //comando para exibir a String alunosAprovadors
}
function atualizar(){ //Função para atualizar a lista com novos valores
    a= document.getElementById('valorum').value //escuta o valor de 'a'
    b= document.getElementById('valordois').value // escuta o valor de 'b'

    alunos.push({aluno: a, aprovado: b}) //insere os valores 'a' e 'b' na listal 'alunos'

    this.exibir()//chama a função 'exibir' para reavaliar a lista 'alunos' com os novos valores
}

