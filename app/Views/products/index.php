<?= $this->extend('layouts/private-layout') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <h2>Produtos</h2>

    <div class="table-filter">
        <form action="<?= !empty($key) ? '/products' : '/products/search' ?>" method="get">
            <div class="search-container">
                <input class="input-search" type="text" name="search" id="search" placeholder="Pesquisar..." value="<?= $key ?? '' ?>">
                <button class="btn-search" type="submit">
                    <?php if (!empty($key)) : ?>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    <?php else : ?>
                        <i class="fa fa-search" aria-hidden="true"></i>
                    <?php endif; ?>
                </button>
            </div>
        </form>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <th>Imagem</th>
                <th>Título</th>
                <th>R$ Preço</th>
                <th>Quantidade</th>
                <th>Ações</th>
            </thead>
            <tbody>
                <?php if ($products) : ?>
                    <?php foreach ($products as $product) : ?>
                        <tr>
                            <td>
                                <?php if ($product['image'] != null) : ?>
                                    <img class="product-image-preview" src="<?= $product['image'] ?>" alt="<?= $product['title'] ?>">
                                <?php else : ?>
                                    <img class="product-image-preview" src="<?= base_url('img/placeholder-product-image.png') ?>" alt="<?= $product['title'] ?>">
                                <?php endif; ?>
                            </td>
                            <td><?= $product['title'] ?></td>
                            <td><?= number_format($product['price'], 2, ',', '.') ?></td>
                            <td><?= $product['quantity'] ?></td>
                            <td>
                                <a class="btn btn-primary" href="#"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
                                <a class="btn btn-danger" href="#"><i class="fa fa-trash" aria-hidden="true"></i> Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div class="table-pagination">
        <?php if ($pager) : ?>
            <?php
            $pager->setPath('products');
            echo $pager->links();
            ?>
        <?php endif; ?>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script src="<?= base_url('js/datatables/products.js'); ?>"></script>
<?= $this->endSection() ?>