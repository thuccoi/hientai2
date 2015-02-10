<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Checkbox extends AppModel{
     public function getCheckboxGroups($type){
        $checkboxgroups = $this->find('list',array('fields'=>array('Checkbox.content'),
        'conditions' => array('Checkbox.type' => $type),
        'order'=>'Checkbox.id ASC',
        ));
        return $checkboxgroups;
    } 
}
