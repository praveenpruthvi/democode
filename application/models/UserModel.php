<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model{

    public function getUserDetails($whereData=[]){
        if($result = $this->db->get_where("users",$whereData)){
            return $result->result("array");
        } else {
            return [];
        }
    }
}