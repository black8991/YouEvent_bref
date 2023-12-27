<?php

if(isset($_POST['submit']))
{
    $submit = $_POST['submit'];
    switch($submit)
    {
        case 'login':
            include('views/login.php');
        break;
        case 'register':
            include('views/register.php');
        break;
        default:
            include('views/home.php');
    }
}

if(isset($_GET['action']))
{
    $action = $_GET['action'];
    switch ($action) {
        case 'login':
            include 'views/login.php';
            break;
        case 'register':
            include 'views/register.php';
            break;
        }
}
else
    include('views/home.php');

?>