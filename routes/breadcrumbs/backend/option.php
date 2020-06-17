<?php

Breadcrumbs::for('admin.options.index', function ($trail) {
    $trail->push(__('labels.backend.options.management'), route('admin.options.index'));
});

Breadcrumbs::for('admin.options.create', function ($trail) {
    $trail->parent('admin.options.index');
    $trail->push(__('labels.backend.options.create'), route('admin.options.index'));
});


Breadcrumbs::for('admin.options.edit', function ($trail) {
    $trail->parent('admin.options.index');
    $trail->push(__('labels.backend.options.edit'), route('admin.options.index'));
});
