<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./src/index.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="header-top">
                <nav>
                    <ul>
                        <li><a href="">Menu</a></li>
                        <li><a href="">Menu</a></li>
                        <li><a href="">Menu</a></li>
                        <li><a href="">Menu</a></li>
                        <li><a href="">Menu</a></li>
                    </ul>
                </nav>

                <div class="authentication">
                    <a href="./view/login.php"><button class="btn-login">Login</button></a>
                    <button class="btn-register">Register</button>
                </div>
            </div>
            <div class="banner">
                <img src="https://picsum.photos/1440/400" alt="">
            </div>
        </header>
        <main>
            <div class="products">
                <?php
                    $connection = new PDO("mysql:host=localhost;dbname=we17322;charset=utf8","root","");
                    $query = "select * from products";
                    $stmt = $connection -> prepare($query);
                    $stmt -> execute();
                    $products = $stmt -> fetchAll();
                ?>
                <?php foreach($products as $value):?>
                    <div class="item">
                        <img src="<?php echo $value['productImage']?>" alt="">
                       <h3> <img src=".../" alt=""><?php echo $value["productName"]?></h3>
                        <p><?php echo $value["productPrice"]?></p>
                        <p><?php echo $value["productDesc"]?></p> 
                        
                    </div>
                <?php endforeach?>
            </div>
            
        </main>
        <footer>
        </footer>
    </div>
</body>
</html>