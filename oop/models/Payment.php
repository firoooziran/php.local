<?php

require_once "../DB.php";

class Payment extends  DB{
    public function __construct()
    {
        $this->table = "paments";
    }

    public function get_all_payment_user_id($user_id)
    {
        return "select * from {$this->table} where payment_user_id={$user_id}";
    }
}

