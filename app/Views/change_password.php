<?= $this->extend('layouts/public-layout') ?>

<?= $this->section('content') ?>
<div class="align-center">
    <?php if (!empty($message)) : ?>
        <div class="alert alert-success">
            <p><?= $message ?></p>
            <a href="/" class="alert-link">Ir para o login</a>
        </div>
    <?php elseif (!empty($error)) : ?>
        <div class="alert alert-danger">
            <p><?= $error ?></p>
            <a href="/home/forget" class="alert-link">Recuperar minha senha</a>
        </div>
    <?php else : ?>
        <form method="POST" action="/auth/changePassword" class="form" id="change-password-form">
            <div class="form-group">
                <label for="user-email">Informe sua nova senha</label>
                <input type="password" class="form-control" name="new-password" id="new-password" required>
            </div>
            <div class="form-group">
                <label for="user-pass">Confirme a sua senha</label>
                <input type="password" class="form-control" name="confirm-password" id="confirm-password" required>
            </div>
            <input type="hidden" name="token" value="<?= $token ?? '' ?>">
            <button type="submit" class="btn btn-primary w-100">Alterar senha</button>
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
<script src="<?= base_url('js/validation/change-password-validation.js'); ?>"></script>
<?= $this->endSection() ?>