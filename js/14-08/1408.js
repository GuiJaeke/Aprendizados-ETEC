var animais = [{ animal: 'jaeke', ave: true },
{ animal: 'gato', ave: false },
{ animal: 'pássaro', ave: true },
{ animal: 'coruja', ave: true },
{ animal: 'onitorrinco', ave: false }]

var listaAves = []

var listaNaoAves = []

for (var i = 0; i < animais.length; i = i + 1) {
    console.log(animais[i].ave)
    if (animais[i].ave == true) {
        listaAves.push(animais[i])
    } else {
        listaNaoAves.push(animais[i])
    }
}


var listaul = document.createElement('ul'); // cria uma ul basica no HTML

var div = document.getElementsByClassName('ave'); // pega o 'div' criado em HTML e insere no JS

div[0].appendChild(listaul) // insere a ul criada na var listaul no 'div' do HTML

var listaNoBody = document.getElementsByTagName('ul') // pega a ul basica criada na var listaul

for (var i = 0; i < listaAves.length; i++) {
  var liFor = document.createElement('li'); // cria uma li basica para cada indice da lista

  var textLI = document.createTextNode(listaAves[i].animal); //escreve cada indice da lista e fica armazenado no textLI

  liFor.appendChild(textLI); // pega o que ta escrito no textLI e coloca na li basica criada na primeira variável do 'for'

  listaNoBody[0].appendChild(liFor); // acrescenta o li com o texto pronto na ul basica criada pela variável listaNoBody fora do 'for'

}

var listaul2 = document.createElement('ul'); // cria uma ul basica no HTML

var body2 = document.getElementsByClassName('naoave'); // pega o 'div' criado em HTML e insere no JS

body2[0].appendChild(listaul2) // insere a ul criada na var listaul no 'div' do HTML

var listaNoBody2 = document.getElementsByClassName('visivel') // pega a ul com class 'visivel'

for (var i = 0; i < listaNaoAves.length; i++) {
  var liFor = document.createElement('li'); // cria uma li basica para cada indice da lista

  var textLI = document.createTextNode(listaNaoAves[i].animal); //escreve cada indice da lista e fica armazenado no textLI

  liFor.appendChild(textLI); // pega o que ta escrito no textLI e coloca na li basica criada na primeira variável do 'for'

  listaNoBody2[0].appendChild(liFor); // acrescenta o li com o texto pronto na ul basica criada pela variável listaNoBody fora do 'for'

}

console.log(listaAves)
console.log(listaNaoAves)

