//import librarys
const Sequelize = require("sequelize");//sequelize
const express = require("express");//express
//Clonando a variável com poderes das bibliotecas 
const app = express(); //Express
const { engine } = require("express-handlebars");
const cookieParser = require("cookie-parser");
const moment = require('moment')


//###CONEXÃO BANCO DE DADOS###
const conexaoComBanco = new Sequelize("deposito", "root", "", {
  host: "localhost",
  dialect: "mysql",
});


const User = conexaoComBanco.define("User", {
  nome_user: {
    type: Sequelize.STRING,
    allowNull: false,
  },
  password: {
    type: Sequelize.STRING,
    allowNull: false,
  },
});

const Ferramenta = conexaoComBanco.define("Ferramenta", {
  nome_fer: {
    type: Sequelize.STRING,
    allowNull: false,
  },
});

const Aluguel = conexaoComBanco.define("Aluguel", {
  inUse: {
    type: Sequelize.BOOLEAN,
    allowNull: false,
    defaultValue: false,
  },
});

// Definição das associações
User.hasMany(Aluguel, { foreignKey: "userId" }); // Um usuário pode ter vários registros de aluguel
Aluguel.belongsTo(User, { foreignKey: "userId" }); // Um aluguel pertence a um usuário

Ferramenta.hasMany(Aluguel, { foreignKey: "ferramentaId" }); // Uma ferramenta só pode estar em um aluguel por vez
Aluguel.belongsTo(Ferramenta, { foreignKey: "ferramentaId" }); // Um aluguel pertence a uma ferramenta

async function createDB(a) {
  await Aluguel.sync(a);
  await User.sync(a);
  await Ferramenta.sync(a);
}
async function createData() {
  await createDB({ force: false })
}
createData()
//### FIM CONEXÃO BANCO DE DADOS###

app.use(
  express.urlencoded({
    extended: true
  })
)

app.use(cookieParser())

//###ROTAS:
app.get('/', async function (req, res) {
  const id = req.cookies.meuCookie
  if (id) {
  res.redirect('/home')
  } else {
    return res.redirect('/login')
  }
})

app.get("/home", async function (req, res) {
  const id = req.cookies.meuCookie
  if (id) {
  const usuario = await User.findOne({ where: { id: id }, raw: true })
  const ferramentas = await Ferramenta.findAll({ include: { model: Aluguel, limit: 1, order: [['createdAt', 'DESC']] } })
  console.log(ferramentas[0].dataValues.Aluguels[0].dataValues.inUse);
  for (let i = 0; i < ferramentas.length; i++) {
    if (ferramentas[i].dataValues.Aluguels[0]) {
    const inUse = ferramentas[i].dataValues.Aluguels[0].dataValues.inUse;
    
    ferramentas[i].Aluguels = {inUse: inUse};
  } else {
    ferramentas[i].Aluguels = {inUse: false};

  }
  }
  console.log(ferramentas);
  

  res.render('home', { ferramentas: ferramentas, usuario: usuario });
} else {
  return res.redirect('/login')
}
});

app.get("/user/:id", async function (req, res) {
  const id = req.cookies.meuCookie
  if (id) {
  let zero = false
  const usuario = await User.findOne({ include: { model: Aluguel, include: Ferramenta, order: [['updatedAt', 'DESC']] }, where: { id: id } })
  usuario.Aluguels.map(data => {
    data.dataValues.Ferramentum.dataValues.createdAt = moment(data.createdAt).format('DD/MM/yyyy MM:HH')
    return data
});
  usuario.Aluguels.map(data => {
    data.dataValues.Ferramentum.dataValues.updatedAt = moment(data.updatedAt).format('DD/MM/yyyy MM:HH')
    return data
});
  
  res.render('user', {usuario: usuario, zero})
  } else {
    return res.redirect('/login')
  }
})
app.post("/devolver", async function devolver(req, res) {
  const id = req.cookies.meuCookie
  if (id) {
  const ferramentaId = req.body.ferramentaId

  const update = {
    inUse: false,
    userId: id,
    ferramentaId
  }
  await Aluguel.update(update, {where: {userId: id, ferramentaId: ferramentaId}})
  
  res.redirect(`/user/${id}`)
  } else {
    return res.redirect('/login')
  }
})

app.post("/alug", async function (req, res) {
  const inUse = true
  const userId = req.cookies.meuCookie
  const ferramentaId = req.body.ferId
  await Aluguel.create({ inUse, userId, ferramentaId })
  res.redirect(`/home`)
})


app.get("/cad/form", async function (req, res) {
  const id = req.cookies.meuCookie
  const usuario = await User.findOne({ where: { id: id }, raw: true })
  res.render('form', { usuario: usuario });
});

app.post("/cad/ferr", async function (req, res) {
  const ferr = req.body.fer
  const quantidade = req.body.quantidade
  for (let i = 0; i < quantidade; i++) {
    await Ferramenta.create({ nome_fer: ferr })
  }
  res.redirect(`/home`) //renderizando a pagina form.handlebars
});

app.get('/sign', async function sign(req, res) {
  let login = true
  res.render('sign', { login })
})
app.post('/sign', async function signPost(req, res) {
  const nome = req.body.nome_user
  const password = req.body.password
  await User.create({ nome_user: nome, password })
  res.redirect('/login')

})

app.get('/login', async function login(req, res) {
  let login = true
  res.render('login', { login })

})
app.post('/login', async function loginPost(req, res) {
  const { userLogin, password } = req.body
  console.log(userLogin);


  const usuario = await User.findOne({ where: { nome_user: userLogin }, raw: true })

  console.log(usuario);
  if (!usuario) {
    return res.redirect('/login')
  }
  if (usuario.password == password) {
    res.cookie("meuCookie", usuario.id, {
      maxAge: 1000 * 60 * 60, // 1 hora (em milissegundos)
      httpOnly: true, // O cookie não pode ser acessado via JavaScript do cliente
    });
    console.log('here1');
    res.cookie
    return res.redirect(`/home`)
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