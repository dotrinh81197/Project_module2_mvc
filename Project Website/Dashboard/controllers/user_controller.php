<?php


class UserController extends BaseController
{
    protected function getFolder()
    {
        return "users";
    }


    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            $user = new User($username, $password, $email);
            if ($this->UserDb->checkExistUsername($user->username)) {

                $msg['msg'] = "* Username already exist";


                header('Location:'  . "view/register.php?msg=" . $msg['msg']);
            } else {
                if ($this->UserDb->checkExistEmail($user->email)) {
                    $msg['msg'] = "* Email already exist";

                    header('Location:'  . "view/register.php?msg=" . $msg['msg']);
                } else {
                    $this->UserDb->signUp($user);
                    $msg['msg'] = "* Sign Up success";

                    header('Location:'  . "view/login.php?msg=" . $msg['msg']);
                }
            }
        }
    }

    public function logIn()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username =  $_POST['username'];
            $password = $_POST['password'];
            $email = '';
        }
        $user = new User($username, $password, $email);
        if ($this->UserDb->checkExistUser($user->username, $user->password)) {
            $_SESSION['username'] = $username;
            header(('Location:' . "index.php"));
        }
    }

    public function logOut()
    {

        header(('Location:' . "view/logout.php"));
    }

    public function checkExistUsername($username)
    {

        $sql = "SELECT * FROM `user` WHERE `username`= '$username'";
        $statement = $this->connection->prepare($sql);
        $statement->execute();

        $result = $statement->fetchAll();

        if (isset($result) && count($result) > 0) {
            return true;
        } else {
            return false;
        }
    }

    // check exists user to login
    protected function checkExistUser($username, $password)
    {

        $sql = "SELECT * FROM `user` WHERE  `username`='$username' AND `password`= '$password' ";
        $statement = $this->connection->prepare($sql);
        $statement->execute();

        $result = $statement->fetchAll();

        if (isset($result) && count($result) > 0) {
            return true;
        } else {
            return false;
        }
    }

    protected function checkExistEmail($email)
    {

        $sql = "SELECT * FROM `user` WHERE `email`= '$email'";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        var_dump($result);
        if (isset($result) && COUNT($result) > 0) {
            return true;
        } else {
            return false;
        }
    }
}
