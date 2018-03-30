const express = require('express')
const app = express()
const port = 3000
 
app.get('/', (req, res) => {
  res.send()
})

app.listen(port, () => {
  console.log(`Servidor rodando em http://localhost:${port}`)
  console.log('Para derrubar o servidor: ctrl + c');
})