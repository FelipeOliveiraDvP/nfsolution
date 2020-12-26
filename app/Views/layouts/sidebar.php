<?php

/**
 * Sidebar
 */
?>
<nav class="site-sidebar">
    <span class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></span>
    <ul class="nav flex-column flex-nowrap overflow-hiden">
        <li class="nav-item">
            <a class="nav-link text-truncate" href="/dashboard"><i class="fa fa-home" aria-hidden="true"></i> <span class="sidebar-label">Home</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed text-truncate" href="#product-submenu" data-toggle="collapse" data-target="#product-submenu">
                <i class="fa fa-th-large" aria-hidden="true"></i> <span class="sidebar-label">Produtos</span>
            </a>
            <div class="collapse" id="product-submenu" aria-expanded="false">
                <ul class="flex-column pl-2 nav">
                    <li class="nav-item"><a class="nav-link py-0" href="/products"><i class="fa fa-list" aria-hidden="true"></i> <span class="sidebar-label">Listar produtos</span></a></li>
                    <li class="nav-item"><a class="nav-link py-0" href="/products/detail"><i class="fa fa-plus" aria-hidden="true"></i> <span class="sidebar-label">Novo produto</span></a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>