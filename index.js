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
  const user = conexaoComBanco.define("user", {
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
      references: { model: user, key: 'id' }
    },
    ferramentaId: {
      type: Sequelize.INTEGER,
      references: { model: ferramenta, key: 'id' }
    }
  });
  async function createDB() {
    await user.sync();
    await ferramenta.sync();
    await aluguel.sync();
  }
  async function createData() {
    await createDB()
  }
  createData()
//### FIM CONEXÃO BANCO DE DADOS###

app.use(
  express.urlencoded({
          extended: true
      })
)

//###ROTAS:
app.get("/",function (req, res) {
    console.log('aqui kraio');
    res.render('home');
});

app.get("/teste", async function (req, res) {
  res.send("Hello Teste");
});


app.get("/cad/form",async function (req, res) {
  res.render('form');
});

app.post("/cad/ferr", async function (req, res) {
    const ferr = req.body.fer
    console.log(ferr);
    await ferramenta.create({nome_fer: ferr})
    res.redirect('/home') //renderizando a pagina form.handlebars
});
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