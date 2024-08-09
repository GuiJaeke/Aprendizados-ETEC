function teste(){
    return "oi emily"
}

document.getElementById('nm').innerHTML = teste()

const list = [
    {
        nome: 'emily',
        idade: '17',
    },
    {
        nome: 'guilherme',
        idade: '22',
    }
]
var print = ''
list.forEach((forA)=> {
    print += '<p>nome:'+(forA.nome)+'</p>'
}
)

document.getElementsById("test").innerHTML = print