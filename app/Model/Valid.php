<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Valid
 *
 * @author Administrator
 */
class valid extends  AppModel{  
    var $useTable = false;
    var $validate = array();
    
    
    //------- Valid 01 :  one rule
    function valid_01(){
        $this->validate = array(
                                    "title" => array(
                                                            "rule" => "numeric",
                                                            "message" => "Please enter numbers !",
                                                        ),
                                    "info" => array(
                                                            "rule" => "notEmpty", // tập luật là không rỗng
                                                            "message" => "Please enter info !", // thông báo khi có lỗi
                                                        )
                                ); 
       if($this->validates($this->validate)) // nếu dữ liệu đã được validate (hợp lệ)
        return TRUE; 
       else 
        return FALSE;
    }
}