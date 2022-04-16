<?php
$conn = mysqli_connect("localhost:8111","root","","enebla");
$result = mysqli_query($conn,"SELECT * FROM users");
$result1 = mysqli_query($conn,"SELECT * FROM orders");

$rowses = mysqli_num_rows($result);
$rowses1 = mysqli_num_rows($result1);



?>




<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon.png" />
    <title>Enebla.com|Admin Dashboard</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='admin.css ?v=<?php echo time(); ?>'>
    
</head>
<body>
<!-- ==========================================section 1 header===================================== -->

    <div class="container">
        <div class="navigation">
            <ul>
                <li><a href="#"><span class="icon"></span><span class="title">Enebla.com | Admin</span></a></li>
                <li><a href="#"><span class="icon"><ion-icon name="home-outline"></ion-icon></span><span class="title">DashBoard</span></a></li>
                
            </ul>
        </div>
<!-- ==========================================section 2 main===================================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
                <div class="user-img">
                    <!-- <img src="images/user.jpg" alt=""> -->
                </div>
            </div>

<!-- ==========================================section 3 cards===================================== -->
            <div class="cardbox">
                <div class="card">
                    <div>
                        <div class="numbers"> <?php echo $rowses?></div>
                        <div class="cardname">Number Of Users</div>
                    </div>
                    <div class="iconbox">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                    <div class="numbers"> <?php echo $rowses1?></div>
                        <div class="cardname">Sales</div>
                    </div>
                    <div class="iconbox">
                        <ion-icon name="cart-outline"></ion-icon>                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardname">Comments</div>
                    </div>
                    <div class="iconbox">
                        <ion-icon name="chatbubbles-outline"></ion-icon>                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">Enebla</div>
                        <div class="cardname">For You</div>
                    </div>
                    <div class="iconbox">
                        <ion-icon name="cash-outline"></ion-icon>                    </div>
                </div>
            </div>

            <div class="datalist">
<!-- ==========================================section 5 details===================================== -->
                <div class="recent-orders">
                    <div class="card-header">
                        <h2>Resent Orders</h2>
                        <a href="index.php" class="btn">Home</a>
                    </div>

                    
                    <table>

                        <thead>
                            <tr>
                                <td>Food Name</td>
                                <th>Price</th>
                                <th>Order Id</th>
                                <th>Quantity</th>
                                
                            </tr>
                        </thead>
                        
                        <?php
                            
                            $select_order = mysqli_query($conn, "SELECT * FROM `orders`") or die('query failed');
                            
                                while($row = mysqli_fetch_assoc($select_order)){
                        ?>
                            <tbody>
                            <tr>
                                <td><?php echo $row['food'] ?></td>
                                <td><?php echo $row['price'] ?></td>
                                <td><?php echo $row['order_id'] ?></td>
                                <td><?php echo $row['number_of_food'] ?></td>
                                

                            </tr>
                        </tbody>
                        <?php
                            };
                        
                        ?>

                    </table>
                </div>
<!-- ==========================================section 6 customers===================================== -->
            <div class="recent-customers">
                <div class="card-header">
                    <h2>Resent Customers</h2>
                </div>
                    <table>
                        <?php
                            $conn = mysqli_connect("localhost:8111","root","","enebla");
                            $select_user = mysqli_query($conn, "SELECT * FROM `users`") or die('query failed');
                            
                                while($row = mysqli_fetch_assoc($select_user)){
                        ?>
                            <tr>
                                <td width="60px"><div class="imgbx"><img src="images/male.png" alt=""></div></td>
                                <td><h4><?php echo $row['user_name'] ?><br><span><?php echo $row['user_city'] ?></span></h4></td>
                            </tr>

                        <?php
                            };
                        
                        ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
<!-- ==========================================section q script===================================== -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
    <script src='chart.js'></script>
    <script>
        //menu toggle
        let toggle = document.querySelector('.toggle');
        let navigation = document.querySelector('.navigation');
        let main = document.querySelector('.main');

        toggle.onclick = function(){
            navigation.classList.toggle('active');
            main.classList.toggle('active');

        }

        //listed hoverd 
        let list = document.querySelectorAll('.navigation li');
        function activeLink(){
            list.forEach((item) =>
            item.classList.remove('hovered'));
            this.classList.add('hovered');
            
        }
        list.forEach((item) => 
        item.addEventListener('mouseover',activeLink));
    </script>




</body>
</html>



























