<?= $this->extend('layouts/private-layout') ?>

<?= $this->section('styles') ?>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <h2>Novo produto</h2>
    <hr>
    <form id="product-form" action="/products/save" method="post">
        <div class="form-row">
            <div class="col-12 col-md-6 col-lg-3">
                <img class="product-image" id="product-image-preview" src="<?= base_url('img/placeholder-product-image.png') ?>" alt="">
                <input type="file" name="product-image" id="product-image" onchange="previewFile('#product-image', '#product-image-preview')">
                <div class="mt-3">
                    <button class="btn btn-primary" type="submit">Salvar produto</button>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-9">
                <div class="form-row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="product-title">Título</label>
                            <input class="form-control" type="text" name="product-title" id="product-title" placeholder="Título do produto" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="product-price">Preço</label>
                            <input class="form-control" type="text" name="product-price" id="product-price" placeholder="R$ 00,00" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="product-quantity">Quantidade</label>
                            <input class="form-control" type="number" name="product-quantity" id="product-quantity" placeholder="10" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="summernote">Descrição</label>
                        <textarea id="summernote" name="editordata"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div id="form-status" class="text-center d-none">
        <div class="spinner-border spinner" role="status">
            <span class="sr-only">Carregando...</span>
        </div>
    </div>

</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script src="<?= base_url('js/utils/previewfile.js') ?>"></script>
<script src="<?= base_url('js/summernote/summernote.min.js') ?>"></script>
<script src="<?= base_url('js/summernote/product-editor.js') ?>"></script>
<script src="<?= base_url('js/validation/jquery.validate.min.js'); ?>"></script>
<script src="<?= base_url('js/validation/product-validation.js') ?>"></script>
<?= $this->endSection() ?>