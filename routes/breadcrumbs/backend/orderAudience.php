<?php

Breadcrumbs::for('admin.orderaudiences.index', function ($trail) {
    $trail->push(__('labels.backend.orderaudiences.management'), route('admin.orderaudiences.index'));
});

Breadcrumbs::for('admin.orderaudiences.create', function ($trail) {
    $trail->parent('admin.orderaudiences.index');
    $trail->push(__('labels.backend.orderaudiences.create'), route('admin.orderaudiences.index'));
});


Breadcrumbs::for('admin.orderaudiences.edit', function ($trail) {
    $trail->parent('admin.orderaudiences.index');
    $trail->push(__('labels.backend.orderaudiences.edit'), route('admin.orderaudiences.index'));
});
