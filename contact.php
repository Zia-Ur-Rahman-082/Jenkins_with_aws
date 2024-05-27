<?php
include("header.php");
?>

    <section class="contact-form">
       <div class="container">
        <div class="form-wrapper">
            <div class="company-address">
                <div class="address-group">
                    <i class="fas fa-map-marker-alt fa-3x text-red"></i>
                    <h2 class="text-gray md-heading"></h2>
                    <p>56 street , Malit Town Karachi.</p>
                </div>
                <div class="address-group">
                    <i class="far fa-envelope fa-3x text-red"></i>
                    <h2 class="text-gray md-heading"></h2>
                    <p>htnjdbdb214@gmail.com.</p>
                </div>
                <div class="address-group">
                    <i class="fas fa-phone-square-alt fa-3x text-red"></i>
                    <h2 class="text-gray md-heading"></h2>
                    <p>+926595948989</p>
                </div>
                <img src="./img/5.jpg" alt="">
            </div>
            <form action="" class="form">
                <h1 class="lg-heading text-black">Contact Us</h1>
                <p class="text-gray">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis eaque molestias vero quibusdam est provident in error itaque nulla quas?</p>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="" id="username" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="" id="phone" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="" id="email" required>
                </div>
                <div class="form-group">
                    <label for="msg">Message</label>
                    <textarea type="text" name="" id="msg" required></textarea>
                </div>
                <button type="submit" class="form-btn">Submit</button>
            </form>
        </div>
       </div>
    </section>

 
</body>
</html>