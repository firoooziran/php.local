<?php

require_once "../DB.php";

class Post extends  DB
{
    public function __construct()
    {
        $this->table = "posts";
    }
}


$post1 = new Post();
var_dump($post1);