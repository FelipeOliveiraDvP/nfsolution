<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Basic System</title>
    <meta name="description" content="Basic System">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico" />
    <link rel="stylesheet" href="<?= base_url('css/bootstrap/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('css/font-awesome/font-awesome-4.7.0/css/font-awesome.min.css')?>">    
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
                <a href="/auth/logout">Sair</a>
            </nav>

        </header>

        <main class="site-main">
            <div class="row">
                <div class="col-12 col-md-3 col-lg-2">
                    <?= $this->include('layouts/sidebar'); ?>
                </div>
                <div class="col-12 col-md-9 col-lg-10">
                    <?= $this->renderSection('content'); ?>
                </div>
            </div>
        </main>

        <footer class="site-footer">
            <p class="bg-light text-center">
                2020&copy; - Basic System
            </p>
        </footer>

    </div>

    <script src="<?= base_url('js/jquery/jquery.min.js')?>"></script>
    <script src="<?= base_url('js/bootstrap/popper.min.js')?>"></script>
    <script src="<?= base_url('js/bootstrap/bootstrap.min.js')?>"></script>
    <?= $this->renderSection('scripts'); ?>

</body>

</html>