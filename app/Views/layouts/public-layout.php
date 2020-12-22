<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Basic System</title>
    <meta name="description" content="Basic System">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico" />
    <link rel="stylesheet" href="<?= base_url('css/bootstrap/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('css/style.css')?>">
    <?= $this->renderSection('styles'); ?>
</head>

<body>

    <div class="container-fluid p-0">

        <header class="site-header">

            <nav class="navbar navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Basic System</a>
            </nav>

        </header>

        <main class="site-main">
            <?= $this->renderSection('content'); ?>
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