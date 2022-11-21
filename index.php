<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Cadastro</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Cadastro</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="?page=home">Home</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="?page=novo">Novo Usuário</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="?page=listar">Listar Usuário</a>
      </li>
    </ul>
     
  </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col mt-5">
            <?php
            include("conexao/db.php");
            switch(@$_REQUEST["page"]){
                case "home":
                    print("Bem vindos!");
                break;

                case "novo":
                    include("novo_usuario.php");
                break;
                case "salvar":
                    include("salvar_usuario.php");
                    break;
                case "editar":
                    include("editar_usuario.php");
                    break;
                case "listar":
                    include("listar_usuario.php");
                    break;
                default:
                    print("<h1>Bem vindos!</h1>");
            }
            ?>
        </div>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>