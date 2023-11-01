<?php

class Model{

    protected $db = null;

    public function __construct(){
        $this->db = new DB();
        $this->db->connect(DB_DRIVER,DB_HOST,DB_USER,DB_PASS,DB_TABLE);
    }
}