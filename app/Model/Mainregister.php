<?php
App::uses('AppModel', 'Model');

class Mainregister extends AppModel {
     public function getMainregisterMailGroups($mail){
            $registergroups = $this->find('list',array('fields'=>array('Mainregister.mail'),
            'conditions' => array('Mainregister.mail' => $mail),
            'order'=>'Mainregister.id ASC',
            ));
            if($registergroups){
                return 1;
            }  else {
                return 0;
            }
        } 
        public function getMainregisterUserGroups($user){
            $registergroups = $this->find('list',array('fields'=>array('Mainregister.user_name'),
            'conditions' => array('Mainregister.user_name' => $user),
            'order'=>'Mainregister.id ASC',
            ));
           if($registergroups){
                return 1;
            }  else {
                return 0;
            }
        } 
}
