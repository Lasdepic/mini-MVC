<?php

class UserDao
{

    private PDO $pdo;

    function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllUser()
    {
        $query = "SELECT * FROM Users";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $dataUser = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $users = [];
        foreach ($dataUser as $user) {
            $user = new User($user['id_user'], $user['User']);
            $users[] = $user;
        }

        return $users;
    }
}

