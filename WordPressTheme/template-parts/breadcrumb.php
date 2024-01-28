<div class="breadcrumbs layout-breadcrumbs <?php if (is_404()): ?>breadcrumbs--color layout-breadcrumbs--padding<?php endif; ?>"
    vocab="http://schema.org/" typeof="BreadcrumbList">
    <div class="breadcrumbs__inner inner">
        <!-- Breadcrumb NavXT -->
        <?php
        if ( function_exists( 'bcn_display' ) ) {
            bcn_display();
        }
        ?>
    </div>
</div>