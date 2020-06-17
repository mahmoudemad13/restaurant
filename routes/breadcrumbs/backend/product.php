<?php

Breadcrumbs::for('admin.products.index', function ($trail) {
    $trail->push(__('labels.backend.products.management'), route('admin.products.index'));
});

Breadcrumbs::for('admin.products.create', function ($trail) {
    $trail->parent('admin.products.index');
    $trail->push(__('labels.backend.products.create'), route('admin.products.index'));
});


Breadcrumbs::for('admin.products.edit', function ($trail) {
    $trail->parent('admin.products.index');
    $trail->push(__('labels.backend.products.edit'), route('admin.products.index'));
});
