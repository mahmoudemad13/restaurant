<?php

Breadcrumbs::for('admin.productoptionvalues.index', function ($trail) {
    $trail->push(__('labels.backend.productoptionvalues.management'), route('admin.productoptionvalues.index'));
});

Breadcrumbs::for('admin.productoptionvalues.create', function ($trail) {
    $trail->parent('admin.productoptionvalues.index');
    $trail->push(__('labels.backend.productoptionvalues.create'), route('admin.productoptionvalues.index'));
});


Breadcrumbs::for('admin.productoptionvalues.edit', function ($trail) {
    $trail->parent('admin.productoptionvalues.index');
    $trail->push(__('labels.backend.productoptionvalues.edit'), route('admin.productoptionvalues.index'));
});
