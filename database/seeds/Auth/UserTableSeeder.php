<?php

use App\Models\Auth\User;
use Illuminate\Database\Seeder;

/**
 * Class UserTableSeeder.
 */
class UserTableSeeder extends Seeder
{
    use DisableForeignKeys;

    /**
     * Run the database seed.
     */
    public function run()
    {
        $this->disableForeignKeys();

        DB::table('stores')->insert([
            'sub_domain' => 'restaurant',
            'name' => 'itambition',
            'service_fees' => 10,
            'vat' => 20,
        ]);

        DB::table('sections')->insert([
            'store_id' => 1,
            'name' => 'section',
        ]);

        // Add the master administrator, user id of 1
        User::create([
            'store_id' => 1,
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => 'secret',
            'role' => 'store_admin',
            'confirmation_code' => md5(uniqid(mt_rand(), true)),
            'confirmed' => true,
        ]);

        User::create([
            'store_id' => 1,
            'first_name' => 'Default',
            'last_name' => 'Waiter',
            'email' => 'user@user.com',
            'username' => 'mahmoud',
            'password' => '123456',
            'role' => 'waiter',
            'confirmation_code' => md5(uniqid(mt_rand(), true)),
            'confirmed' => true,
        ]);

        DB::table('waiters')->insert([
            'user_id' => 2
        ]);

        DB::table('tables')->insert([
           'store_id' => 1,
        ]);

        DB::table('tables')->insert([
            'store_id' => 1,
        ]);

        DB::table('tables')->insert([
            'store_id' => 1,
        ]);


        DB::table('categories')->insert([
            'store_id' => 1,
            'name' => 'category 1',
        ]);

        DB::table('categories')->insert([
            'store_id' => 1,
            'name' => 'category 2',
        ]);

        DB::table('categories')->insert([
            'store_id' => 1,
            'name' => 'category 3',
        ]);

        DB::table('products')->insert([
            'store_id' => 1,
            'category_id' => 1,
            'section_id' => 1,
            'name' => 'product 1',
//            'price' => 120,
            'available' => 1,
            'has_options' => 1,

        ]);

        DB::table('products')->insert([
            'store_id' => 1,
            'category_id' => 1,
            'section_id' => 1,
            'name' => 'product 2',
//            'price' => 100,
            'available' => 1,
            'has_options' => 1,

        ]);

        DB::table('products')->insert([
            'store_id' => 1,
            'category_id' => 2,
            'section_id' => 1,
            'name' => 'product 3',
            'price' => 35,
            'available' => 1,
            'has_options' => 0,

        ]);


        DB::table('options')->insert([
            'store_id' => 1,
            'name' => 'size',
        ]);


        DB::table('options')->insert([
            'store_id' => 1,
            'name' => 'type',
        ]);

        DB::table('product_options')->insert([
            'product_id' => 1,
            'option_id' => 1,
        ]);

        DB::table('product_options')->insert([
            'product_id' => 1,
            'option_id' => 2,
        ]);


        DB::table('product_option_values')->insert([
//            'product_id' => 1,
//            'option_id' => 1,
            'product_option_id' => 1,
            'value' => 'Large',
            'price' => 30,
            'available' => 1,
            'description' => "Biggest Large Size",
        ]);

        DB::table('product_option_values')->insert([
//            'product_id' => 2,
//            'option_id' => 1,
            'product_option_id' => 1,
            'value' => 'Medium',
            'price' => 45,
            'available' => 1,
            'description' => "Best Medium Size in country",
        ]);

        DB::table('product_option_values')->insert([
//            'product_id' => 1,
//            'option_id' => 2,
            'product_option_id' => 2,
            'value' => 'red sauce',
            'price' => 10,
            'available' => 1,
            'description' => "best red sauce in country",
        ]);

//        DB::table('orders')->insert([
//            'store_id' => 1,
//            'table_id' => 1,
//            'type' => 1,
//            'payment_method' => 1,
//            'status' => 1,
//            'service_fees' => 10,
//            'vat' => 10,
//            'sub_total' => 30,
//            'total_price' => 50,
//        ]);
//
//        DB::table('order_items')->insert([
//            'order_id' => 1,
//            'product_id' => 1,
//            'status' => 1,
//            'service_fees' => 10,
//            'vat' => 10,
//            'sub_total' => 30,
//            'total_price' => 50,
//        ]);
//
//        DB::table('order_item_option_values')->insert([
//            'order_item_id' => 1,
//            'product_option_value_id' => 1,
//            'price' => 30,
//        ]);
//
//
//        DB::table('order_audience')->insert([
//            'order_id' => 1,
//            'waiter_id' => 2,
//        ]);

        DB::table("notifications")->insert([
           "store_id" => 1,
           "user_id" => 2,
           "title" => "Title Test",
           "body" => "This is a test notification for waiter, Thank You!"
        ]);

        $this->enableForeignKeys();
    }
}
