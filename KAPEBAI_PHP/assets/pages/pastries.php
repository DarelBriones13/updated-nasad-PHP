<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="../css/pastries.css">

        <title>Kape Bai Pastries</title>
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
                <div class="box-container ">
                    <a href="../pages/menu.php" class="menu-link">
                        <img src="../img/1.png" alt="">
                        <p>HOT COFFEE</p>
                    </a>
                </div>
                <div class="box-container ">
                    <a href="../pages/iced-coffee.php" class="menu-link">
                        <img src="../img/2.png" alt="">
                        <p>ICED COFFEE</p>
                    </a>
                </div>

                <div class="box-container menu-active">
                    <a href="../pages/pastries.php" class="menu-link">
                        <img src="../img/3.png" alt="">
                        <p>PASTRIES</p>
                    </a>
                </div>   
            </div>
            <h1 class="hot-coffee">Pastries Menu</h1>
            <div class="menu-list">
                <div class="container">
                    <div class="coffee-1">
                        <div class="img-box">
                            <img src="../img/chocolate_cake.png" alt="">
                        </div>
                        <div class="content">
                            <h2>Chocolate Cake</h2>
                            <p>₱150.00</p>
                        </div>
                    </div>
                    <h2 class="sugar-title">Sugar</h2>
                    <div class="coffee-2">
                        <button>10%</button>
                        <button>20%</button>
                        <button>30%</button>
                        <div class="quantity">
                            <input type="number" name="quantity" id="" value="1">
                        </div>
                    </div>
                    <div class="addBtn">
                        <button name="addBtn">ADD TO ORDERS</button>
                    </div>
                </div>

                <div class="container">
                    <div class="coffee-1">
                        <div class="img-box">
                            <img src="../img/Cinnamon_roll.png" alt="">
                        </div>
                        <div class="content">
                            <h2>Cinnamon Roll</h2>
                            <p>₱50.00</p>
                        </div>
                    </div>
                    <h2 class="sugar-title">Sugar</h2>
                    <div class="coffee-2">
                        <button>10%</button>
                        <button>20%</button>
                        <button>30%</button>
                        <div class="quantity">
                            <input type="number" name="quantity" id="" value="1">
                        </div>
                    </div>
                    <div class="addBtn">
                        <button name="addBtn">ADD TO ORDERS</button>
                    </div>
                </div>

                <div class="container">
                    <div class="coffee-1">
                        <div class="img-box">
                            <img src="../img/empanada-borek-puff.png" alt="">
                        </div>
                        <div class="content">
                            <h2>Empanada Borek Puff</h2>
                            <p>₱50.00</p>
                        </div>
                    </div>
                    <h2 class="sugar-title">Sugar</h2>
                    <div class="coffee-2">
                        <button>10%</button>
                        <button>20%</button>
                        <button>30%</button>
                        <div class="quantity">
                            <input type="number" name="quantity" id="" value="1">
                        </div>
                    </div>
                    <div class="addBtn">
                        <button name="addBtn">ADD TO ORDERS</button>
                    </div>
                </div>

                <div class="container">
                    <div class="coffee-1">
                        <div class="img-box">
                            <img src="../img/belgian-liege-waffle.png" alt="">
                        </div>
                        <div class="content">
                            <h2>Belgian Liege Waffle</h2>
                            <p>₱175.00</p>
                        </div>
                    </div>
                    <h2 class="sugar-title">Sugar</h2>
                    <div class="coffee-2">
                        <button>10%</button>
                        <button>20%</button>
                        <button>30%</button>
                        <div class="quantity">
                            <input type="number" name="quantity" id="" value="1">
                        </div>
                    </div>
                    <div class="addBtn">
                        <button name="addBtn">ADD TO ORDERS</button>
                    </div>
                </div>

                <div class="container">
                    <div class="coffee-1">
                        <div class="img-box">
                            <img src="../img/Danish_Apricot.png" alt="">
                        </div>
                        <div class="content">
                            <h2>Danish Apricot</h2>
                            <p>₱180.00</p>
                        </div>
                    </div>
                    <h2 class="sugar-title">Sugar</h2>
                    <div class="coffee-2">
                        <button>10%</button>
                        <button>20%</button>
                        <button>30%</button>
                        <div class="quantity">
                            <input type="number" name="quantity" id="" value="1">
                        </div>
                    </div>
                    <div class="addBtn">
                        <button name="addBtn">ADD TO ORDERS</button>
                    </div>
                </div>

                <div class="container">
                    <div class="coffee-1">
                        <div class="img-box">
                            <img src="../img/gluten-free-sliced-bread.png" alt="">
                        </div>
                        <div class="content">
                            <h2>Gluten Sliced Bread</h2>
                            <p>₱180.00</p>
                        </div>
                    </div>
                    <h2 class="sugar-title">Sugar</h2>
                    <div class="coffee-2">
                        <button>10%</button>
                        <button>20%</button>
                        <button>30%</button>
                        <div class="quantity">
                            <input type="number" name="quantity" id="" value="1">
                        </div>
                    </div>
                    <div class="addBtn">
                        <button name="addBtn">ADD TO ORDERS</button>
                    </div>
                </div>

                <div class="container">
                    <div class="coffee-1">
                        <div class="img-box">
                            <img src="../img/honey-almond-mini-muffins.png" alt="">
                        </div>
                        <div class="content">
                            <h2>Honey Almond Muffins</h2>
                            <p>₱205.00</p>
                        </div>
                    </div>
                    <h2 class="sugar-title">Sugar</h2>
                    <div class="coffee-2">
                        <button>10%</button>
                        <button>20%</button>
                        <button>30%</button>
                        <div class="quantity">
                            <input type="number" name="quantity" id="" value="1">
                        </div>
                    </div>
                    <div class="addBtn">
                        <button name="addBtn">ADD TO ORDERS</button>
                    </div>
                </div>

                <div class="container">
                    <div class="coffee-1">
                        <div class="img-box">
                            <img src="../img/toaster-pancakes.png" alt="">
                        </div>
                        <div class="content">
                            <h2>Toaster Pancakes</h2>
                            <p>₱255.00</p>
                        </div>
                    </div>
                    <h2 class="sugar-title">Sugar</h2>
                    <div class="coffee-2">
                        <button>10%</button>
                        <button>20%</button>
                        <button>30%</button>
                        <div class="quantity">
                            <input type="number" name="quantity" id="" value="1">
                        </div>
                    </div>
                    <div class="addBtn">
                        <button name="addBtn">ADD TO ORDERS</button>
                    </div>
                </div>
            </div>
        </section>

        <!--===== MAIN JS =====-->
        <script src="../js/main.js"></script>
    </body>
</html>