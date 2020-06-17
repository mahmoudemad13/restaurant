<?php

// All route names are prefixed with 'admin.auth'.
Route::group([
    'namespace' => 'Store',
    'middleware' => 'role:' . config('access.users.admin_role'),
], function () {

    Route::resource('stores', 'StoreController');

});
