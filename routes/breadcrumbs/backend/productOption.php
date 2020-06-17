<?php

Breadcrumbs::for('admin.productoptions.index', function ($trail) {
    $trail->push(__('labels.backend.productoptions.management'), route('admin.productoptions.index'));
});

Breadcrumbs::for('admin.productoptions.create', function ($trail) {
    $trail->parent('admin.productoptions.index');
    $trail->push(__('labels.backend.productoptions.create'), route('admin.productoptions.index'));
});


Breadcrumbs::for('admin.productoptions.edit', function ($trail) {
    $trail->parent('admin.productoptions.index');
    $trail->push(__('labels.backend.productoptions.edit'), route('admin.productoptions.index'));
});
