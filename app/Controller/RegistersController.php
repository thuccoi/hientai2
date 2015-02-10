<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RegistersController
 *
 * @author Administrator
 */
class RegistersController extends AppController {
    //put your code here
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');
    var $uses = array('Register','Option','Checkbox','Mainregister');
    public function index() {
        $this->set('registers', $this->Register->find('all'));
    }

    public function view($id) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Register->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('registers', $registers);
    }

    
 
    public function add() {
        //debug($this->request->data);
        $options1 = $this->Option->getOptionGroups('1');
        $this->set(compact('options1'));
        
        $options2 = $this->Option->getOptionGroups('2');
        $this->set(compact('options2'));
        
        $options3 = $this->Option->getOptionGroups('3');
        $this->set(compact('options3'));
        
        $options4 = $this->Option->getOptionGroups('4');
        $this->set(compact('options4'));
        
        $this->set('checkboxs', $this->Checkbox->find('all'));
        $this->set(compact('checkboxs'));
        
        $checkboxs1 = $this->Checkbox->getCheckboxGroups('1');
        $this->set(compact('checkboxs1'));
        
        $checkboxs2 = $this->Checkbox->getCheckboxGroups('2');
        $this->set(compact('checkboxs2'));
        
        $checkboxs3 = $this->Checkbox->getCheckboxGroups('3');
        $this->set(compact('checkboxs3'));
        $checkboxs4 = $this->Checkbox->getCheckboxGroups('4');
        $this->set(compact('checkboxs4'));
        
        $checkboxs5 = $this->Checkbox->getCheckboxGroups('5');
        $this->set(compact('checkboxs5'));
        
        $checkboxs6 = $this->Checkbox->getCheckboxGroups('6');
        $this->set(compact('checkboxs6'));
        $checkboxs7 = $this->Checkbox->getCheckboxGroups('7');
        $this->set(compact('checkboxs7'));
        
        $checkboxs8 = $this->Checkbox->getCheckboxGroups('8');
        $this->set(compact('checkboxs8'));
        
    
        
        $this->Register->create();
        $this->Option->create();
        $this->Checkbox->create();
        
       if ($this->request->is('post')) {
           
            $data = $this->request->data;
            if(!empty($data['Register']['gyoshu']))
            {
                $biens=$data['Register']['gyoshu'];
                $noi="";
                foreach ($biens as $bien):
                    $noi=$bien.",".$noi;
                endforeach;
                $data['Register']['gyoshu']=$noi;
            }
            else {
                
            }
           
            if(!empty($data['Register']['firstank01']))
            {
                $biens=$data['Register']['firstank01'];
                $noi="";
                foreach ($biens as $bien):
                    $noi=$bien.",".$noi;
                endforeach;
                $data['Register']['firstank01']=$noi;
            }
            else {
                 
            }
            
             if(!empty($data['Register']['firstank04']))
            {
                $biens=$data['Register']['firstank04'];
                $noi="";
                foreach ($biens as $bien):
                    $noi=$bien.",".$noi;
                endforeach;
                $data['Register']['firstank04']=$noi;
            }
            else {
                 
            }
            
             if(!empty($data['Register']['firstank06']))
            {
                $biens=$data['Register']['firstank06'];
                $noi="";
                foreach ($biens as $bien):
                    $noi=$bien.",".$noi;
                endforeach;
                $data['Register']['firstank06']=$noi;
            }
            else {
                 
            }
            
             if(!empty($data['Register']['firstank09']))
            {
                $biens=$data['Register']['firstank09'];
                $noi="";
                foreach ($biens as $bien):
                    $noi=$bien.",".$noi;
                endforeach;
                $data['Register']['firstank09']=$noi;
            }
            else {
                 
            }
            
             if(!empty($data['Register']['firstank12']))
            {
                $biens=$data['Register']['firstank12'];
                $noi="";
                foreach ($biens as $bien):
                    $noi=$bien.",".$noi;
                endforeach;
                $data['Register']['firstank12']=$noi;
            }
            else {
                 
            }
            
             if(!empty($data['Register']['firstank28']))
            {
                $biens=$data['Register']['firstank28'];
                $noi="";
                foreach ($biens as $bien):
                    $noi=$bien.",".$noi;
                endforeach;
                $data['Register']['firstank28']=$noi;
            }
            else {
                 
            }
            
             if(!empty($data['Register']['firstank30']))
            {
                $biens=$data['Register']['firstank30'];
                $noi="";
                foreach ($biens as $bien):
                    $noi=$bien.",".$noi;
                endforeach;
                $data['Register']['firstank30']=$noi;
            }
            else {
                 
            }
            
           // debug($data);
           // die;
       
            if ($this->Register->save($data)
                    ) 
            {
               
                $this->Session->setFlash(__('Your post has been saved.'));
                return $this->redirect(array('action' => 'add2'));
            }
            $this->Session->setFlash(__('Unable to add your post.'));
             
        }
    }
    
    
    
     public function add2() {
        //debug($this->request->data);
        $options1 = $this->Option->getOptionGroups('1');
        $this->set(compact('options1'));
        
        $options2 = $this->Option->getOptionGroups('2');
        $this->set(compact('options2'));
        
        $options3 = $this->Option->getOptionGroups('3');
        $this->set(compact('options3'));
        
        $options4 = $this->Option->getOptionGroups('4');
        $this->set(compact('options4'));
        
        $this->set('checkboxs', $this->Checkbox->find('all'));
        $this->set(compact('checkboxs'));
        
        $checkboxs1 = $this->Checkbox->getCheckboxGroups('1');
        $this->set(compact('checkboxs1'));
        
        $checkboxs2 = $this->Checkbox->getCheckboxGroups('2');
        $this->set(compact('checkboxs2'));
        
        $checkboxs3 = $this->Checkbox->getCheckboxGroups('3');
        $this->set(compact('checkboxs3'));
        $checkboxs4 = $this->Checkbox->getCheckboxGroups('4');
        $this->set(compact('checkboxs4'));
        
        $checkboxs5 = $this->Checkbox->getCheckboxGroups('5');
        $this->set(compact('checkboxs5'));
        
        $checkboxs6 = $this->Checkbox->getCheckboxGroups('6');
        $this->set(compact('checkboxs6'));
        
        $checkboxs7 = $this->Checkbox->getCheckboxGroups('7');
        $this->set(compact('checkboxs7'));
        
        $checkboxs8 = $this->Checkbox->getCheckboxGroups('8');
        $this->set(compact('checkboxs8'));

        //code is here, this below
        $register_post='0';
        $this->set(compact('register_post'));
        
        $title_top='0';
        $this->set(compact('title_top'));
        
        $mail='0';
        $this->set(compact('mail'));
        
        $user='0';
        $this->set(compact('user'));
        
        $num_phone='0';
        $this->set(compact('num_phone'));
        $personalInfo='0';
        $this->set(compact('personalInfo'));

        $this->Register->create();
       if ($this->request->is('post')) {
           
          
            $data = $this->request->data;
            
            if(!empty($data['Register']['personalInfo']))
            {
                 //echo"da vao day";
                if ($data['Register']['personalInfo']=='1') {
                      $personalInfo='0';
                       //echo "'{$data['Register']['tel_num_a']}' la so" ;
                   } else {
                      
                         $personalInfo='1';
                    //   echo "''{$data['Register']['tel_num_a']}'khong la so";
               }
            }
            else{
                
               $personalInfo='1';
            }
            
            if(!empty($data['Register']['tel_num_a']))
            {
                 //echo"da vao day";
                if (is_numeric($data['Register']['tel_num_a'])) {
                      $num_phone='0';
                       //echo "'{$data['Register']['tel_num_a']}' la so" ;
                   } else {
                      
                         $num_phone='1';
                    //   echo "''{$data['Register']['tel_num_a']}'khong la so";
               }
            }
            else{
                
               $num_phone='1';
            }
            
             if(!empty($data['Register']['tel_num_e']))
            {
                 //echo"da vao day";
                if (is_numeric($data['Register']['tel_num_e'])) {
                      $num_phone='0';
                       //echo "'{$data['Register']['tel_num_a']}' la so" ;
                   } else {
                         $num_phone='1';
                    //   echo "''{$data['Register']['tel_num_a']}'khong la so";
               }
            }
            else{
                
               $num_phone='1';
            }
            
            if(!empty($data['Register']['tel_num_n']))
            {
                 //echo"da vao day";
                if (is_numeric($data['Register']['tel_num_n'])) {
                      $num_phone='0';
                       //echo "'{$data['Register']['tel_num_a']}' la so" ;
                   } else {
                         $num_phone='1';
                    //   echo "''{$data['Register']['tel_num_a']}'khong la so";
               }
            }
            else{
                
               $num_phone='1';
            }
            
            //code option content
            if(!empty($data['Register']['address1']))
            {
                if($this->Option->findById($data['Register']['address1'])['Option']['content']!='----- 選択してください -----')
                {
                    $data['Register']['address1']=$this->Option->findById($data['Register']['address1'])['Option']['content'];
                }
                else
                {
                     $data['Register']['address1']='';
                }
            }
            if(!empty($data['Register']['kubun']))
            {
                if($this->Option->findById($data['Register']['kubun'])['Option']['content']!='----- 選択してください -----')
                {
                    $data['Register']['kubun']=$this->Option->findById($data['Register']['kubun'])['Option']['content'];
                }
                else
                {
                     $data['Register']['kubun']='';
                }
            }
            if(!empty($data['Register']['uriage']))
            {
                if($this->Option->findById($data['Register']['uriage'])['Option']['content']!='----- 選択してください -----')
                {
                    $data['Register']['uriage']=$this->Option->findById($data['Register']['uriage'])['Option']['content'];
                }
                else
                {
                     $data['Register']['uriage']='';
                }
            }
            if(!empty($data['Register']['kibo']))
            {
                if($this->Option->findById($data['Register']['kibo'])['Option']['content']!='----- 選択してください -----')
                {
                    $data['Register']['kibo']=$this->Option->findById($data['Register']['kibo'])['Option']['content'];
                }
                else
                {
                     $data['Register']['kibo']='';
                }
            }
           
            //$this->Mainregister->getMainregisterMailGroups($data['Register']['mail']);
            //$this->Mainregister->getMainregisterUserGroups('a@a.com');
            
            if(!empty($data['Register']['mail']))
            {
                
                 //echo"da vao day";
                if ($this->Mainregister->getMainregisterMailGroups($data['Register']['mail'])==0) {
                      $mail='0';
                       //echo "'{$data['Register']['tel_num_a']}' la so" ;
                   } else {
                         $mail='1';
                    //   echo "''{$data['Register']['tel_num_a']}'khong la so";
               }
            }
            else{
                
               $mail='1';
            }
            
            if(!empty($data['Register']['user_name']))
            {
                
                 //echo"da vao day";
                if ($this->Mainregister->getMainregisterUserGroups($data['Register']['user_name'])==0) {
                      $user='0';
                       //echo "'{$data['Register']['tel_num_a']}' la so" ;
                   } else {
                         $user='1';
                    //   echo "''{$data['Register']['tel_num_a']}'khong la so";
               }
            }
            else{
                
               $user='1';
            }
            
            //code join checkbox
            if(!empty($data['Register']['gyoshu']))
            {
                $biens=$data['Register']['gyoshu'];
                $noi="";
                foreach ($biens as $bien):
                $noi=$this->Checkbox->findById($bien)['Checkbox']['content']." , ".$noi;
                endforeach;
                $data['Register']['gyoshu']=$noi;
            }
           
            if(!empty($data['Register']['firstank01']))
            {
                $biens=$data['Register']['firstank01'];
                $noi="";
                foreach ($biens as $bien):
                    $noi=$this->Checkbox->findById($bien)['Checkbox']['content']." , ".$noi;
                endforeach;
                $data['Register']['firstank01']=$noi;
            }
            
            if(!empty($data['Register']['firstank04']))
            {
                $biens=$data['Register']['firstank04'];
                $noi="";
                foreach ($biens as $bien):
                   $noi=$this->Checkbox->findById($bien)['Checkbox']['content']." , ".$noi;
                endforeach;
                $data['Register']['firstank04']=$noi;
            }
            
             if(!empty($data['Register']['firstank06']))
            {
                $biens=$data['Register']['firstank06'];
                $noi="";
                foreach ($biens as $bien):
                    $noi=$this->Checkbox->findById($bien)['Checkbox']['content']." , ".$noi;
                endforeach;
                $data['Register']['firstank06']=$noi;
            }
            
             if(!empty($data['Register']['firstank09']))
            {
                $biens=$data['Register']['firstank09'];
                $noi="";
                foreach ($biens as $bien):
                    $noi=$this->Checkbox->findById($bien)['Checkbox']['content']." , ".$noi;
                endforeach;
                $data['Register']['firstank09']=$noi;
            }
             if(!empty($data['Register']['firstank12']))
            {
                $biens=$data['Register']['firstank12'];
                $noi="";
                foreach ($biens as $bien):
                    $noi=$this->Checkbox->findById($bien)['Checkbox']['content']." , ".$noi;
                endforeach;
                $data['Register']['firstank12']=$noi;
            }
            if(!empty($data['Register']['firstank28']))
            {
                $biens=$data['Register']['firstank28'];
                $noi="";
                foreach ($biens as $bien):
                   $noi=$this->Checkbox->findById($bien)['Checkbox']['content']." , ".$noi;
                endforeach;
                $data['Register']['firstank28']=$noi;
            }
             if(!empty($data['Register']['firstank30']))
            {
                $biens=$data['Register']['firstank30'];
                $noi="";
                foreach ($biens as $bien):
                    $noi=$this->Checkbox->findById($bien)['Checkbox']['content']." , ".$noi;
                endforeach;
                $data['Register']['firstank30']=$noi;
            }
            
//            debug($data['Register']);
            if(isset($_POST['confirm']))
            {
                if($_POST['confirm']=='false')
                {
                     if($num_phone=='0'&&$personalInfo=='0'&&$mail=='0'&&$user=='0')
                    {
                        if ($this->Register->save($data['Register'])) 
                        {
                            $register_post='1';
                            $this->set(compact('register_post'));
                            $this->set(compact('data'));
                        }else{
                        //    debug($this->Register->validationErrors());
                        }

                    }
                   // echo " dung roi";
                }else if($_POST['confirm']=='true')
                {
                    $data = $this->request->data;
//                    debug($data);
//                    die;
                    $register_post='3';
                    $this->set(compact('register_post'));
                    $this->Mainregister->create();
                    $this->Mainregister->save($data);
                   // echo "chuan roi";
                }
            }
           // $this->Register->create();
            $title_top='1';
            $this->set(compact('mail'));
            $this->set(compact('user'));
            $this->set(compact('title_top'));
            $this->set(compact('num_phone'));
             $this->set(compact('personalInfo'));
           // $this->Session->setFlash(__('Unable to add your post.'));
             
        }
    }
    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Register->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Register->id = $id;
            if ($this->Register->save($this->request->data)) {
                $this->Session->setFlash(__('Your post has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to update your post.'));
        }

        if (!$this->request->data) {
            $this->request->data = $post;
        }
    }
    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Register->delete($id)) {
            $this->Session->setFlash(
                __('The post with id: %s has been deleted.', h($id))
            );
        } else {
            $this->Session->setFlash(
                __('The post with id: %s could not be deleted.', h($id))
            );
        }

        return $this->redirect(array('action' => 'index'));
    }
}
