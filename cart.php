<?php
$connect=mysqli_connect("localhost:8111","root","","enebla");


if(!$connect){
  die("connection failed");
}


if(isset($_POST['fetira'])){

  $fetira= $_POST['fetira'];
  $fetira_amount=$_POST['fetira_amount'];
  $fetira_price=$_POST['fetira_price'];
 

  $sql="INSERT INTO orders(food,number_of_food,price) VALUES('$fetira','$fetira_amount','$fetira_price','user')";
  $sql_cart="INSERT INTO cart(food,number_of_food,price) VALUES('$fetira','$fetira_amount','$fetira_price','user')";
  $retrive_cart=mysqli_query($connect,$sql_cart);
  $retrive=mysqli_query($connect,$sql);
  if($retrive){
    
  }else{
    
  }
}

if(isset($_POST['beyaynetu'])){

  $beyaynetu=$_POST['beyaynetu'];
  $beyaynetu_amount=$_POST['beyaynetu_amount'];
  $beyaynetu_price=$_POST['beyaynetu_price'];

 

  $sql="INSERT INTO orders(food,number_of_food,price,user_name) VALUES('$beyaynetu','$beyaynetu_amount','$beyaynetu_price','user')";
$sql_cart="INSERT INTO cart(food,number_of_food,price,user_name) VALUES('$beyaynetu','$beyaynetu_amount','$beyaynetu_price','user')";
  $retrive_cart=mysqli_query($connect,$sql_cart);
  $retrive=mysqli_query($connect,$sql);
  if($retrive){
    
  }else{
    
  }
}


if(isset($_POST['shiro_tegabino'])){

  $shiro_tegabino=$_POST['shiro_tegabino'];
  $shiro_tegabino_amount=$_POST['shiro_tegabino_amount'];
  $shiro_tegabino_Price=$_POST['shiro_tegabino_Price'];

  $sql="INSERT INTO orders(food,number_of_food,price,user_name) VALUES('$shiro_tegabino','$shiro_tegabino_amount',$shiro_tegabino_Price,'user')";
$sql_cart="INSERT INTO cart(food,number_of_food,price,user_name) VALUES('$shiro_tegabino','$shiro_tegabino_amount',$shiro_tegabino_Price,'user')";
  $retrive_cart=mysqli_query($connect,$sql_cart);
  $retrive=mysqli_query($connect,$sql);
  if($retrive){
    
  }else{
    
  }
}


if(isset($_POST['chicken_Roast'])){

  $chicken_Roast=$_POST['chicken_Roast'];
  $chicken_Roast_amount=$_POST['chicken_Roast_amount'];
 $chicken_Roast_price=$_POST['chicken_Roast_price'];

  $sql="INSERT INTO orders(food,number_of_food,price,user_name) VALUES('$chicken_Roast','$chicken_Roast_amount','$chicken_Roast_price','user')";
$sql_cart="INSERT INTO cart(food,number_of_food,price,user_name) VALUES('$chicken_Roast','$chicken_Roast_amount','$chicken_Roast_price','user')";
  $retrive_cart=mysqli_query($connect,$sql_cart);
  $retrive=mysqli_query($connect,$sql);
  if($retrive){
    
  }else{
    
  }
}


if(isset($_POST['tibs'])){

  $tibs=$_POST['tibs'];
  $tibs_amount=$_POST['tibs_amount'];
  $tibs_price=$_POST['tibs_price'];
  

  $sql="INSERT INTO orders(food,number_of_food,price,user_name) VALUES('$tibs','$tibs_amount','$tibs_price','user')";
$sql_cart="INSERT INTO cart(food,number_of_food,price,user_name) VALUES('$tibs','$tibs_amount','$tibs_price','user')";
  $retrive_cart=mysqli_query($connect,$sql_cart);
  $retrive=mysqli_query($connect,$sql);
  if($retrive){
    
  }else{
    
  }
}



if(isset($_POST['kitfo'])){

  $kitfo=$_POST['kitfo'];
  $kitfo_amount=$_POST['kitfo_amount'];
  $kitfo_price=$_POST['kitfo_price'];

  $sql="INSERT INTO orders(food,number_of_food,price,user_name) VALUES('$kitfo','$kitfo_amount','$kitfo_price','user')";
$sql_cart="INSERT INTO cart(food,number_of_food,price,user_name) VALUES('$kitfo','$kitfo_amount','$kitfo_price','user')";
  $retrive_cart=mysqli_query($connect,$sql_cart);
  $retrive=mysqli_query($connect,$sql);
  if($retrive){
    
  }else{
    
  }
}



if(isset($_POST['tere_siga'])){

  $tere_siga=$_POST['tere_siga'];
  $tere_siga_amount=$_POST['tere_siga_amount'];
  $tere_sega_price=$_POST['tere_sega_price'];

  $sql="INSERT INTO orders(food,number_of_food,price,user_name) VALUES('$tere_siga','$tere_siga_amount','$tere_sega_price','user')";
$sql_cart="INSERT INTO cart(food,number_of_food,price,user_name) VALUES('$tere_siga','$tere_siga_amount','$tere_sega_price','user')";
  $retrive_cart=mysqli_query($connect,$sql_cart);
  $retrive=mysqli_query($connect,$sql);
  if($retrive){
    
  }else{
    
  }
}




