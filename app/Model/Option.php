<?php 
 class Option extends AppModel{
        public function getOptionGroups($type){
            $optiongroups = $this->find('list',array('fields'=>array('Option.content'),
            'conditions' => array('Option.type' => $type),
            'order'=>'Option.id ASC',
            ));
            return $optiongroups;
        } 
  
    }