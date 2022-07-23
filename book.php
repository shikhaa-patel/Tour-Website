<?php
$insert = false;
if(isset($_POST['name'])){

    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
   //   echo "Success connecting to the db";

        $Name = $_POST['name'];
        $phone = $_POST['phone'];
        $where= $_POST['where'];
        $arrival = $_POST['arrival'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $total = $_POST['total'];
        $leaving= $_POST['leaving'];

        $sql = "INSERT INTO `ticket_book`.`tickets` (`Name`, `Phone`, `Whereto`, `Arrival date`, `Email`, `Address`, `Total`, `Leaving date`) VALUES ('$Name', '$phone', '$where', '$arrival', '$email', '$address ', '$total', '$leaving');";


        if($con->query($sql) == true){
         //   echo "Successfully inserted";
            $insert = true;
        }
        else{
            echo "ERROR: $sql <br> $con->error";
        }

        $con->close();
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelllor</title>
    <link rel="shortcut icon" href="./images/cover/c11.jpg" type="image/x-icon">
   <link rel="stylesheet" href="index.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   

</head>
<body>
      
   <nav>
      <div class="left">
         <li> TRAVEL</li>
      </div>
      <div class="right">
         <ul id="navlist">
            <li><a href="index.php"  class="active">HOME</a></li>
            <li><a href="package.php">PACKAGES</li></a>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="book.php">BOOK</a></li>
            <a href="#" id="close">
               <li><i class="fa-solid fa-xmark"></i></li>
            </a>
         </ul>
      </div>
      <div id="mobile">
         <i id="bar" class="fas fa-outdent"></i>
     </div>
   </nav>

   
   <!-- <img src="./images/cover/c4.jpg" alt="" style="width:100%;height: 600px; border-bottom-style: ridge;"> -->
   <div class="banner" style="background-image: url('./images/banners/b2.jpg') ;">
      <h1>BOOK NOW</h1>
</div>

   <h1 class="h1">BOOK YOUR TRIP!</h1>

   <section class="f">
       <div class="formm">
           <form action="book.php" method="POST">
                <div class="leftt">
                    <h3>Full Name :</h3>
                    <input type="text" name="name" placeholder="enter your name">
                    <h3>Phone :</h3>
                    <input type="text" name="phone" placeholder="enter your number">
                    <h3>Where To :</h3>
                    <input type="text" name="where" placeholder="place yoy want to visit">
                    <h3>Arrivals :</h3>
                    <input type="date" name="arrival">

                </div>
                <div class="rform">
                <div class="rightt">
                    <h3>Email :</h3>
                    <input type="email" name="email" placeholder="enter your email">
                    <h3>Address:</h3>
                    <input type="text" name="address" placeholder="enter your address">
                    <h3>How Many :</h3>
                    <input type="number" name="total" placeholder="number of guests">
                    <h3>Leaving :</h3>
                    <input type="date" name="leaving" >
                    
                </div>
                <button>Submit</button>
               </div>
           </form>
       </div>
   </section>

   <section class="footer">
    <div class="foot">
         <div class="quick">
          <h3>Quick Links</h3>
          <ul>
             <li><a href="#"> Home</a></li>
             <li><a href="#">Packages</a></li>
             <li><a href="#">About</a></li>
             <li><a href="#">Book</a></li>
          </ul>
         </div>
         <div class="extra">
          <h3>Extra Links</h3>
          <ul>
             <li>Need Help</li>
             <li>About Us</li>
             <li>Privacy Policy</li>
             <li>Terms of Use</li>
          </ul>
         </div>
         <div class="contact">
          <h3>Contact Info</h3>
          <ul>
             <li>+123-123-456</li>
             <li>+111-22-333</li>
             <li>sample@gmail.com</li>
             <li>Mumbai , India - 400104</li>
          </ul>
         </div>
         <div class="cinfo">
          <h3>Contact Info</h3>
          <ul>
             <li>Facebook</li>
             <li>Twitter</li>
             <li>Instagram</li>
             <li>Linkedin</li>
          </ul>
         </div>
    </div>
    <hr>
    <h3>Created by Me | All Rights Reserved</h3> 
 </section>


 <script>

   if(window.history.replaceState){
         window.history.replaceState(null,null,window.location.href);
   }

   const bar = document.getElementById('bar');
   const nav = document.getElementById('navlist');
   const close = document.getElementById('close')


   if (bar) {
      bar.addEventListener('click', () => {
         nav.classList.add('active')
      })
   }

   if (close) {
      close.addEventListener('click', () => {
         nav.classList.remove('active')
      })
   }


</script>
 <script src="index.js"></script>


</body>
</html>