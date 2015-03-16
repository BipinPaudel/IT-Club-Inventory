<?php
App::uses('AppController', 'Controller');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoriesController
 *
 * @author Bipin
 */
class CategoriesController extends AppController {
    //put your code here
    public $components=array('Session','Paginator');
    public $helpers = array('Session');
    
    public function index(){
        $this->Category->recursive=0;
        $this->set('categories',$this->Paginator->paginate());
    }
    
    public function add(){
        if($this->request->is('post')){
            $this->Category->create();
            if($this->Category->save($this->request->data)){
                $this->Session->setFlash("The category has been added successfully");
                $this->redirect('index');
            }
            else{
                $this->Session->setFlash("The category is not successfully added");
                $this->redirect('add');
            }
        }
    }
    
    public function edit($id = null){
//        if($this->Category->exists($id)){
//            throw new NotFoundException (__('Id was not found '));
//        }
        if($this->Auth->user('role')=='admin'){
        if(!$id){
            throw new NotFoundException(__('Id was not set'));
        }
        
        $data=$this->Category->findById($id);
        if(!$data){
            throw new NotFoundException(__('Id was not found in database'));
        }
        
        if($this->request->is('post')|| $this->request->is('put') ){
            if($this->Category->save($this->request->data)){
                $this->Session->setFlash('The data has been edited successfully');
                return $this->redirect(array('action' => 'index'));
                //$this->redirect('index');
            }
            
            else{
                $this->Session->setFlash("The data could not be edited");
                $this->redirect('edit');
            }
        }
//        else{
//            $options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
//			$this->request->data = $this->Category->find('first', $options);
//        }
        $this->request->data=$data;
    }
    else{
        $this->Session->setFlash(__('You do not have right to do this'));
        $this->redirect('index');
    }
   }
    
    public function delete($id = null,$id2=null){
//        if(!$id){
//            throw new NotFoundException(__('Id was not set.'));
//        }
        if($this->Auth->user('role')=='admin'){
        $this->Category->id=$id;
        if(!$this->Category->exists() || !$id){
            throw new NotFoundException(__('Invalid item '));
        }
    if($this->request->allowMethod('post', 'delete')){
		if ($this->Category->delete()) {
			$this->Session->setFlash(__('The item has been deleted.'));
		} else {
			$this->Session->setFlash(__('The item could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
        }
        //deleteItem($id2);
    }
     else{
        $this->Session->setFlash(__('You do not have right to do this'));
        $this->redirect('index');
    }   
     }
    
    public function deleteItem($id){
        if(!$this->Item->exists($id) || !$id){
            throw new NotFoundException(__('Invalid item'));
        }
        
    }
 }
