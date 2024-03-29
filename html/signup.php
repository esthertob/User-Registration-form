<!-- Php code to include extenal pages -->
<?php include 'header.php';
include '../config/functions.php';
register_user();
?>
    <img class="wave" src="../img/wave.svg" alt="">
    <div class="container">
        <div class="img">
            <img src="../img/undraw_cooking_p7m1.svg" alt="">
        </div>

        <div class="login-container">
            <!-- Sign-up Form -->
            <form method="post" class="sign-up-form">
                <img class="avatar" src="../img/undraw_pic_profile_re_7g2h.svg" alt="">
                <h2>Welcome</h2>
                <?php 
                if(isset($_SESSION['MESSAGE']))
                {
                    display_message();

                }
                ?>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>

                    <div>
                       <h5>Username</h5>  
                       <input class="input" type="text" name="username">
                    </div>
                </div>

                <div class="input-div two">
                    <div class="i">
                        <i class="fa-solid fa-lock"></i>
                    </div>

                    <div>
                       <h5>Password</h5>  
                       <input class="input" type="password" name="password">
                    </div>
                </div>

                <div class="input-div ">
                    <div class="i">
                        <i class="fa-solid fa-unlock"></i>
                    </div>

                    <div>
                       <h5>Confirm password</h5>  
                       <input class="input" type="password" name="cpassword">
                    </div>
                </div>

                <div class="input-div two">
                    <div class="i">
                        <i class="fa-regular fa-envelope"></i>
                    </div>

                    <div>
                       <h5>Email</h5>  
                       <input class="input" type="text" name="email">
                    </div>
                </div>
            
                <input type="submit" class="btn" value="Signup" name="btn_signup">
                <a href="index.php">Already have account <span>Login</span></a>
            </form>
        </div>
    </div>

<!-- Php code to include footer -->
    <?php include 'footer.php';?>