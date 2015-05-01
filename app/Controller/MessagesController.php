<?php
App::uses('AppController', 'Controller');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MessagesController
 *
 * @author Bipin
 */
class MessagesController extends AppController{
    public $components= array('Paginator','Session');
    //put your code here

    public function index(){
        $this->Message->recursive = 0;
        //$this->set('messages',$this->Paginator->paginate());
        $this->set('messages',$this->Paginator->paginate());
    }
    
    public function add(){
        if($this->request->is('post')){
            //debug($this->request->data);
            $this->Message->create();
           
            if($this->Message->save($this->request->data)){
                
                $this->Session->setFlash(__('Message has been saved'));
                $this->redirect('index');
            }
        }
        else{
            //$options=$this->Message->User->find('list',array('fields'=>'name'  ));
            //$this->set('message_to',$this->Message->User->find('list',
              //      array('fields'=>'name')));
       }
    }
    
    public function edit($id=null){
        if(!$id){
            throw new NotFoundException(__('Id was not set'));
        }
        $data=$this->Message->findById($id);
        if(!$data){
            throw new NotFoundException(__('No data in database'));
        }
        
if($this->request->is('post')|| $this->request->is('put')){
    if($this->Message->save($this->request->data)){
        $this->Session->setFlash(__('Message has been successfully edited'));
        $this->redirect('index');
    }
    else{
        $this->Session->setFlash(__('The message could not be edited.'));
        $this->redirect('index');
    }
}
$this->request->data=$data;
    }
}
