<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';

require __DIR__.'/waiter.php';
require __DIR__.'/store.php';
require __DIR__.'/table.php';
require __DIR__.'/category.php';
require __DIR__.'/product.php';
require __DIR__.'/option.php';
require __DIR__.'/productOptionValue.php';
require __DIR__.'/productOption.php';
require __DIR__.'/order.php';
require __DIR__.'/orderItem.php';
require __DIR__.'/orderItemOptionValue.php';
require __DIR__.'/orderAudience.php';
