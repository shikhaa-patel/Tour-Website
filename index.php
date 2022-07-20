<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
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

   <!-- <div class="body">
      <div class="slider">
         <div class="slides">
            <input type="radio" name="rbtn" id="r1">
            <input type="radio" name="rbtn" id="r2">
            <input type="radio" name="rbtn" id="r3">
            <input type="radio" name="rbtn" id="r4">
            <input type="radio" name="rbtn" id="r5">
            <input type="radio" name="rbtn" id="r6">


            <div class="slide first" id="s1">
               <p>Explore,Discover,Travel</p>
               <h1>TRAVEL AROUND THE WORLD</h1>
               <button>Discover Tour</button>

            </div>
            <div class="slide" id="s2">
               <p>Explore,Discover,Travel</p>
               <h1>DISCOVER THE NEW PLACES</h1>
               <button>Discover Tour</button>
            </div>
            <div class="slide" id="s3">
               <p>Explore,Discover,Travel</p>
               <h1>MAKE YOUR TOUR WORTHWHILE</h1>
               <button>Discover Tour</button>
            </div>
            <div class="slide" id="s4">
               <p>Explore,Discover,Travel</p>
               <h1>TRAVEL WITH EFFICIENT BUDGET</h1>
               <button>Discover Tour</button>
            </div>
            <div class="slide" id="s5">
               <p>Explore,Discover,Travel</p>
               <h1>MUCH MORE EXCITING OFFERS</h1>
               <button>Discover Tour</button>
            </div>
            <div class="slide" id="s6">
               <p>Explore,Discover,Travel</p>
               <h1>EAT, SLEEP, TRAVEL ,REPEAT</h1>
               <button>Discover Tour</button>
            </div>


            <div class="navigate-auto">
               <div class="abtn1"></div>
               <div class="abtn2"></div>
               <div class="abtn3"></div>
               <div class="abtn4"></div>
               <div class="abtn5"></div>
               <div class="abtn6"></div>

            </div>

            <div class="navigate-manual">
               <label for="r1" class="mbtn"></label>
               <label for="r2" class="mbtn"></label>
               <label for="r3" class="mbtn"></label>
               <label for="r4" class="mbtn"></label>
               <label for="r5" class="mbtn"></label>
               <label for="r6" class="mbtn"></label>

            </div>
         </div>
      </div>
   </div> -->

   <!-- <img src="./images/cover/c8.jpg" alt="" style="width:100%;height: 600px;"> -->
   <div class="banners" style="background-image: url('./images/banners/b10.jpg');">
      <h1 class="bhead">TRAVEL AROUND THE WORLD</h1>
   </div>

   <h1 class="h1">OUR SERVICES</h1>
   <section class="services">
      <div class="scard">
         <img src="./images/services/adventures.png" alt="">
         <h3>Off Road</h3>
      </div>
      <div class="scard">
         <img src="./images/services/adventure.png" alt="">
         <h3>Adventure</h3>
      </div>
      <div class="scard">
         <img src="./images/services/backpack.png" alt="">
         <h3>Trekking</h3>
      </div>
      <div class="scard">
         <img src="./images/services/bonfire.png" alt="">
         <h3>Camp Fire</h3>
      </div>
      <div class="scard">
         <img src="./images/services/location.png" alt="">
         <h3>Tour Guide</h3>
      </div>
      <div class="scard">
         <img src="./images/services/tent.png" alt="">
         <h3>Camping</h3>
      </div>
   </section>


   <section class="about">
      <div class="apic">
         <img src="./images/about/a8.jpg" alt="">
      </div>
      <div class="ainfo">
         <div class="title">
            <h2 class="ab"> About Us</h2>
         </div>
         <div class="ainfo2">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis autem natus totam inventore debitis
               necessitatibus nobis illum commodi veniam mollitia maiores unde numquam, magnam eligendi odit dolorem
               saepe pariatur. Omnis?</p>
         </div>
         <button class="button"><a href="about.php">Read More </a></button>
      </div>
   </section>

   <h1 class="h1">OUR PACKAGES</h1>
   <section class="ps">
      <div class="pcard">
         <div class="pic">
            <img src="./images/packages/p2.jpg" alt="">
         </div>
         <h2>Adventure & Tour</h2>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, aliquam.</p>
         <button><a href="book.php">Book Now</a></button>
      </div>
      <div class="pcard">
         <div class="pic">
            <img src="./images/packages/p3.jpg" alt="">
         </div>
         <h2>Adventure & Tour</h2>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, aliquam.</p>
         <button><a href="book.php">Book Now</a></button>
      </div>
      <div class="pcard">
         <div class="pic">
            <img src="./images/packages/p4.jpg" alt="">
         </div>
         <h2>Adventure & Tour</h2>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, aliquam.</p>
         <button><a href="book.php">Book Now</a></button>
      </div>
   </section>
   <button class="loadbutton"><a href="package.php">More Packages</a></button>


   <section class="offer">
      <h1>Upto 50% off</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta porro maiores ipsum dolor quasi, aliquam nisi.
         Sapiente, libero voluptate? Sequi incidunt porro soluta distinctio harum molestiae est consectetur ullam quod!
      </p>
      <button><a href="book.php">Book Now</a></button>

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