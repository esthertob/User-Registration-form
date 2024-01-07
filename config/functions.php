<?php
require_once 'db.php';

function register_user()
{
    global $con;
    if(isset($_POST['btn_signup']) || $_SERVER['REQUEST_METHOD']=='POST')
    {
echo "workin";
    }
}
?>