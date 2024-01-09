<?php include 'header.php';
require_once '../config/functions.php';
 login_user();
?>
    <img class="wave" src="../img/wave.svg" alt="">
    <div class="container">
        <div class="img">
            <img src="../img/undraw_cooking_p7m1.svg" alt="">
        </div>

        <div class="login-container">
            <form method="POST">
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
                       <h5>Username or Email</h5>  
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
                <a href="#">Forgotten Password</a>
                <input type="submit" class="btn" value="Login" name="btn_login">
                <a href="signup.php">Create a new account <span>Login</span></a>

            </form>
        </div>
    </div>

    <?php include 'footer.php';?>