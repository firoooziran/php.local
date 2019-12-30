<?php

require_once "../DB.php";

class User extends  DB {

    public function __construct()
    {
        $this->table = "users";
    }

}

$user1 = new User();
echo $user1->all();

