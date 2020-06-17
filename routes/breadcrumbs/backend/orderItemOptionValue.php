<?php

Breadcrumbs::for('admin.orderitemoptionvalues.index', function ($trail) {
    $trail->push(__('labels.backend.orderitemoptionvalues.management'), route('admin.orderitemoptionvalues.index'));
});

Breadcrumbs::for('admin.orderitemoptionvalues.create', function ($trail) {
    $trail->parent('admin.orderitemoptionvalues.index');
    $trail->push(__('labels.backend.orderitemoptionvalues.create'), route('admin.orderitemoptionvalues.index'));
});


Breadcrumbs::for('admin.orderitemoptionvalues.edit', function ($trail) {
    $trail->parent('admin.orderitemoptionvalues.index');
    $trail->push(__('labels.backend.orderitemoptionvalues.edit'), route('admin.orderitemoptionvalues.index'));
});
