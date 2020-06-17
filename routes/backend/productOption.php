<?php

// All route names are prefixed with 'admin.auth'.
Route::group([
    'namespace' => 'ProductOption',
    'middleware' => 'role:' . config('access.users.admin_role'),
], function () {

    Route::resource('productoptions', 'ProductOptionController');

});
