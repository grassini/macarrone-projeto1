<!doctype html>
<html lang="pt-BR">
    <?php require_once('includes/header.php') ?>
<body>
    <nav class="navbar navbar-fixed-top navbar-inverse">
        <div class="navbar-inner">
            <div class="container">
                <!-- .btn-navbar, esta classe é usada como alternador para o conteudo colapsável -->
                <button class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Tudo que for escondilho a menos de 940px -->
                <div class="nav-collapse collapse">
                    <?php include_once('includes/menu.php') ?>
                </div>
            </div>
        </div>
    </nav>

    <section>
        <div class="container">
            <div class="span8 row-fluid conteudo center">
                <h1>Pagina Home</h1>
            </div>
        </div>
    </section>

    <footer class="footer">
        <?php include_once('includes/footer.php'); ?>
    </footer>

</body>
</html>