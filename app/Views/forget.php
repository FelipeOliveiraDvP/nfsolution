<?= $this->extend('layouts/public-layout') ?>

<?= $this->section('content') ?>
<div class="align-center">
    <?php if (!empty($message)) : ?>
        <div class="alert alert-success">
            <p><?= $message ?></p>
            <hr>
            <a href="/" class="alert-link">Ir para o login</a>
        </div>
    <?php else: ?>
    <form method="POST" action="/auth/forget" class="form" id="forget-form">
        <div class="form-group">
            <label for="user-email">E-mail para recuperação de senha</label>
            <input type="email" class="form-control" name="user-email" id="user-email" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Recuperar senha</button>
        <a href="/" class="btn btn-link px-0">Ir para o login</a>
    
        <?php if (!empty($error)) : ?>
            <div class="alert alert-danger">
                <?= $error ?>
            </div>
        <?php endif; ?>
    </form>
    <?php endif; ?>

    <div id="form-status" class="text-center d-none">
        <div class="spinner-border spinner" role="status">
            <span class="sr-only">Carregando...</span>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script src="<?= base_url('js/validation/jquery.validate.min.js'); ?>"></script>
<script src="<?= base_url('js/validation/forget-validation.js'); ?>"></script>
<?= $this->endSection() ?>