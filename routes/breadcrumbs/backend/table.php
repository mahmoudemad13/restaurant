<?php

Breadcrumbs::for('admin.tables.index', function ($trail) {
    $trail->push(__('labels.backend.tables.management'), route('admin.tables.index'));
});

Breadcrumbs::for('admin.tables.create', function ($trail) {
    $trail->parent('admin.tables.index');
    $trail->push(__('labels.backend.tables.create'), route('admin.tables.index'));
});


Breadcrumbs::for('admin.tables.edit', function ($trail) {
    $trail->parent('admin.tables.index');
    $trail->push(__('labels.backend.tables.edit'), route('admin.tables.index'));
});