if(isset($_POST['Doro_wot'])){

  $Doro_wot=$_POST['Doro_wot'];
  $Doro_wot_amount=$_POST['Doro_wot_amount'];
  $doro_wot_price=$_POST['doro_wot_price'];

  $sql="INSERT INTO orders(food,number_of_food,price,user_name) VALUES('$Doro_wot','$Doro_wot_amount','$doro_wot_price','user')";
$sql_cart="INSERT INTO cart(food,number_of_food,price,user_name) VALUES('$Doro_wot','$Doro_wot_amount','$doro_wot_price','user')";
  $retrive_cart=mysqli_query($connect,$sql_cart);
  $retrive=mysqli_query($connect,$sql);
  if($retrive){
    
  }else{
    
  }
}



if(isset($_POST['Enkulal_firfir'])){

  $Enkulal_firfir=$_POST['Enkulal_firfir'];
  $Enkulal_firfir_amount=$_POST['Enkulal_firfir_amount'];
  $Enkulal_firfir_price=$_POST['Enkulal_firfir_price'];

  $sql="INSERT INTO orders(food,number_of_food,price,user_name) VALUES('$Enkulal_firfir','$Enkulal_firfir_amount','$Enkulal_firfir_price','user')";
$sql_cart="INSERT INTO cart(food,number_of_food,price,user_name) VALUES('$Enkulal_firfir','$Enkulal_firfir_amount','$Enkulal_firfir_price','user')";
  $retrive_cart=mysqli_query($connect,$sql_cart);
  $retrive=mysqli_query($connect,$sql);
  if($retrive){
    
  }else{
    
  }
}




if(isset($_POST['dulet'])){

  $dulet=$_POST['dulet'];
  $dulet_amount=$_POST['dulet_amount'];
  $dulet_price=$_POST['dulet_price'];

  $sql="INSERT INTO orders(food,number_of_food,price,user_name) VALUES('$dulet','$dulet_amount',$dulet_price,'user')";
$sql_cart="INSERT INTO cart(food,number_of_food,price,user_name) VALUES('$dulet','$dulet_amount',$dulet_price,'user')";
  $retrive_cart=mysqli_query($connect,$sql_cart);
  $retrive=mysqli_query($connect,$sql);
  if($retrive){
    
  }else{
    
  }
}


if(isset($_POST['Dabbo_firfir'])){

  $Dabbo_firfir=$_POST['Dabbo_firfir'];
  $Dabbo_firfir_amount=$_POST['Dabbo_firfir_amount'];
  $Dabbo_firfir_price=$_POST['Dabbo_firfir_price'];

  $sql="INSERT INTO orders(food,number_of_food,price,user_name) VALUES('$Dabbo_firfir','$Dabbo_firfir_amount','$Dabbo_firfir_price','user')";
  $sql_cart="INSERT INTO cart(food,number_of_food,price,user_name) VALUES('$Dabbo_firfir','$Dabbo_firfir_amount','$Dabbo_firfir_price','user')";
  $retrive_cart=mysqli_query($connect,$sql_cart);

  $retrive=mysqli_query($connect,$sql);
  if($retrive){
    
  }else{
    
  }
}
if(isset($_POST['fuul'])){

  $fuul=$_POST['fuul'];
  $fuul_amount=$_POST['fuul_amount'];
  $fuul_price=$_POST['fuul_price'];

  $sql="INSERT INTO orders(food,number_of_food,price,user_name) VALUES('$fuul','$fuul_amount','$fuul_price','user')";
  $sql_cart="INSERT INTO cart(food,number_of_food,price,user_name) VALUES('$fuul','$fuul_amount','$fuul_price','user')";
  $retrive_cart=mysqli_query($connect,$sql_cart);

  $retrive=mysqli_query($connect,$sql);
  if($retrive){
    
  }else{
    
  }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon.png" />
    <title>Enebla.com| Order Your Food In Just A Click</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='admin.css?v=<?php echo time(); ?>'>
    
</head>
<body>
<!-- ==========================================section 1 header===================================== -->

    <div class="container">
        <div class="navigation">
            <ul>
                <li><a href="index.php"><span class="icon"><i class="fas fa-utensils"></i></span><span class="title">Enebla.com</span></a></li>
                <li><a href="#"><span class="icon"><ion-icon name="people-outline"></ion-icon></span><span class="title">Orders</span></a></li>
                </ul>
        </div>
<!-- ==========================================section 2 main===================================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
             
                <div class="user-img">
                  
                </div>
            </div>



            <div class="datalist">
<!-- ==========================================section 5 details===================================== -->
                <div class="recent-orders">
                    <div class="card-header">
                        <h2>Your Orders</h2>
                        <a href="index.php" class="btn">Home</a>
                    </div>
                    <table style="table-layout:fixed">

                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Price</td>
                                <td>Order_id</td>
                                <td>Quantity</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                       
                        <?php
                            
                            $select_order = mysqli_query($connect, "SELECT * FROM `cart`") or die('query failed');
                            
                                while($row = mysqli_fetch_assoc($select_order)){
                        ?>
                            <tbody>
                            <tr>
                                <td><?php echo $row['food'] ?></td>
                                <td><?php echo $row['price'] ?></td>
                                <td><?php echo $row['order_id'] ?></td>
                                <td><?php echo $row['number_of_food'] ?></td>
                                <td><?php echo "Pending"?></td>

                            </tr>
                        </tbody>
                        <?php
                            };
                        
                        ?>

                    </table>
                    
                        <div class="card-header">
                        <form action="query.php" method="POST">
                            <button type="submit" value ="submit" class="btn" id="cancel">Cancel Order</button>
                        </form>
                        <form action="pay.php" method="POST">
                            <button type="submit" value ="submit" class="btn" id="proced">Proced To Payment</button>
                        </form>
                            <!-- <a href="checkout.php" class="btn" id="proced"><button type="submit" value ="submit">Proced To Payment</button></a> -->
                        </div>
                    
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



























