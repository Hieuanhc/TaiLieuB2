<?php

namespace Database\Seeders;
//---EXE2
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;
//--

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    // public function run(): void
    // {
    //     // User::factory(10)->create();

    //     User::factory()->create([
    //         'name' => 'Test User',
    //         'email' => 'test@example.com',
    //     ]);
    // }
    //-----EXE2
    public function run()
    {
        // Thêm dữ liệu cho bảng users
        $users = [
            ['user_name' => 'alice', 'user_email' => 'alice@gmail.com', 'user_pass' => bcrypt('password123')],
            ['user_name' => 'bob', 'user_email' => 'bob@yahoo.com', 'user_pass' => bcrypt('password123')],
            ['user_name' => 'charlie', 'user_email' => 'charlie@gmail.com', 'user_pass' => bcrypt('password123')],
            ['user_name' => 'david', 'user_email' => 'david@gmail.com', 'user_pass' => bcrypt('password123')],
            ['user_name' => 'emma', 'user_email' => 'emma@gmail.com', 'user_pass' => bcrypt('password123')],
            ['user_name' => 'frank', 'user_email' => 'frank@gmail.com', 'user_pass' => bcrypt('password123')],
            ['user_name' => 'grace', 'user_email' => 'grace@gmail.com', 'user_pass' => bcrypt('password123')],
            ['user_name' => 'hannah', 'user_email' => 'hannah@gmail.com', 'user_pass' => bcrypt('password123')],
            ['user_name' => 'ian', 'user_email' => 'ian@gmail.com', 'user_pass' => bcrypt('password123')],
            ['user_name' => 'mary', 'user_email' => 'mary@gmail.com', 'user_pass' => bcrypt('password123')],
            ['user_name' => 'mike', 'user_email' => 'mike@gmail.com', 'user_pass' => bcrypt('password123')],
            ['user_name' => 'nina', 'user_email' => 'nina@gmail.com', 'user_pass' => bcrypt('password123')],
        ];
        foreach ($users as $user) {
            User::create($user);
        }

        // Thêm dữ liệu cho bảng products
        $products = [
            ['product_name' => 'Samsung Galaxy S21', 'product_price' => 699.99, 'product_description' => 'Điện thoại Samsung cao cấp'],
            ['product_name' => 'Apple iPhone 14', 'product_price' => 999.99, 'product_description' => 'Điện thoại Apple mới nhất'],
            ['product_name' => 'Samsung TV 55 inch', 'product_price' => 499.99, 'product_description' => 'TV Samsung 4K'],
            ['product_name' => 'Apple MacBook Pro', 'product_price' => 1299.99, 'product_description' => 'Laptop Apple hiệu năng cao'],
            ['product_name' => 'Sony Headphones', 'product_price' => 199.99, 'product_description' => 'Tai nghe Sony chống ồn'],
        ];
        foreach ($products as $product) {
            Product::create($product);
        }

        // Thêm dữ liệu cho bảng orders và order_details
        $orders = [
            ['user_id' => 1], // Alice
            ['user_id' => 1],
            ['user_id' => 2], // Bob
            ['user_id' => 3], // Charlie
            ['user_id' => 3],
            ['user_id' => 4], // David
            ['user_id' => 5], // Emma
            ['user_id' => 6], // Frank
            ['user_id' => 7], // Grace
            ['user_id' => 8], // Hannah
            ['user_id' => 9], // Ian
            ['user_id' => 10], // Mary
        ];
        foreach ($orders as $index => $orderData) {
            $order = Order::create($orderData);
            // Thêm chi tiết đơn hàng
            OrderDetail::create(['order_id' => $order->order_id, 'product_id' => ($index % 5) + 1]);
            if ($index % 2 == 0) { // Thêm 2 sản phẩm cho một số đơn hàng
                OrderDetail::create(['order_id' => $order->order_id, 'product_id' => (($index + 1) % 5) + 1]);
            }
        }
    }
}
