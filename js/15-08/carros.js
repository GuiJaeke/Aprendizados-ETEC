var alunos = [{ aluno: 'jaeke', reprovado: true },
{ aluno: 'ana', reprovado: false },
{ aluno: 'gustavo', reprovado: true },
{ aluno: 'maria', reprovado: true },
{ aluno: 'roberto', reprovado: false }]

var listaReprovado = []

var listaAprovado = []

for (var i = 0; i < alunos.length; i = i + 1) {
    console.log(alunos[i].reprovado)
    if (alunos[i].reprovado == true) {
        listaReprovado.push(alunos[i])
    } else {
        listaAprovado.push(alunos[i])
    }
}


var listaul = document.createElement('ul'); // cria uma ul basica no HTML

var div = document.getElementsByClassName('reprov'); // pega o 'div' criado em HTML e insere no JS

div[0].appendChild(listaul) // insere a ul criada na var listaul no 'div' do HTML

var listaNoBody = document.getElementsByTagName('ul') // pega a ul basica criada na var listaul

for (var i = 0; i < listaReprovado.length; i++) {
  var liFor = document.createElement('li'); // cria uma li basica para cada indice da lista

  var textLI = document.createTextNode(listaReprovado[i].aluno); //escreve cada indice da lista e fica armazenado no textLI

  liFor.appendChild(textLI); // pega o que ta escrito no textLI e coloca na li basica criada na primeira variável do 'for'

  listaNoBody[0].appendChild(liFor); // acrescenta o li com o texto pronto na ul basica criada pela variável listaNoBody fora do 'for'

}

var listaul2 = document.createElement('ul'); // cria uma ul basica no HTML

var body2 = document.getElementsByClassName('aprov'); // pega o 'div' criado em HTML e insere no JS

body2[0].appendChild(listaul2) // insere a ul criada na var listaul no 'div' do HTML

var listaNoBody2 = document.getElementsByClassName('visivel') // pega a ul com class 'visivel'

for (var i = 0; i < listaAprovado.length; i++) {
  var liFor = document.createElement('li'); // cria uma li basica para cada indice da lista

  var textLI = document.createTextNode(listaAprovado[i].aluno); //escreve cada indice da lista e fica armazenado no textLI

  liFor.appendChild(textLI); // pega o que ta escrito no textLI e coloca na li basica criada na primeira variável do 'for'

  listaNoBody2[0].appendChild(liFor); // acrescenta o li com o texto pronto na ul basica criada pela variável listaNoBody fora do 'for'

}


