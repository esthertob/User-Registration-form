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
        else
        {
            if($password!=$cpassword)
            {
                $error = "<div>Password does not match</div>";
                set_message($error);
            }
            else
            {
                $query ="select * from signup where username = '$username'";
                $result = mysqli_query($con, $query);

                if(mysqli_num_rows($result))
                {
                    $error = "<div>Username already exist</div>";
                set_message($error);
                }
                else
                {
                    $query ="select * from signup where email = '$email'";
                    $result = mysqli_query($con, $query);

                    if(mysqli_num_rows($result))
                    {
                        $error = "<div>Email already exist</div>";
                    set_message($error);
                    }
                    else
                    {
                         // Use password_hash() for secure password hashing
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                // Now, you can proceed to insert the user into the database
                $sql = "INSERT INTO signup (username, password, email) VALUES ('$username', '$hashed_password', '$email')";
                $data = mysqli_query($con, $sql);

                if ($data) {
                    $success_message = "<div>Successful Registration</div>";
                    set_message($success_message);
                } else {
                    $error = "<div>Error: " . mysqli_error($con) . "</div>";
                    set_message($error);
                }
                    }
                }
            }
        }

    }

}

function login_user()
{
    global $con;
    if(isset($_POST['btn_login']) || $_SERVER['REQUEST_METHOD']=='POST')
    {
        $username = isset($_POST['username']) ? mysqli_real_escape_string($con, $_POST['username']) : '';
        $password = isset($_POST['password']) ? mysqli_real_escape_string($con, $_POST['password']) : '';

        

        if(empty($username) || empty($password))
        {
            $error = "<div>Please fill the blank spaces</div>";
            set_message($error);
        }
        else
        {
            $query ="select * from signup where username = '$username' or email = '$username'";
            $result = mysqli_query($con, $query);

            if($row = mysqli_fetch_assoc($result))
            {
                $db_pass = $row['password'];
                if (password_verify($password, $db_pass)) {
                    $_SESSION['ID'] = $row['id'];
                    $_SESSION['EMAIL'] = $row['email'];
                    header("location: ../user/user.php");
                    exit;
                } else {
                    $error = "<div>Enter correct Password</div>";
                    set_message($error);
                }
            }
            else
            {
                $error = "<div>Enter correct Username or Email</div>";
                set_message($error);
            }

           
        }

    }

}


    
?>