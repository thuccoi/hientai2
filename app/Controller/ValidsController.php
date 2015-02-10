<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ValidsController
 *
 * @author Administrator
 */

class ValidsController extends AppController{
    var $name = "Valids";
    var $helpers = array ('Html','Form');
    var $components = array('Session'); // Use Flash messenger of Session component
 
// ---- Valid one rule
    function demo01(){
                $this->Valid->set($this->data);
                if($this->Valid->valid_01()==TRUE){
                    $this->Session->setFlash("Data is avaliable !");
                }else{
                    $this->Session->setFlash("Data is not avaliable !");
                } 
    }
}