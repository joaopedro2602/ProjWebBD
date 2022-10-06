<?php
require_once("controller/ControllerCadastro.php")
?>
<!doctype html>
<html lang="en">

<head>
    <title>Sistema Web 2.0</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name = "viewport" content="width=device-width, initial-scale=1">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</head>

<body>
<div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <a href="#" class="navbar-brand" style="color: #000">
                            <img src="img/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                            Sistema Web 2.0
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Cadastro</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="consulta.php">Consultas</a>
                                </li>
                            </ul>  
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <!--As a heading-->
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <span class="navbar-brand">Cadastro de Usuários</spam>
                    </div>
                </nav>
            </div>
        </div>
            
            <!--NavBar end-->
            
            <div class="row">
               <div class="col">
                &nbsp;
            </div>
            <div class="row">
                <div class="card mb-3 col-12">
                    <div class="card-body">
                        <h5 class="card-title">Editar - agendamentos de potenciais Clientes</h5>
                        <p class="card-text">Sistema utilizado para agendamentos de serviços.</p>
                        <p>
                            <?php
                                $controller = new ControllerCadastro();
                                $resultado = $controller -> listar($_GET['id']);
                            ?>
                            <form method="post" action="controller/ControllerCadastro.php?funcao=editar&id=<?php echo $resultado[0]['id']; ?>" id="form" name="form">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email:</label>
                                    <input type="text" class="form-control" name="txtEmail" required id="txtEmail" value="<?php echo $resultado[0]['email'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Endereço:</label>
                                    <input type="text" class="form-control" name="txtEndereco" required id="txtEndereco" value="<?php echo $resultado[0]['endereco'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">CEP:</label>
                                    <input type="text" class="form-control" name="txtCep" required id="txtCep" value="<?php echo $resultado[0]['cep'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Cidade:</label>
                                    <input type="text" class="form-control" name="txtCidade" required id="txtCidade" value="<?php echo $resultado[0]['cidade'];?>">
                                </div>
                                <button type="submit" id="btnInserir" class="btn btn-primary">Editar</button>
</form>
</p>
</div>
</div>
</div>
</div>
</body>
</html>
                                