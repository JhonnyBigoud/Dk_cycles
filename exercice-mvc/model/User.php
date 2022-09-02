<?php

class User extends Model
{
    public function addUser(array $userData) 
    {
        $bdd = $this->connect();

        $query = $bdd->prepare('INSERT INTO `users` (`firstname`,`name`,`email`,`password`) VALUES (:firstname, :name, :email, :password)');

        return $query->execute($userData);
        
    }

    public function getUserByEmail(string $email): bool|array
    {
        $bdd = $this->connect();

        $query = $bdd->prepare('SELECT * FROM `users` WHERE `email`= ?');

        $query->execute([$email]);

        return $query->fetch();
    }
}