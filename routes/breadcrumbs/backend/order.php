<?php

Breadcrumbs::for('admin.orders.index', function ($trail) {
    $trail->push(__('labels.backend.orders.management'), route('admin.orders.index'));
});

Breadcrumbs::for('admin.orders.create', function ($trail) {
    $trail->parent('admin.orders.index');
    $trail->push(__('labels.backend.orders.create'), route('admin.orders.index'));
});


Breadcrumbs::for('admin.orders.edit', function ($trail) {
    $trail->parent('admin.orders.index');
    $trail->push(__('labels.backend.orders.edit'), route('admin.orders.index'));
});
