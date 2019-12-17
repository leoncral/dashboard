<!DOCTYPE html>
<!-- saved from url=(0056)https://getbootstrap.com.br/docs/4.1/examples/dashboard/ -->
<html lang="en">

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com.br/favicon.ico">

    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-dark bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="https://getbootstrap.com.br/docs/4.1/examples/dashboard/#">
        Análise Criminal
    </a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="https://getbootstrap.com.br/docs/4.1/examples/dashboard/#">Sair</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="?pagina">
                            Dashboard <span class="sr-only">(atual)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?pagina=pedidos">
                            Pedidos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?pagina=produtos">
                            Produtos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?pagina=vendas">
                            Cadastro de Vendas
                        </a>
                    </li>
                </ul>

            </div>
        </nav>
        <!-- conteudo -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <button class="btn btn-sm btn-outline-secondary">Compartilhar</button>
                        <button class="btn btn-sm btn-outline-secondary">Exportar</button>
                    </div>
                </div>
            </div>
            <?php
                if(isset($_GET['pagina'])) {
                    switch($_GET['pagina']) {
                        case 'pedidos' :
                            echo '<h2>Pedidos</h2>';
                            break;
                        case 'produtos' :
                            echo '<h2>Produtos</h2>';
                            break;
                        case 'vendas' :
                            echo '<h2>Cadastro de Vendas</h2>';
                            include 'cadastroVendas.php';
                            break;
                        default:
                            echo "nada aqui";
                            break;
                    }
                }
            ?>
        </main>
    </div>
</div>
<!-- Principal JavaScript do Bootstrap
================================================== -->
<!-- Foi colocado no final para a página carregar mais rápido -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</body>
</html>