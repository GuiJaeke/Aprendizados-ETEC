//import librarys
const Sequelize = require("sequelize");//sequelize
const express = require("express");//express
//Clonando a variável com poderes das bibliotecas 
const app = express(); //Express
const { engine } = require("express-handlebars");


//###CONEXÃO BANCO DE DADOS###
const conexaoComBanco = new Sequelize("deposito", "root", "", {
  host: "localhost",
  dialect: "mysql",
});


const ferramenta = conexaoComBanco.define("ferramenta", {
  nome_fer: {
    type: Sequelize.STRING,//VARCHAR
    allowNull: false
  }
});
const User = conexaoComBanco.define("User", {
  nome_user: {
    type: Sequelize.STRING,
    allowNull: false
  },
  password: {
    type: Sequelize.STRING,
    allowNull: false
  }
});
const aluguel = conexaoComBanco.define("aluguel", {
  userId: {
    type: Sequelize.INTEGER,
    references: { model: User, key: 'id' }
  },
  ferramentaId: {
    type: Sequelize.INTEGER,
    references: { model: ferramenta, key: 'id' }
  }
});
async function createDB(a) {
  await User.sync(a);
  await ferramenta.sync(a);
  await aluguel.sync(a);
}
async function createData() {
  await createDB({force: false})
}
createData()
//### FIM CONEXÃO BANCO DE DADOS###

app.use(
  express.urlencoded({
    extended: true
  })
)

//###ROTAS:
app.get('/', function(req, res) {
  res.redirect('/login')
})

app.get("/home/:id", async function (req, res) {
  const ferramentas = await ferramenta.findAll({raw: true})
  res.render('home', {ferramentas: ferramentas});
});

app.post("/alug", async function (req, res) {
  const fer = req.body.fer
})


app.get("/cad/form", async function (req, res) {
  res.render('form');
});

app.post("/cad/ferr", async function (req, res) {
  const ferr = req.body.fer
  const quantidade = req.body.quantidade
  for(let i = 0; i < quantidade; i++) {
    await ferramenta.create({ nome_fer: ferr })
  }
  res.redirect('/home') //renderizando a pagina form.handlebars
});

app.get('/sign', async function sign(req, res) {
  let login = true
  res.render('sign', {login})
})
app.post('/sign', async function signPost(req, res) {
  const password  = req.body.password
  const nome = req.body.nome_user
  await User.create({nome, password})
  res.redirect('/login')

})

app.get('/login', async function login(req, res) {
  let login = true
  res.render('login', {login})
  
})
app.post('/login', async function loginPost(req, res) {
  const {userLogin, password} = req.body
  console.log(userLogin);
  

  const usuario = await User.findOne({where: { nome_user: userLogin }, raw: true})

  console.log(usuario);
  if (!usuario) {  
    return res.redirect('/login')
  }
  if (usuario.password == password) {
    console.log('here1');
    return res.redirect(`/home/${usuario.id}`)
  } else {
    console.log('here2');
    
    return res.redirect('/login')
  }

})

//###FIM ROTAS

app.use(express.static('public'))

//Template Engine
app.engine("handlebars", engine()); //definindo o motor e o recheio 
app.set("view engine", "handlebars"); //definindo o tipo e o tipo 

//"LIGANDO O SERVIDOR"
//SEMPRE MANTENHA NO FINAL DO CÒDIGO 
conexaoComBanco.sync()
app.listen(3031, function () {
  console.log("Server is running on port 3031");
});