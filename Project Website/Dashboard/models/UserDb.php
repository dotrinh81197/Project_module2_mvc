<?php

namespace model;

class UserDb
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function signUp($user)
    {

        $sql = "INSERT INTO `user` (`username`,`password`,`email`) VALUES (?,?,?);";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $user->username);
        $statement->bindParam(2, $user->password);
        $statement->bindParam(3, $user->email);

        return $statement->execute();
    }

    // public function signIn($user)
    // {

    //     $sql = "SELECT * `user` (`username`,`password`) VALUES (?,?);";
    //     $statement = $this->connection->prepare($sql);
    //     $statement->bindParam(1, $user->username);
    //     $statement->bindParam(2, $user->password);

    //     return $statement->execute();
    // }
    
}
