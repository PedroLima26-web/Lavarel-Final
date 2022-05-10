<!--DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Cadastro</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
    <div>
        <h1>Produtos</h1>
        <form action="/cadastrar-produto" method="POST">
            @csrf
            <label for="labelNome">Nome:</label>
            <input type="text" name="nome">
            <br>
            <label for="labelValor">Valor:</label>
            <input type="text" name="valor">
            <br>
            <label for="labelQtd">Estoque:</label>
            <input type="text" name="estoque">
            <br>
            <button>Cadastrar</button>
        </form>
    </div>
</body>
</html-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>LaraLara</title>
</head>
<body>
<div class="container">
<nav class="navbar navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
      Livraria LaraLara
	  <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
    Opções
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" onclick="document.location='/listar';">Ver todos os Registros</a></li>
  </ul>
</div>
  </div>
</nav>

<div id="caixa2" class="p-2">
		<form class="p-2" action="/editar-produto/{{$produto->id}}" method="POST">
            @csrf
			<div class="row">
				<div class="col m-2">
					<label for="lblNome">Produto</label>
				</div>
			</div>
			<div class="row">
				<div class="col m-2">
					<input type="text" name="nome" style="width: inherit">
				</div>
			</div>

			<div class="row">
				<div class="col m-2">
					<label for="lblValor">Valor</label>
				</div>
			</div>
			<div class="row">
				<div class="col m-2">
					<input type="text" name="valor" style="width: inherit">
				</div>
			</div>

            <div class="row">
				<div class="col m-2">
					<label for="lblQuantidade">Quantidade</label>
				</div>
			</div>
			<div class="row">
				<div class="col m-2">
					<input type="text" name="estoque" style="width: inherit">
				</div>
			</div>
             <button type="submit" class="btn btn-outline-info" id="btLista">Editar</button>
             
</form>
</body>
</html>


 