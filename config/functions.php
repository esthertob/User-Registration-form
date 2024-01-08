<?php
session_start();
require_once 'db.php';

// Set Sesion Message
function set_message($msg)
{
    if(!empty($msg))
    {
        $_SESSION['MESSAGE'] = $msg;
    }
    else
    {
        $msg = '';
    }
}

// Display Session Message
function display_message()
{
    if(isset($_SESSION['MESSAGE']))
    {
        echo $_SESSION['MESSAGE'];
        unset($_SESSION['MESSAGE']);
    }
}

$con = mysqli_connect("localhost", "simple", "simpleuser", "db_form");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

function register_user()
{
    global $con;
    if(isset($_POST['btn_signup']) || $_SERVER['REQUEST_METHOD']=='POST')
    {
        $username = isset($_POST['username']) ? mysqli_real_escape_string($con, $_POST['username']) : '';
        $password = isset($_POST['password']) ? mysqli_real_escape_string($con, $_POST['password']) : '';
        $cpassword = isset($_POST['cpassword']) ? mysqli_real_escape_string($con, $_POST['cpassword']) : '';
        $email = isset($_POST['email']) ? mysqli_real_escape_string($con, $_POST['email']) : '';
        

        if(empty($username) || empty($password) || empty($cpassword) || empty($email))
        {
            $error = "<div>Please fill the blank spaces</div>";
            set_message($error);
        }

    }

}
    
?>