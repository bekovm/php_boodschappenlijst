<?php
$products = [ 
        [
            'name' => 'Rijst', 
            'price' => 1.00, 
            'quantity' => 1,
            'subTotal' => 1.00
        ],
        [
            'name' => 'Broccoli', 
            'price' => 0.99, 
            'quantity' => 2
        ],
        [
            'name' => 'Koekjes', 
            'price' => 1.20, 
            'quantity' => 4
        ],
        [
            'name' => 'Noten', 
            'price' => 2.99, 
            'quantity' => 0,
        ]
    ];

function tCost($products) { 
    return array_reduce(
        $products, 
        function($total, $product){
           $product['subTotal'] = $product['price'] * $product['quantity'];
           $total['products'][] = $product;
           $total['totalPrice'] += $product['subTotal'];
           
           return $total;
        },
        [
            'products' => [],
            'totalPrice' => 0
        ]
    );
}

$total = tCost($products);
$products = $total['products'];
$totalPrice = $total['totalPrice'];

require __DIR__ . '/index.view.php';    
?>