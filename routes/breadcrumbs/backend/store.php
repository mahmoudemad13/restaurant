<?php

Breadcrumbs::for('admin.stores.index', function ($trail) {
    $trail->push(__('labels.backend.stores.management'), route('admin.stores.index'));
});

Breadcrumbs::for('admin.stores.create', function ($trail) {
    $trail->parent('admin.stores.index');
    $trail->push(__('labels.backend.stores.create'), route('admin.stores.index'));
});


Breadcrumbs::for('admin.stores.edit', function ($trail) {
    $trail->parent('admin.stores.index');
    $trail->push(__('labels.backend.stores.edit'), route('admin.stores.index'));
});
