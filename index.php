<?php
session_start();

//* Item 1: Display the names of the buyer per sale.
//* Item 2: Under the names, display the items bought.
//* Item 3: Results must use Bootstrap!

$_SESSION["sales"] = [
    (object) [
        "id" => 1,
        "buyer" => "Wayne Faustorilla",
        "products" => [
            (object) [
                "product" => "Macbook Pro 2023",
                "quantity" => 1,
                "price" => 81000
            ],
            (object) [
                "product" => "Samsung Monitor",
                "quantity" => 3,
                "price" => 7000
            ],
            (object) [
                "product" => "Gaming Chair",
                "quantity" => 1,
                "price" => 10000
            ],
            (object) [
                "product" => "Razer Huntsman V2 Analog",
                "quantity" => 1,
                "price" => 7000
            ],
            (object) [
                "product" => "Razer Viper Ultimate",
                "quantity" => 1,
                "price" => 8000
            ],
        ]
    ],
    (object) [
        "id" => 2,
        "buyer" => "Jane Smith",
        "products" => [
            (object) [
                "product" => "iPhone 14 Pro Max",
                "quantity" => 1,
                "price" => 120000
            ],
            (object) [
                "product" => "Apple Watch Series 8",
                "quantity" => 1,
                "price" => 25000
            ],
            (object) [
                "product" => "AirPods Pro",
                "quantity" => 1,
                "price" => 10000
            ],
        ]
    ],
    (object) [
        "id" => 3,
        "buyer" => "John Doe",
        "products" => [
            (object) [
                "product" => "Sony PlayStation 5",
                "quantity" => 1,
                "price" => 50000
            ],
            (object) [
                "product" => "DualSense Wireless Controller",
                "quantity" => 2,
                "price" => 6000
            ],
            (object) [
                "product" => "Demon's Souls (PS5)",
                "quantity" => 1,
                "price" => 4000
            ],
        ]
    ],
    (object) [
        "id" => 4,
        "buyer" => "Sarah Johnson",
        "products" => [
            (object) [
                "product" => "Canon EOS R5 Mirrorless Camera",
                "quantity" => 1,
                "price" => 250000
            ],
            (object) [
                "product" => "Canon RF 50mm f/1.2L USM Lens",
                "quantity" => 1,
                "price" => 110000
            ],
            (object) [
                "product" => "SanDisk Extreme Pro 512GB SDXC Memory Card",
                "quantity" => 2,
                "price" => 12000
            ],
        ]
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 2</title>
    <!-- Link Bootstrap from node_nodules -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
</head>

<body style="display: flex; width: 100%; justify-content: center; align-items: flex-start; gap: 1rem; padding: 2rem;">
    <?php

    // Loops through the sales array
    foreach ($_SESSION["sales"] as $sale) {
        echo ('
            <div class="card rounded-4 bg-dark" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-white">' . $sale->buyer . '</h5>
                    <h6 class="text-white">Products bought:</h6>
                    <ul class="list-group">
            ');

        foreach ($sale->products as $product) {
            echo ('<li class="list-group-item d-flex justify-content-between align-items-center">
                <p>' . $product->product . '</p>
                    <div class="d-flex justify-content-between flex-column align-items-start">
                        <p>Qty: ' . $product->quantity . '</p><p>PHP ' . $product->price . '</p>
                    </div>
                </li>');
        }

        echo ('</ul>
                    </div>
            </div>
            ');
    }
    ?>

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>