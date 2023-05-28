<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Bangkok");
class Service_model extends CI_Model { 

    public function allBrand() {
        $query = "SELECT * FROM brand";
        $exec = $this->db->query($query);
        return ($exec->num_rows() > 0 )?$exec->result_array():array();
    }

    public function checkCust($lineID){
        $query = " SELECT * FROM user WHERE user_line_id = '$lineID' ";
        $exec = $this->db->query($query);
        return ($exec->num_rows() > 0 )?$exec->result_array():array();
    }

    public function insertWorksheet($insertData){
        $dateToday = $insertData['today'];
        $imgOne = $insertData['imgOne'];
        $imgTwo = $insertData['imgTwo'];
        $type = $insertData['type'];
        $brand = $insertData['brand'];
        $subbrand = $insertData['subbrand'];
        $comment = $insertData['comment'];

        $query = " INSERT INTO `worksheet`(`worksheet_create_date`, `worksheet_status`, 
                                            `worksheet_flag`, `worksheet_type`, 
                                            `worksheet_brand`, `worksheet_subbrand`, 
                                            `worksheet_comment`, `worksheet_img_path_one`, 
                                            `worksheet_img_path_two`) 
                    VALUES ('$dateToday','รอส่งร้าน','0','$type','$brand',
                            '$subbrand','$comment','$imgOne','$imgTwo') ";
        $exec = $this->db->query($query);
        return $this->db->insert_id();
    }

    public function insertHistory($insertData){
        $userID = $insertData['userID'];
        $wsID = $insertData['wsID'];
        $lineID = $insertData['lineID'];

        $query = " INSERT INTO `history`(`user_line_id`, `worksheet_id`, `user_id`) 
                    VALUES ('$lineID', '$wsID', '$userID')";
        $exec = $this->db->query($query);
    }
}