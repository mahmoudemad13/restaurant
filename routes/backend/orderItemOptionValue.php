<?php

// All route names are prefixed with 'admin.auth'.
Route::group([
    'namespace' => 'OrderItemOptionValue',
    'middleware' => 'role:' . config('access.users.admin_role'),
], function () {

    Route::resource('orderitemoptionvalues', 'OrderItemOptionValueController');

});
