<?= $this->extend('layouts/public-layout') ?>

<?= $this->section('content') ?>
<div class="align-center">
    <form method="POST" action="/auth/login" class="form" id="login-form">
        <div class="form-group">
            <label for="user-email">E-mail</label>
            <input type="email" class="form-control" name="user-email" id="user-email" required>
        </div>
        <div class="form-group">
            <label for="user-pass">Senha</label>
            <input type="password" class="form-control" name="user-pass" id="user-pass" required>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" name="user-remember" id="user-remember">
            <label class="form-check-label" for="user-remember">Lembrar de mim</label>
        </div>
        <button type="submit" class="btn btn-primary w-100">Entrar</button>
        <a href="/home/forget" class="btn btn-link px-0">Esqueci minha senha</a>

        <?php if (!empty($error)) : ?>
            <div class="alert alert-danger">
                <?= $message ?>
            </div>
        <?php endif; ?>
    </form>
    
    <div id="form-status" class="text-center d-none">
        <div class="spinner-border spinner" role="status">
            <span class="sr-only">Carregando...</span>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script src="<?= base_url('js/validation/jquery.validate.min.js'); ?>"></script>
<script src="<?= base_url('js/validation/login-validation.js'); ?>"></script>
<?= $this->endSection() ?>