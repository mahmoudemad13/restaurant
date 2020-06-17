<?php

Breadcrumbs::for('admin.categories.index', function ($trail) {
    $trail->push(__('labels.backend.categories.management'), route('admin.categories.index'));
});

Breadcrumbs::for('admin.categories.create', function ($trail) {
    $trail->parent('admin.categories.index');
    $trail->push(__('labels.backend.categories.create'), route('admin.categories.index'));
});


Breadcrumbs::for('admin.categories.edit', function ($trail) {
    $trail->parent('admin.categories.index');
    $trail->push(__('labels.backend.categories.edit'), route('admin.categories.index'));
});
