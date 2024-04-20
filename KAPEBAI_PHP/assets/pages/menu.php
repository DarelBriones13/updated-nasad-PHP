<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="../css/sample.css  ">

        <title>Kape Bai Menu</title>
    </head>
    <body id="body-pd">
        <header class="header" id="header">
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>

            <div class="header__img">
                <img src="../img/coffee.jpg" alt="">
            </div>
        </header>

        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav__logo">
                        <i class='bx bx-coffee-togo'></i>
                        <span class="nav__logo-name">KAPE BAI</span>
                    </a>

                    <div class="nav__list">
                        <a href="../pages/home.php" class="nav__link ">
                        <i class='bx bx-grid-alt nav__icon' ></i>
                            <span class="nav__name">Dashboard</span>
                        </a>

                        <a href="../pages/user.php" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">Users</span>
                        </a>
                        
                        <a href="../pages/menu.php" class="nav__link active">
                            <i class='bx bx-food-menu nav__icon'></i>
                            <span class="nav__name">Menu</span>
                        </a>

                        <a href="../pages/order.php" class="nav__link">
                            <i class='bx bxs-calendar-check nav__icon'></i>
                            <span class="nav__name">Orders</span>
                        </a>

                        <a href="../pages/history.php" class="nav__link">
                            <i class='bx bx-history nav__icon'></i>
                            <span class="nav__name">History</span>
                        </a>
                    </div>
                </div>

                <a href="../pages/index.php" class="nav__link">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>

        <!-- MAIN -->
        <section>
            <div class="menu-category">
                <div class="box-container menu-active">
                    <a href="../pages/menu.php" class="menu-link">
                        <img src="../img/1.png" alt="">
                        <p>HOT COFFEE</p>
                    </a>
                </div>
                <div class="box-container">
                    <a href="../pages/iced-coffee.php" class="menu-link">
                        <img src="../img/2.png" alt="">
                        <p>ICED COFFEE</p>
                    </a>
                </div>

                <div class="box-container">
                    <a href="../pages/pastries.php" class="menu-link">
                        <img src="../img/3.png" alt="">
                        <p>PASTRIES</p>
                    </a>
                </div>   
            </div>
            <h1 class="hot-coffee">Hot Coffee Menu</h1>
            <form action="../pages/order.php" method="post" class="menu-list">
                <div class="container">
                    <div class="coffee-1">
                        <div class="img-box">
                            <img src="../img/hot_coffee_latte.png" alt="">
                        </div>
                        <div class="content">
                            <input class="h2" type="text" name="pName" value="Hot Coffee Latte" readonly>
                            <input class="p" type="text" name="pPrice" value="₱175.00" readonly>
                        </div>
                    </div>
                    <h2 class="sugar-title">Sugar</h2>
                    <div class="coffee-2">
                        <input type="radio" id="less" name="sugar" value="10%">
                        <label for="less">10%</label><br>
                        <input type="radio" id="medium" name="sugar" value="20%">
                        <label for="medium">20%</label><br>  
                        <input type="radio" id="many" name="sugar" value="30%">
                        <label for="many">30%</label><br><br>
                        <div class="quantity">
                            <input type="number" name="pQuantity" id="quantity" value="1">
                        </div>
                    </div>
                    <div class="addBtn">
                        <input type="submit" name="addBtn" value="ADD TO ORDERS">
                    </div>
                </div>

                <div class="container">
                    <div class="coffee-1">
                        <div class="img-box">
                            <img src="../img/americano.png" alt="">
                        </div>
                        <div class="content">
                            <input class="h2" type="text" name="pName" value="Hot Americano" readonly>
                            <input class="p" type="text" name="pPrice" value="₱165.00" readonly>
                        </div>
                    </div>
                    <h2 class="sugar-title">Sugar</h2>
                    <div class="coffee-2">
                        <input type="radio" id="less" name="sugar" value="10%">
                        <label for="less">10%</label><br>
                        <input type="radio" id="medium" name="sugar" value="20%">
                        <label for="medium">20%</label><br>  
                        <input type="radio" id="many" name="sugar" value="30%">
                        <label for="many">30%</label><br><br>
                        <div class="quantity">
                            <input type="number" name="pQuantity" id="quantity" value="1">
                        </div>
                    </div>
                    <div class="addBtn">
                        <input type="submit" name="addBtn" value="ADD TO ORDERS">
                    </div>
                </div>

                <div class="container">
                    <div class="coffee-1">
                        <div class="img-box">
                            <img src="../img/mocha.png" alt="">
                        </div>
                        <div class="content">
                            <input class="h2" type="text" name="pName" value="Hot Cafe Mocha" readonly>
                            <input class="p" type="text" name="pPrice" value="₱190.00" readonly>
                        </div>
                    </div>
                    <h2 class="sugar-title">Sugar</h2>
                    <div class="coffee-2">
                        <input type="radio" id="less" name="sugar" value="10%">
                        <label for="less">10%</label><br>
                        <input type="radio" id="medium" name="sugar" value="20%">
                        <label for="medium">20%</label><br>  
                        <input type="radio" id="many" name="sugar" value="30%">
                        <label for="many">30%</label><br><br>
                        <div class="quantity">
                            <input type="number" name="pQuantity" id="quantity" value="1">
                        </div>
                    </div>
                    <div class="addBtn">
                        <input type="submit" name="addBtn" value="ADD TO ORDERS">
                    </div>
                </div>

                <div class="container">
                    <div class="coffee-1">
                        <div class="img-box">
                            <img src="../img/cappuccino.png" alt="">
                        </div>
                        <div class="content">
                            <input class="h2" type="text" name="pName" value="Hot Cappuccino" readonly>
                            <input class="p" type="text" name="pPrice" value="₱175.00" readonly>
                        </div>
                    </div>
                    <h2 class="sugar-title">Sugar</h2>
                    <div class="coffee-2">
                        <input type="radio" id="less" name="sugar" value="10%">
                        <label for="less">10%</label><br>
                        <input type="radio" id="medium" name="sugar" value="20%">
                        <label for="medium">20%</label><br>  
                        <input type="radio" id="many" name="sugar" value="30%">
                        <label for="many">30%</label><br><br>
                        <div class="quantity">
                            <input type="number" name="pQuantity" id="quantity" value="1">
                        </div>
                    </div>
                    <div class="addBtn">
                        <input type="submit" name="addBtn" value="ADD TO ORDERS">
                    </div>
                </div>

                <div class="container">
                    <div class="coffee-1">
                        <div class="img-box">
                            <img src="../img/caramel.png" alt="">
                        </div>
                        <div class="content">
                            <input class="h2" type="text" name="pName" value="Hot Caramel Latte" readonly>
                            <input class="p" type="text" name="pPrice" value="₱200.00" readonly>
                        </div>
                    </div>
                    <h2 class="sugar-title">Sugar</h2>
                    <div class="coffee-2">
                        <input type="radio" id="less" name="sugar" value="10%">
                        <label for="less">10%</label><br>
                        <input type="radio" id="medium" name="sugar" value="20%">
                        <label for="medium">20%</label><br>  
                        <input type="radio" id="many" name="sugar" value="30%">
                        <label for="many">30%</label><br><br>
                        <div class="quantity">
                            <input type="number" name="pQuantity" id="quantity" value="1">
                        </div>
                    </div>
                    <div class="addBtn">
                        <input type="submit" name="addBtn" value="ADD TO ORDERS">
                    </div>
                </div>

                <div class="container">
                    <div class="coffee-1">
                        <div class="img-box">
                            <img src="../img/chocolate.png" alt="">
                        </div>
                        <div class="content">
                            <input class="h2" type="text" name="pName" value="Hot Chocolate" readonly>
                            <input class="p" type="text" name="pPrice" value="₱180.00" readonly>
                        </div>
                    </div>
                    <h2 class="sugar-title">Sugar</h2>
                    <div class="coffee-2">
                        <input type="radio" id="less" name="sugar" value="10%">
                        <label for="less">10%</label><br>
                        <input type="radio" id="medium" name="sugar" value="20%">
                        <label for="medium">20%</label><br>  
                        <input type="radio" id="many" name="sugar" value="30%">
                        <label for="many">30%</label><br><br>
                        <div class="quantity">
                            <input type="number" name="pQuantity" id="quantity" value="1">
                        </div>
                    </div>
                    <div class="addBtn">
                        <input type="submit" name="addBtn" value="ADD TO ORDERS">
                    </div>
                </div>

                <div class="container">
                    <div class="coffee-1">
                        <div class="img-box">
                            <img src="../img/hottea.png" alt="">
                        </div>
                        <div class="content">
                            <input class="h2" type="text" name="pName" value="Hot Tea" readonly>
                            <input class="p" type="text" name="pPrice" value="₱100.00" readonly>
                        </div>
                    </div>
                    <h2 class="sugar-title">Sugar</h2>
                    <div class="coffee-2">
                        <input type="radio" id="less" name="sugar" value="10%">
                        <label for="less">10%</label><br>
                        <input type="radio" id="medium" name="sugar" value="20%">
                        <label for="medium">20%</label><br>  
                        <input type="radio" id="many" name="sugar" value="30%">
                        <label for="many">30%</label><br><br>
                        <div class="quantity">
                            <input type="number" name="pQuantity" id="quantity" value="1">
                        </div>
                    </div>
                    <div class="addBtn">
                        <input type="submit" name="addBtn" value="ADD TO ORDERS">
                    </div>
                </div>

                <div class="container">
                    <div class="coffee-1">
                        <div class="img-box">
                            <img src="../img/chocolate-mocha.png" alt="">
                        </div>
                        <div class="content">
                            <input class="h2" type="text" name="pName" value="Hot Chocolate Mocha" readonly>
                            <input class="p" type="text" name="pPrice" value="₱255.00" readonly>
                        </div>
                    </div>
                    <h2 class="sugar-title">Sugar</h2>
                    <div class="coffee-2">
                        <input type="radio" id="less" name="sugar" value="10%">
                        <label for="less">10%</label><br>
                        <input type="radio" id="medium" name="sugar" value="20%">
                        <label for="medium">20%</label><br>  
                        <input type="radio" id="many" name="sugar" value="30%">
                        <label for="many">30%</label><br><br>
                        <div class="quantity">
                            <input type="number" name="pQuantity" id="quantity" value="1">
                        </div>
                    </div>
                    <div class="addBtn">
                        <input type="submit" name="addBtn" value="ADD TO ORDERS">
                    </div>
                </div>
            </form>
        </section>

        <!--===== MAIN JS =====-->
        <script src="../js/main.js"></script>
    </body>
</html>