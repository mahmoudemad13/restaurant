<?php

Breadcrumbs::for('admin.orderitems.index', function ($trail) {
    $trail->push(__('labels.backend.orderitems.management'), route('admin.orderitems.index'));
});

Breadcrumbs::for('admin.orderitems.create', function ($trail) {
    $trail->parent('admin.orderitems.index');
    $trail->push(__('labels.backend.orderitems.create'), route('admin.orderitems.index'));
});


Breadcrumbs::for('admin.orderitems.edit', function ($trail) {
    $trail->parent('admin.orderitems.index');
    $trail->push(__('labels.backend.orderitems.edit'), route('admin.orderitems.index'));
});
