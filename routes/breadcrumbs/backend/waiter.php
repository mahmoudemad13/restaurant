<?php

Breadcrumbs::for('admin.waiters.index', function ($trail) {
    $trail->push(__('labels.backend.waiters.management'), route('admin.waiters.index'));
});

Breadcrumbs::for('admin.waiters.create', function ($trail) {
    $trail->parent('admin.waiters.index');
    $trail->push(__('labels.backend.waiters.create'), route('admin.waiters.index'));
});


Breadcrumbs::for('admin.waiters.edit', function ($trail) {
    $trail->parent('admin.waiters.index');
    $trail->push(__('labels.backend.waiters.edit'), route('admin.waiters.index'));
});
