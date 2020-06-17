<?php
Route::group(['prefix' => 'v1/', 'namespace' => 'Api'], function () {

    Route::post('waiters/login','Waiter\WaiterController@login');

    Route::group(['middleware'=> "waiter"],function(){

        Route::get("{store_id}/tables","Table\TableController@get");
        Route::put("{store_id}/tables/{table_id}/open","Table\TableController@open");
        Route::get("{store_id}/tables/search","Table\TableController@search");
        Route::put("{store_id}/tables/{table_id}/close","Table\TableController@close");
        Route::get("{store_id}/menu","Menu\MenuController@get");
        Route::get("{store_id}/products","Product\ProductController@get");
        Route::get("{store_id}/products/search","Product\ProductController@search");
        Route::get("{store_id}/products/{id}","Product\ProductController@show");
        Route::get("{store_id}/orders/search","Order\OrderController@search");
        Route::get("{store_id}/orders/mine","Order\OrderController@getMine");
        Route::post("{store_id}/orders","Order\OrderController@create");
        Route::get("order-items/{id}","OrderItem\OrderItemController@get");
        Route::post("{store_id}/order-items/add","OrderItem\OrderItemController@add");
        Route::post("{store_id}/order-items/{id}/edit","OrderItem\OrderItemController@edit");
        Route::delete("order-items/{id}","OrderItem\OrderItemController@delete");
        Route::get("{store_id}/notifications","Notification\NotificationController@get");

    });

});
