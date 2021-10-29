  <form method="post" action="../crud_php/controller/cadastrar.php">
    <div class="form-group">
      <label for="exampleInputEmail1">Nome</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o seu nome" required>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Telefone</label>
      <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite seu telefone" required>
    </div>


    <div class="form-group">
      <label for="exampleInputEmail1">E-mail</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
    </div>

    <button type="submit" class="btn btn-success">Submit</button>
  </form>