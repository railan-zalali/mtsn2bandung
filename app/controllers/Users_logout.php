<?php
class Users_logout
{

    public function logout()
    {
        $_SESSION[''];
        session_unset();
        session_destroy();
        header('location: ' . BASEURL . '/home/login');
    }
}
