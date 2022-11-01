<?php
$products = [
    [
        "name" => "iPhone 13 Pro Max",
        "image" => "https://cdn.tgdd.vn/Products/Images/42/230529/iphone-13-pro-max-gold-1-600x600.jpg",
        "price" => 400,
    ],
    [
        "name" => "Xiaomi Mi 11 Lite",
        "image" => "https://cdn.tgdd.vn/Products/Images/42/233241/xiaomi-mi-11-lite-4g-black-1-200x200.jpg",
        "price" => 300,
    ],
    [
        "name" => "Samsung Galaxy S21",
        "image" => "https://cdn.tgdd.vn/Products/Images/42/226316/samsung-galaxy-s21-ultra-bac-600x600-1-200x200.jpg",
        "price" => 300,
    ]
];

$me1111nuList = ["HomePage","Products","Services","About Us","Contact"];
?>
<!DOCTYPE html>
<html lang="en">0
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="products">
        <?php
foreach($products as $value ){
    echo "<pre>";
    var_dump($value);
    echo"<div class='item'>";
    echo"<h2></h2>";
    echo"<p></p>";
    echo"<p></p>";
}

        ?>
        <div class="item">
            <h2></h2>
            <p></p>
            <p></p>
        </div>
    </div>
    
</body>
</html>