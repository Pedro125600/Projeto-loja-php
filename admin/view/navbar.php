<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Loja</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">|</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ViewClientes.php">Cadastro Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">|</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ViewProdutos.php">Cadastro Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">|</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ViewColaborador.php">Cadastro Colaboradores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ViewPedidos.php">|Cadastro Pedidos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ViewFornecedores.php">Cadastro Fornecedores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ViewPagamentos.php">|Pagamentos</a>
                    </11>
                <li class="nav-item">
                    <a class="nav-link" href="Principal.php">Sair</a>
                </li>
            </ul>
            <form class="d-flex">
                <label>Usuario:
                </label><?php session_start();
                        echo $_SESSION['login_session']; ?>
                </label>
            </form>
        </div>
    </div>
</nav>