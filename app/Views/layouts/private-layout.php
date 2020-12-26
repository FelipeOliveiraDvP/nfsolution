<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Basic System</title>
    <meta name="description" content="Basic System">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/bootstrap/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/font-awesome/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/desktop.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/tablet.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/mobile.css') ?>">
    <?= $this->renderSection('styles'); ?>
</head>

<body>

    <div class="container-fluid p-0">

        <header class="site-header">

            <nav class="navbar navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Basic System</a>

                <div class="btn-group dropleft">
                    <button class="btn btn-outline-light dropdown-toggle" type="button" id="user-profile-btn" data-toggle="dropdown">
                        Bem vindo! <i class="fa fa-user" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="user-profile-btn">
                        <a class="dropdown-item" href="#">Meu Perfil</a>                        
                        <a class="dropdown-item" href="/auth/logout"> Sair</a>
                    </div>                    
                </div>
            </nav>

        </header>

        <main class="site-main private">
            <div class="row">
                <div class="col-12 col-md-3 col-lg-2 p-0">
                    <?= $this->include('layouts/sidebar'); ?>
                </div>
                <div class="col-12 col-md-9 col-lg-10">
                    <?= $this->renderSection('content'); ?>
                </div>
            </div>
        </main>
    </div>

    <script src="<?= base_url('js/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap/popper.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap/bootstrap.min.js') ?>"></script>
    <?= $this->renderSection('scripts'); ?>

</body>

</html>